<?php
namespace app\admin\controller;

use think\facade\View;

class Goods extends AdminBase{

    public function index(){
        return View::fetch();
    }

    public function add(){
        return View::fetch();
    }
}