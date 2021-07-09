<?php
namespace app\common\model\mysql;

use think\Model;

class Specs extends Model{


    /**
     * 获取列表数据
     * @param integer $num
     * @return object
     */
    public function getLists($num=5){
        $order = [
            'order' => 'desc',
            'id' => 'desc',
        ];
        $result = $this->where('status','<>',config('status.mysql.table_delete'))
            ->order($order)
            ->paginate($num);
            
        return $result;
    }

    /**
     * 获取所有规格数据
     * @param integer $num
     * @return object
     */
    public function getAllSpecs(){
        $order = [
            'order' => 'desc',
            'id' => 'desc',
        ];
        $result = $this->where('status','<>',config('status.mysql.table_delete'))
            ->order($order)
            ->select();
            
        return $result;
    }

    /**
     * 根据规格名获取数据
     * @param [type] $data
     * @return object
     */
    public function getSpecsByName($data){
       return $this->where('name',$data['name'])->find();
    }
}