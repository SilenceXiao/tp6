<?php
namespace app\common\model\mysql;

use think\Model;

class User extends Model{
    
    /**
     * 根据用户名查找后台用户
     * @param [type] $name
     * @return void
     */
    public function getUserByPhone($phone){
        if(empty($phone)){
            return false;
        }
        $result = $this->where('phone_number',trim($phone))
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

    /**
     * 根据id获取用户
     * @param [type] $id
     * @return void
     */
    public function getUserById($id){
        $id = intval($id);
        if(empty($id)){
            return false;
        }
        $user = $this->where('id',$id)->find();
        return $user;
    }

    /**
     * 根据username获取用户
     * @param [type] $username
     * @return void
     */
    public function getUserByUsername($username){
        $username = trim($username);
        if(empty($username)){
            return false;
        }
        $user = $this->where('username',$username)->find();
        return $user;
    }
}