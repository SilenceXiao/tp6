<?php
namespace app\admin\controller;

use app\admin\controller\AdminBase;
class LoginOut extends AdminBase{

    /**
     * 登出
     * @return void
     */
    public function index(){
        session(config('admin.admin_session'),null);
        return redirect(url('login/index'));
    }
}