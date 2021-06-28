<?php

declare(strict_types = 1);
namespace app\common\lib;

//使用类库模式管理公用方法
class ClassArr {

    public static function initClass($type,$class,$param= [],$needInstance=false){

    }


    /**
     * 验证码初始化
     * @param integer $len
     * @return integer
     */
    public static function randCode(int $len=4) :int{

        $code = rand(1000,9999);
        if($len == 6){
            $code = rand(100000,999999);
        }
        return $code;
    }
}
