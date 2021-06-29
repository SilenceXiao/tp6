<?php
declare(strict_types = 1);
namespace app\common\business;

use app\common\lib\ClassArr;
use app\common\lib\Num;
use app\common\lib\sms\AliSms;
use think\facade\Log;

class Sms {

    /**
     * 发送验证码业务层
     * @param string $phone
     * @return boolean
     */
    public static function sendCode(string $phone,int $len,string $type='ali') :bool{

        // $code = rand(1000,9999);
        $code = Num::randCode($len);
        // $code_status = AliSms::sendCode($phone,$code);

        // 1.使用原始的工厂模式
        // $type = ucfirst($type);
        // $class = "\app\common\lib\sms\\".$type."Sms";
        // $code_status = $class::sendCode($phone,$code);

        //2 使用反射机制来触发工厂模式
        $classNames = ClassArr::smsClassLib();
        $classObj = ClassArr::initClass($type,$classNames);
        if(!$classObj){
            Log::error("$type-code-{$phone}-error,不存在当前类库");
            return false;
        }
        $code_status = $classObj::sendCode($phone,$code);

        if($code_status){
            //1短信验证码记录到redis 并且设置失效时间
            // 1.PHP环境是否有redis拓展 2.redis服务
            cache(config('redis.code_pre').$phone,$code,config('redis.code_expire'));
            return true;
        }
        return false;
    }

}
