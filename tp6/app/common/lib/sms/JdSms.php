<?php
declare(strict_types = 1);
namespace app\common\lib\sms;

use think\facade\Log;

class JdSms implements SmsBase{

    /**
     * 调用短信接口类库
     * @param string $phone
     * @param integer $code
     * @return boolean
     */
    public static function sendCode(string $phone,int $code) :bool{

        if( empty($phone) || empty($code) ){
            return false;
        }

        //日志记录
        Log::info("jdsms-code-{$phone}-result",[$phone]);
        //调用 短信接口 成功返回ture 失败返回false

        return true;
    }

}