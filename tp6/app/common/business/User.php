<?php
namespace app\common\business;

use app\common\lib\Str;
use app\common\lib\Time;
use app\common\model\mysql\User as UserModel;
use think\facade\Cache;

class User {

    public $user = null;

    public function __construct()
    {
        $this->user = new UserModel();
    }

    /**
     * 用户登录业务层
     * @param [type] $data
     * @return void
     */
    public function login($data){
        //验证码是否存在
        $code = cache(config('redis.code_pre').$data['phone']);
        if(!$code || $code != $data['code']){
            throw new \think\Exception('验证码错误',-100);
        }

        //用户是否存在
        $user = $this->getUserByPhone($data['phone']);
        if(empty($user)){
            throw new \think\Exception('用户不存在');
        }

        //验证token是否存在
        $tokenExist = $this->checkTokenExists($user['token']);
        
        //如果存在更新token和失效时间
        if($tokenExist){
            // Cache::delete(config('redis.user_token_pre').$user['token']);
            $token = $user['token'];
        }else{
            $token = Str::getLoginToken($data['phone']);
        }

        //生成token
        $redisData = [
            'id' => $user['id'],
            'username' => $user['username'],
            'phone' => $user['phone_number'],
            'token' => $token,
        ];

        //token已存在时删除旧的token 更新新的token
        $res = cache(config('redis.user_token_pre').$token,$redisData,Time::userLoginExpireTime($data['type']));
        $updateData = [
            'update_time' => date('Y-m-d H:i:s',time()),
            'token' => $token,
        ];

        if($res){
            $result = $this->updateUserMsgById($user['id'],$updateData);
            if(!$result) {
                throw new \think\Exception('用户登录失败,数据更新异常');
            }
            return $redisData;
        }

        return false;
    }


    /**
     * 用户更新业务层
     * @param [type] $data
     * @return void
     */
    public function update($id,$data,$token){
        //查看系统是否存在该用户
        $userSystem = $this->getUserById($id);
        if( empty($userSystem) ){
            throw new \think\Exception('用户不存在系统');
        }
        
        //检测新用户名是否已存在
        $userResult = $this->getUserByUsername($data['username']);
        if(!empty($userResult) && $userResult['id'] != $id){
            throw new \think\Exception('用户名已存在');
        }
        
        //更新数据
        $this->updateUserMsgById($id,$data);

        //获取用户信息
        $user = $this->getUserById($id);

        //数据更新后需要更新redis数据
        $data = [
            'id' => $user['id'],
            'username' => $user['username'],
            'phone_number' => $user['phone_number'],
            'token' => $user['token']
        ];

        cache(config('redis.user_token_pre').$token,$data,Time::userLoginExpireTime($user['type']));
        return $data;
    }


    /**
     * 根据用户名获取信息
     * @param [type] $username
     * @return void
     */
    public function getUserByPhone($phone){
        $user = $this->user->getUserByPhone($phone);
        //用户是否存在
        if(empty($user) || $user->status != config('status.mysql.table_normal')){
            return [];
        }
        $user = $user->toArray();
        return $user;
    }
    
    /**
     * 验证token是否存在redis
     * @param [type] $token
     * @return void
     */
    public function checkTokenExists($token){
        return Cache::has(config('redis.user_token_pre').$token);
    }

    /**
     * 通过ID更新数据
     * @param [type] $id
     * @param [type] $data
     * @return void
     */
    public function updateUserMsgById($id,$data){
        return $this->user->updateDataById($id,$data);
    }

    /**
     * 通过ID获取用户数据
     * @param [type] $id
     * @return void
     */
    public function getUserById($id){
        $user = $this->user->getUserById($id);
        //用户是否存在
        if(empty($user) || $user->status != config('status.mysql.table_normal')){
            return [];
        }
        $user = $user->toArray();
        return $user;
    }

    /**
     * 通过username获取用户数据
     * @param [type] $id
     * @return void
     */
    public function getUserByUsername($username){
        $user = $this->user->getUserByUsername($username);
        //用户是否存在
        if(empty($user) || $user->status != config('status.mysql.table_normal')){
            return [];
        }
        $user = $user->toArray();
        return $user;
    }
}