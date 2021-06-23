<?php
namespace app\admin\controller;

use app\BaseController;
use app\common\model\mysql\AdminUser;
use think\facade\Db;
use think\facade\View;
use app\admin\controller\AdminBase;
class Login extends BaseController{

    // public function initialize()
    // {
    //     if($this->isLogin()){
    //         return $this->redirect(url('index/index'));
    //     }
    // }
    public function index(){
        return View::fetch();
    }

    public function md5(){
        echo md5("admin_user");
        dump(session('admin_user'));
    }

    /**
     * 后台登录验证
     * @return void
     */
    public function check(){
        $name = $this->request->param('username','','trim');
        $password = $this->request->param('password','','trim');
        $captcha = $this->request->param('captcha','','trim');

        if(!$this->request->isPost()){
            return show(config('status.error'),'请求方式错误',[]);
        }

        //验证参数
        if( empty($name) || empty($password) || empty($captcha) ){
            return show(config('status.error'),'参数不能为空');
        }

        //验证码校验
        if( !captcha_check($captcha) ){
            return show(config('status.error'),'验证码错误');
        }

        Db::startTrans();
        try {
            $model = new AdminUser();
            $adminUser = $model->getAdminUserByUsername($name);
            //用户是否存在
            if(empty($adminUser) || $adminUser['status'] != config('status.mysql.table_normal')){
                return show(config('status.error'),'用户名不存在');
            }
            
            //密码是否正确
            if($adminUser['password'] != md5($password.'_user')){
                return show(config('status.error'),'密码不正确');
            }

            $updateData = [
                'update_time' => date('Y-m-d H:i:s',time()),
                'last_login_time' => date('Y-m-d H:i:s',time()),
                'last_login_ip' => request()->ip(),
            ];

            $res = $model->updateDataById($adminUser['id'],$updateData);
            if(!$res){
                return show(config('status.error'),'登录失败');
            }
            //记录session
            session(config('admin.session_admin'),$adminUser);
            Db::commit();
            return show(config('status.success'),'登录成功');
        } catch (\Exception $e) {
            Db::rollback();
            return show(config('status.error'),'登录失败,内部异常');
        }

    }

    /**
     * 登出
     * @return void
     */
    public function loginOut(){
        session(config('admin.admin_user'),null);
        return redirect(url('login/index'));
    }
}