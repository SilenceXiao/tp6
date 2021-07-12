<?php
namespace app\common\business;

use think\Exception;

class BusnBase{

    public $model = null;
    
    public function add($data){
        try {
            $data['status'] = config('status.mysql.table_normal');
            $res = $this->model->save($data);
        } catch (\Exception $e) {
            throw new Exception('系统异常');
        }
        if($res){
            return $this->model->id;
        }
        return false;
    }
}