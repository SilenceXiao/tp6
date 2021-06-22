<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
class Login extends BaseController{

    public function index(){
        return View::fetch();
    }

    public function check(){
        $name = $this->request->param('username','','trim');
        $password = $this->request->param('password','','trim');
        $captcha = $this->request->param('captcha','','trim');
        //验证参数
        if( empty($name) || empty($password) || empty($captcha) ){
            return show(config('status.error'),'参数不能为空');
        }

        //验证码校验
        if( !captcha_check($captcha) ){
            return show(config('status.error'),'验证码错误');
        }

        if(!$this->request->isPost()){
            return show(config('status.error'),'请求方式错误',[]);
        }

        return show(config('status.success'),'登录成功',[]);
    }
}