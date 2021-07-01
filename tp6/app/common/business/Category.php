<?php
namespace app\common\business;

use app\common\model\mysql\Category as CategoryModel;
use think\Exception;

class Category {

    public $categoryObj = null;

    public function __construct()
    {
        $this->categoryObj = new CategoryModel();
    }


    public function insertCategory($data){

        //查看系统是否已经存在同层级的类名
        $categoryExists = $this->categoryObj->getCategoryByNameAndPid($data);
        if($categoryExists){
            throw new \think\Exception('当前层级下已存在该类名');
        }
        
        //新增数据
        $category = $this->categoryObj->save($data);

        if($category){
            return true;
        }

        return false;
    }

    /**
     * 获取分类数据
     * @return void
     */
    public function getCategories(){
        $filed = "id,name,pid";
        $result = $this->categoryObj->getCategories($filed);
        if($result){
            return $result->toArray();
        }
        return false;
    }

    public function getListsByPid($data,$num){

        $result = $this->categoryObj->getLists($data,$num);
        if(!$result){
            return [];
        }
        return $result->toArray();
    }
}