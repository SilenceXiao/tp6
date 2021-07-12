<?php
namespace app\common\model\mysql;

use think\Model;

class SpecsValue extends Model{

    public function getBySpecsId($data,$field){
        
        $where = [
            'status' => config('status.mysql.table_normal')
        ];
        // dump($data);exit;
        $result = $this->where($where)
            ->where('specs_id',$data['specs_id'])
            ->field($field)
            ->select();
        return $result;
    }
}