<?php

declare(strict_types = 1);
namespace app\common\lib;

//使用类库模式管理公用方法
class Time {

    /**
     * 设置token过期时间
     * @param integer $type
     * @return void
     */
    public static function userLoginExpireTime($type = 1){
        $type = in_array($type,[1,2]) ?:1 ;
        if($type == 2){
            $loginTime = 30;
        }elseif($type == 1) {
            $loginTime = 7;
        }
        return $loginTime * 24 * 3600;
    }
}
