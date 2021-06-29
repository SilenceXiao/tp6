<?php
namespace app\api\controller;

use app\BaseController;
use think\exception\HttpResponseException;

/**
 * 相当于API下的公共controller
 * 需要登录的继承AuthBase ,不需要登录的继承ApiBase
 */
class ApiBase extends BaseController{

    public function initialize(){
        parent::initialize();
    }

    public function show(...$args){
        throw new HttpResponseException(show(...$args));
    }

}