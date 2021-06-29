<?php

declare(strict_types = 1);
namespace app\common\lib;

use ReflectionClass;

//使用类库模式管理公用方法
class ClassArr {

    /**
     * 类库配置
     * @return void
     */
    public static function smsClassLib(){
        return [
            'ali' => 'app\common\lib\sms\AliSms',
            'jd' => 'app\common\lib\sms\JdSms',
            'baidu' => 'app\common\lib\sms\BaiduSms',
        ];
    }


    /**
     *
     * @param [type] $type 调用的类库类型
     * @param [type] $classs 类库配置数据
     * @param array $param 需要实例化对象的参数
     * @param boolean $needInstance 是否需要实例化
     * @return void
     */
    public static function initClass($type,$classs,$param= [],$needInstance=false){
        if(!array_key_exists($type,$classs)){
            return false;
        }

        //1根据场景调用方法需要决定是返回类库还是实例对象
        $className = $classs[$type];
        // new ReflectionClass('A') => 建立A反射类
        // ->newInstanceArgs($args)  => 相当于实例化A对象
        return $needInstance == true ? (new ReflectionClass($className))->newInstanceArgs($param) : $className;
    }


    
}
