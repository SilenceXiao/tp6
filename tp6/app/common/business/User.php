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
        }

        //生成token
        $token = Str::getLoginToken($data['phone']);

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
}