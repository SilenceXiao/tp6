<?php
namespace app\api\controller;

use app\common\business\Category as CategoryBus;
use app\common\lib\Arr;

class Category extends ApiBase{

    public function index(){

        try {
            $CategoryObj = new CategoryBus();
            $categories = $CategoryObj->getAllCategories();
        } catch (\Exception $e) {
            //Log::info(); 记录日志
            return show(config('status.success'),'内部异常');
        }
        
        if(empty($categories)){
            return show(config('status.success'),'数据为空');
        }
        $result = Arr::TreeData($categories);
        $result = Arr::sliceArray($result);

        return show(config('status.success'),'ok',$result);
    }
}