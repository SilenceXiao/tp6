<?php
namespace app\admin\business;

use app\common\model\mysql\AdminUser as AdminUserModel;

class AdminUser {

    public $adminUser = null;

    public function __construct()
    {
        $this->adminUser = new AdminUserModel();
    }

    /**
     * 用户登录业务层
     * @param [type] $data
     * @return void
     */
    public function login($data){
        $adminUser = $this->getAdminUserByUsername($data['username']);
        //用户是否存在
        if(empty($adminUser)){
            throw new \think\Exception('用户名不存在');
        }
        
        //密码是否正确
        if($adminUser['password'] != md5($data['password'].'_user')){
            // return show(config('status.error'),'密码不正确');
            throw new \think\Exception('密码不正确');
        }

        $updateData = [
            'update_time' => date('Y-m-d H:i:s',time()),
            'last_login_time' => date('Y-m-d H:i:s',time()),
            'last_login_ip' => request()->ip(),
        ];

        $res = $this->adminUser->updateDataById($adminUser['id'],$updateData);
        if(!$res){
            throw new \think\Exception('登录失败,数据更新失败');
            // return show(config('status.error'),'登录失败');
        }
        //记录session
        session(config('admin.admin_session'),$adminUser);
        return true;
    }

    /**
     * 根据用户名获取信息
     * @param [type] $username
     * @return void
     */
    public function getAdminUserByUsername($username){
        $adminUser = $this->adminUser->getAdminUserByUsername($username);
        //用户是否存在
        if(empty($adminUser) || $adminUser['status'] != config('status.mysql.table_normal')){
            return [];
        }
        $adminUser = $adminUser->toArray();
        return $adminUser;
    }
}