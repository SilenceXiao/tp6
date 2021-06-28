<?php

namespace app\api\validate;

use think\Validate;
use think\validate\ValidateRule as Rule;

class User extends Validate{

    protected $rule =[
        'username' => 'require',
        'password' => 'require',
        'phone' => 'require|mobile',
        
    ];

    protected $message = [
        'username' => '用户名必须',
        'password' => '密码必须',
        'phone.require' => '电话号码必须',
        'phone.mobile' => '无效的电话'
    ];

    protected $scene = [
        'send_code' => ['phone'],
    ];
}