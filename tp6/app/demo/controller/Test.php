<?php
namespace app\demo\controller;

use app\BaseController;
use app\common\business\Demo;
use app\Request;

class Test extends BaseController{
    public function index1(Request $request){
        $category_id = $request->param('category_id',0,'intval');
        if(!$category_id){
            return show(config('status.error'),'參數錯誤');
        }

        $demo = new Demo();
        $datas = $demo->getDemoDataByCategoryId($category_id);
        return show(config('status.success'),'ok',$datas);
    }
}