<?php
namespace app\common\model\mysql;

use think\Model;

class AdminUser extends Model{
    
    /**
     * 根据用户名查找后台用户
     * @param [type] $name
     * @return void
     */
    public function getAdminUserByUsername($name){
        if(empty($name)){
            return false;
        }
        $result = $this->where('username',trim($name))
            ->find();
       
        return $result;
    }


    /**
     * 根据ID更新数据
     * @param [type] $id
     * @param [type] $data
     * @return void
     */
    public function updateDataById($id,$data){
        $id = intval($id);
        if( empty($id) || empty($data) || !is_array($data) ){
            return false;
        }
        return $this->where('id',$id)->save($data);
    }
}