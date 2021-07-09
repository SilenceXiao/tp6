<?php
namespace app\common\business;

use app\common\model\mysql\Specs as SpecsModel;
use think\Exception;

class Specs {

    public $model = null;

    public function __construct()
    {
        $this->model = new SpecsModel();
    }


    public function insertSpecs($data){

        //查看系统是否已经存在规格名
        $specsExists = $this->model->getSpecsByName($data);
        if($specsExists){
            throw new \think\Exception('已存在该规格名');
        }
        
        //新增数据
        $specsExists = $this->model->save($data);
        if($specsExists){
            return true;
        }

        return false;
    }


    /**
     * 获取分类列表数据
     * @param [type] $data
     * @param [type] $num
     * @return void
     */
    public function getListsBypageNum($num=5){

        try {
            $result = $this->model->getLists($num);
        } catch (\Exception $e) {
            return $result = [];
        }
       
        if(!$result){
            return [];
        }

        $results = $result->toArray();

        $results['page'] = $result->render();

        return $results;
    }

    /**
     * 获取所有规格
     * @return void
     */
    public function getAllSpecs(){
        try {
            $result = $this->model->getAllSpecs();
        } catch (\Exception $e) {
            // throw new \think\Exception('内部异常');
            return [];
        }
       
        return $result->toArray();

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
        
        $result = $this->model->upateDataById($id,$data);
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
        $result = $this->model->find($id);
        if(!$result){
            return false;
        }
        return $result->toArray();
    }

    /**
     * 修改状态
     * @param [type] $id
     * @param [type] $data
     * @return void
     */
    public function changeStatus($id,$data){
        $res = $this->getCategoryById($id);
        if(!$res){
            throw new \think\Exception('数据不存在');
        }
        if($res->status == $data['status']){
            throw new \think\Exception('状态一样');
        }
        
        $result = $this->model->upateDataById($id,$data);
        if(!$result){
            return false;
        }
        return $result;
    }

    /**
     *
     * @param [type] $id
     * @param [type] $data
     * @return void
     */
    public function editCategory($id,array $data){
        $categoryExists = $this->model->getCategoryByNameAndPid($data);
        if($categoryExists){
            throw new \think\Exception('当前层级下已存在该类名');
        }

        $result = $this->model->upateDataById($id,['name' => $data['name'],'id'=>$id]);
        if(!$result){
            return false;
        }
        return $result;
    }

    
}