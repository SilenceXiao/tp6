<?php
namespace app\common\model\mysql;

use think\Model;

class Category extends Model{
    
    /**
     * 根据pid 和 类名获取分类数据
     * @param array $data
     * @return void
     */
    public function getCategoryByNameAndPid(array $data){  

        if( empty($data) || !is_array($data) ){
            return false;
        }
        return $this->where('pid',intval($data['pid']))
            ->where('name',$data['name'])
            ->find();
    }

    /**
     * 分类数据
     * @param [type] $filed
     * @return void
     */
    public function getCategories($filed){
        $where = [
            'status' => config('status.mysql.table_normal'),
        ];
        return $this->where($where)->field($filed)->select();
    }

    /**
     * 根据分页获取分类列表数据
     * @param [type] $data
     * @param integer $num
     * @return void
     */
    public function getLists($data,$num = 10){

        $order = [
            'order' => 'desc',
            'id' => 'desc',
        ];
        $result = $this->where('status','<>',config('status.mysql.table_delete'))
            ->where('pid',$data['pid'])
            ->order($order)
            ->paginate($num);
            
        return $result;
        // echo $this->getLastSql();exit;
        
    }

}