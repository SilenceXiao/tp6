<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\controller\AdminBase;

class Index extends AdminBase{
    public function index(){
        return View::fetch();
    }

    public function welcome(){
        return View::fetch();
    }

    
}
