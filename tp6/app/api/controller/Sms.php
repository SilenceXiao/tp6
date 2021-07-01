<?php

declare(strict_types = 1);
namespace app\api\controller;

use app\common\business\Sms as BusinessSms;
use think\facade\Cache;

class Sms {

    /**
     * 发送短信验证码
     * @return object
     */
    public function sendCode() :object{

        $phoneNumber = request()->param('phone_number','','trim');
        // $phoneNumber = '18681653982';
        $data = [
            'phone' => $phoneNumber,
        ];

        try {
            validate(\app\api\validate\User::class)->scene('send_code')->check($data);
        } catch (\think\exception\ValidateException $e) {
            return show(config('status.error'),$e->getError());
        }

        // 简单的限流分发方式
        $num = rand(1,99);
        $type = 'ali';
        if($num > 80){
            $type = 'jd';
        } 

        if( BusinessSms::sendCode($phoneNumber,config('api.user_login_code_len'),$type) ) {
            return show(config('status.success'),'发送验证码成功');
        }

        return show(config('status.success'),'发送验证码失败');
    }

    /**
     *  获取验证码
     * @return object
     */
    public function getRedisKey() :object{
        $phone = '18681653982';
        $code = Cache::get(config('redis.code_pre').$phone);
        if($code){
            return show(config('status.success'),'ok',$code);
        }
       return show(config('status.error'),'验证码不存在');
    }
}