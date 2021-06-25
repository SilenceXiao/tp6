<?php
namespace app\demo\controller;

use app\BaseController;

class E extends BaseController{
    public function test(){
        echo $abc;
    }

    public function index(){
        dump(2);
    }
}