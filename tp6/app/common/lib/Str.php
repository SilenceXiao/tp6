<?php

// declare(strict_types = 1);
namespace app\common\lib;

//使用类库模式管理公用方法
class Str {

    
    /**
     * 生成登录所需的token
     * @param $string
     * @return string
     */
    public static function getLoginToken($string) {
        // 生成token
        $str = md5(uniqid(md5(microtime(true)), true)); //生成一个不会重复的字符串
        $token = sha1($str.$string); //加密
        return $token;
    }
}
