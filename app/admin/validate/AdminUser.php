<?php

namespace app\admin\validate;

use think\Validate;

class AdminUser extends Validate{

    protected $rule =[
        'username' => 'required',
        'password' => 'required',
        'captcha' => 'required',
    ];

    protected $message = [
        'username' => '用户名必须',
        'password' => '密码必须',
        'captcha' => '验证码必须',
    ];

    public function checkCaptcha(){
        
    }
}