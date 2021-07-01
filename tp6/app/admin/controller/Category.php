<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\controller\AdminBase;
use app\admin\validate\Category as ValidateCategory;
use app\common\business\Category as CategoryBusiness;

class Category extends AdminBase{
    public function index(){
        $pid = input('pid',0,'intval');
        $data = [
            'pid' => $pid,
        ];
        $lists = (new CategoryBusiness())->getListsByPid($data,$num = 5);
        if(!$lists){
            $lists = [];
        }
        return View::fetch('index',['categoryList' => $lists]);
    }

    public function add(){
        $categories = (new CategoryBusiness())->getCategories();
        if(!$categories) {
            $categories = [];
        }
        $categories = json_encode($categories);
        return View::fetch('add',['categories'=>$categories]);
    }

    /**
     * 添加新的分類
     * @return void
     */
    public function addCategory(){
        $pid = input('pid',0,'intval');
        $name = input('name','','trim');

        if(!request()->isPost()){
            return show(config('status.error'),'非法請求');
        }

        $data = [
            'pid' => $pid,
            'name' => $name,
            'status' => 1,
            'operate_user' => 'test',
        ];
        //驗證参数
        $validateCategory = new ValidateCategory();
        $validate = $validateCategory->check($data);
        if(!$validate) {
            return show(config('status.error'),$validateCategory->getError());
        }

        //调用业务层插入数据
        try {
            $result = (new CategoryBusiness())->insertCategory($data);
        } catch (\Exception $e) {
            return show(config('status.error'),$e->getMessage());
        }

        if($result){
            return show(config('status.success'),'新增成功');
        }
        return show(config('status.error'),'新增失败');
    }
    
}
