<?php

namespace app\api\validate;

use think\Validate;
use think\validate\ValidateRule as Rule;

class User extends Validate{

    protected $rule =[
        'username' => 'require',
        'password' => 'require',
        'phone' => 'require|mobile',
        'code' => 'require',
        'type' => ['require', 'in'=>'1,2'],
        'sex' => ['require', 'in'=>'0,1,2'],
        
    ];

    protected $message = [
        'username' => '用户名必须',
        'code' => '验证码必须',
        'password' => '密码必须',
        'phone.require' => '电话号码必须',
        'type.require' => '登录类型必须',
        'type.in' => '登录类型错误',
        'sex.in' => '性别数据错误',
    ];

    protected $scene = [
        'send_code' => ['phone'],
        'login' => ['phone','code','type'],
        'update_user' => ['username','sex']
    ];
}