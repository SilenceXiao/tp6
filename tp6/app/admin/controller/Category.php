<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\controller\AdminBase;
use app\admin\validate\Category as ValidateCategory;
use app\common\business\Category as CategoryBusiness;
use app\common\lib\Status;

class Category extends AdminBase{

    public function index(){
        $pid = input('pid',0,'intval');
        $data = [
            'pid' => $pid,
        ];
        $lists = (new CategoryBusiness())->getListsByPid($data,$num = 5);

        //获取面包屑数据
        $breadCrumbs = (new CategoryBusiness())->getBreadCrumb($pid);

        if(!$lists){
            $lists = [];
        }

        // halt($lists);
        return View::fetch('index',[
            'categoryList' => $lists,
            'pid' => $pid,
            'breadCrumbs' => $breadCrumbs
        ]);
    }

    /**
     * 获取添加类名页面数据
     */
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
            'operate_user' => $this->adminUser['username'],
        ];
        //驗證参数
        $validateCategory = new ValidateCategory();
        $validate = $validateCategory->scene('add')->check($data);
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

    /**
     * 分类列表排序
     * @return void
     */
    public function orderList(){
        $id = input('id',0,'intval');
        $order = input('order',0,'intval');
        $data = [
            'id' => $id,
            'order' => $order,
        ];
        $validate = new ValidateCategory();
        if(!$validate->scene('orderlist')->check($data)){
            return show(config('status.error'),$validate->getError());
        }

        try {
            $result = (new CategoryBusiness())->orderList($id,$data);
        } catch (\Exception $e) {
            return show(config('status.error'),$e->getMessage());
        }
        if($result){
            return show(config('status.success'),'排序成功');
        }
        return show(config('status.error'),'排序失败');
    }

    /**
     * 修改状态 function
     * @return void
     */
     
    public function changeStatus(){

        $id = input('id',0,'intval');
        $status = input('status',0,'intval');
        $data = [
            'id' => $id,
            'status' => $status,
        ];
        $validate = new ValidateCategory();
        if(!$validate->scene('changestatus')->check($data)){
            return show(config('status.error'),$validate->getError());
        }

        try {

            $result = (new CategoryBusiness())->changeStatus($id,$data);
        } catch (\Exception $e) {
            return show(config('status.error'),$e->getMessage());
        }
        if($result){
            return show(config('status.success'),'状态修改成功');
        }
        return show(config('status.error'),'状态修改失败');
    }

    public function edit(){
        $id = input('id',0,'intval');
        $categories = (new CategoryBusiness())->getCategories();
        if(!$categories) {
            $categories = [];
        }

        $currentCategory = (new CategoryBusiness())->getCategoryById($id);
        $categories = json_encode($categories);
        //获取面包屑数据
        $breadCrumbs = (new CategoryBusiness())->getBreadCrumb($id);
        return View::fetch('edit',[
            'id' => $id,
            'currentCategory' => $currentCategory,
            'categories' => $categories,
            'breadCrumbs' => $breadCrumbs,
        ]);
    }

    /**
     * 编辑类名
     * @return void
     */
    public function editCategory(){
        $id = input('id',0,'intval');
        $name = input('name',0,'trim');
        $pid = input('pid',0,'intval');
       
        $data = [
            'id' => $id,
            'name' => $name,
            'pid' => $pid
        ];
        $validate = new ValidateCategory();
        if(!$validate->scene('changename')->check($data)){
            return show(config('status.error'),$validate->getError());
        }
        try {
            $result = (new CategoryBusiness())->editCategory($id,$data);
        } catch (\Exception $e) {
           return show(config('status.error'),'修改失败,内部异常');
        }
       
        if($result){
            return show(config('status.success'),'修改成功');
        }
        return show(config('status.error'),'修改失败');
    }
    
}
