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
     * 获取add页面分类数据
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

    /**
     *
     * @param [type] $data
     * @param [type] $num
     * @return void
     */
    public function getListsByPid($data,$num){

        $result = $this->categoryObj->getLists($data,$num);
        if(!$result){
            return [];
        }
        $results = $result->toArray();
        $pids = array_column($results['data'],'id');
        $pidColumns = [];
        if($pids){
            $pidColumns = $this->categoryObj->getChildcountByPids($pids);
            $pidColumns = $pidColumns->toArray();
        }

        $pidArray = [];
        foreach ($pidColumns as $key => $value) {
            $pidArray[$value['pid']] = $value['childCount'];
        }

        foreach ($results['data'] as $k => $list) {
            $results['data'][$k]['childCount'] = $pidArray[$list['id']] ?? 0;
        }
        $results['page'] = $result->render();

        return $results;
    }

    /**
     * 更新排序
     * @param [type] $data
     * @return void
     */
    public function orderlist($id,$data){
        //验证数据是否存在
        $res = $this->getCategoryById($id);
        if(!$res){
            throw new \think\Exception('数据不存在');
        }
        if($res->status == $data['status']){
            throw new \think\Exception('状态一样');
        }
        
        $result = $this->categoryObj->upateDataById($id,$data);
        if(!$result){
            return false;
        }
        return $result;
    }
    
    /**
     *
     * @param [type] $id
     * @return void
     */
    public function getCategoryById($id){
        $result = $this->categoryObj->find($id);
        if(!$result){
            return false;
        }
        return $result->toArray();
    }

    public function changeStatus($id,$data){
        $res = $this->getCategoryById($id);
        if(!$res){
            throw new \think\Exception('数据不存在');
        }
        
        $result = $this->categoryObj->upateDataById($id,$data);
        if(!$result){
            return false;
        }
        return $result;
    }
}