<?php
namespace app\api\controller;

use app\common\business\User as BusinessUser;

class User extends AuthBase{

    public function index(){
        $user = (new BusinessUser())->getUserById($this->userId);
        
        $result = [
            'id' => $user['id'],
            'username' => $user['username'],
            'sex' => $user['sex'],
            'phone' => $user['phone'],
        ];
        return show(config('status.success'),'ok',$result);
    }
}