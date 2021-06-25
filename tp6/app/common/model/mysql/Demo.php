<?php
namespace app\common\model\mysql;

use think\Model;

class Demo extends Model{
    protected $table = "mall_demo";

    //获取器
    public function getStatusAttr($value){
        $status = [1 => '正常', 2 => '取消'];

        return $status[$value];
    }

    // 获取器可以定义表中不存在的字段
    public function getStatusTextAttr($value,$data){
        $status = [1 => '正常', 2 => '取消'];
        //返回数据需要转换的字段的值
        return $status[$data['status']];
    }

    public function getDemoDataByCategoryId($category_id,$limit=10){
        //减少不必要的io操作
        if(empty($category_id)){
            return [];
        }
        return $this->where('category_id',$category_id)
            ->limit($limit)
            ->select()
            ->toArray();
    }
}