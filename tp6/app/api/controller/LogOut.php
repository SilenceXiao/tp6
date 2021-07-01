<?php
namespace app\api\controller;

class LogOut extends AuthBase{

    public function index(){
        cache(config('redis.user_token_pre').$this->accessToken,null);
        return show(config('status.success'),'登出成功');
    }
}