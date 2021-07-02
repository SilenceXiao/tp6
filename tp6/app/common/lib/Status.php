<?php
namespace app\common\lib;

class Status {

    public static function getMysqlStatus(){

        $mysqlConfig = config('status.mysql');
        return array_values($mysqlConfig);
    }
}