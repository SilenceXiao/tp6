<?php
namespace app\api\controller;

use app\BaseController;
use app\api\validate\User as ValidateUser;
use app\common\business\User;
use think\facade\Db;

class Login extends BaseController{

    public function login(){
        $type = $this->request->param('type','','trim');
        $code = $this->request->param('code','','intval');
        $phone_number = $this->request->param('phone_number','','trim');

        if(!$this->request->isPost()){
            return show(config('status.error'),'请求方式错误',[]);
        }
        
        //引用validate验证机制参数验证
        $data = [
            'type' => $type,
            'code' => $code,
            'phone' => $phone_number,
        ];

        $validate = new ValidateUser();
        $result = $validate->scene('login')->check($data);
        if(!$result){
            return show(config('status.error'),$validate->getError());
        }
        
        //1 生成token 
        //2 记录redis
        //3 返回token数据给前端 
        Db::startTrans();
        try {
            $userObj = new User();
            $user = $userObj->login($data);
            if(empty($user)){
                return show(config('status.error'),'登录失败',$user);
            }
            Db::commit();
            return show(config('status.success'),'登录成功',$user);
            
        } catch (\Exception $e) {
            Db::rollback();
            return show($e->getCode(),$e->getMessage());
        }

    }
}