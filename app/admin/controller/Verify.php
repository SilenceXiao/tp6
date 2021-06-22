<?php
namespace app\admin\controller;

use think\captcha\facade\Captcha;
class Verify{
    /**
     * 自定义验证码
     * @return void
     */
    public function captcha(){
        return Captcha::create('verify');
    }
}