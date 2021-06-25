<?php
namespace app\admin\controller;

use app\BaseController;
use think\exception\HttpResponseException;

class AdminBase extends BaseController{

    public $adminUser = null;

    public function initialize(){
        parent::initialize();

        // if(!$this->isLogin()){
        //     return $this->redirect(url('login/index'),302);
        // }
    }

    public function isLogin(){
        $this->adminUser = session(config('admin.admin_session'));
        if(empty($this->adminUser)){
            return false;
        }
        return true;
    }

    /**
     * 因为 initialize 的接收者是__constructs 
     * 所以利用抛出异常的方式进行重定向来拦截请求
     * @param [type] ...$args
     * @return void
     */
    public function redirect(...$args){
        throw new HttpResponseException(redirect(...$args));
    }


}