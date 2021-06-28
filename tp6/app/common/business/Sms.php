<?php
declare(strict_types = 1);
namespace app\common\business;

use app\common\lib\Num;
use app\common\lib\sms\AliSms;

class Sms {

    /**
     * 发送验证码业务层
     * @param string $phone
     * @return boolean
     */
    public static function sendCode(string $phone,int $len) :bool{

        // $code = rand(1000,9999);
        $code = Num::randCode($len);
        $code_status = AliSms::code($phone,$code);
        if($code_status){
            //1短信验证码记录到redis 并且设置失效时间
            // 1.PHP环境是否有redis拓展 2.redis服务
            cache(config('redis.code_pre').$phone,$code,config('redis.code_expire'));
            return true;
        }
        return false;
    }

}
