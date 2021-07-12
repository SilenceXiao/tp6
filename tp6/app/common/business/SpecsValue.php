<?php
namespace app\common\business;

use app\common\model\mysql\SpecsValue as MysqlSpecsValue;
use think\Exception;

class SpecsValue extends BusnBase{

    public function __construct()
    {
        $this->model = new MysqlSpecsValue();
    }

    
    public function getBySpecsId($data,$field ='id,specs_id,name'){

        try {
            $result = $this->model->getBySpecsId($data,$field);
        } catch (\Exception $e) {
           throw new Exception($e->getMessage());
        }

        $results = $result->toArray();
        if($results){
            return $results;
        }

        return [];
    }

}