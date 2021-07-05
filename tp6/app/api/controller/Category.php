<?php
namespace app\api\controller;

use app\common\business\Category as CategoryBus;
use app\common\lib\Arr;

class Category extends ApiBase{

    public function index(){

        $CategoryObj = new CategoryBus();
        $categories = $CategoryObj->getAllCategories();
        $result = Arr::TreeData($categories);
        return show(config('status.success'),'ok',$result);
    }
}