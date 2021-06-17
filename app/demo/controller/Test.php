<?php
namespace app\demo\controller;

use app\BaseController;
use app\model\Demo;
use app\Request;

class Test extends BaseController{
    public function index1(Request $request){
        $category_id = $request->param('category_id',0,'intval');
        if(!$category_id){
            return show(config('status.error'),'參數錯誤');
        }

        $model = new Demo();
        $datas = $model->getDemoDataByCategoryId($category_id);
        if(empty($datas)){
            return show(config('status.success'),'沒有數據',$datas);
        }
        $categories = config("category");
        foreach ($datas as $key => $data) {
            $datas[$key]['category_name'] = $categories[$data['category_id']] ?? "其他";
        }
        return show(config('status.success'),'ok',$datas);
       

    }
}