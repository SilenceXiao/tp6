<?php

namespace app\controller;

use app\Request;
use think\facade\Request as FacadeRequest;

class Learn{
    //4种获取参数的方法
    public function index(Request $request){
        $request->param();
        input('aa');
        request()->param();
        FacadeRequest::param();
    }
}
