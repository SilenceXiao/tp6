<?php

namespace app\admin\validate;

use app\common\lib\Status;
use think\Validate;

class Category extends Validate{

    

    protected $rule =[
        'name' => 'require',
        'pid' => 'require',
        'id' => 'require',
        'order' => 'require',
        'status' => ['require','in'=> "0,1,99"]
    ];

    protected $message = [
        'name' => '类名必须',
        'pid' => '层级必须',
        'id' => 'ID必须',
        'order' => '排序序号必须',
        'status.require' => '状态必须',
        'status.in' => '状态参数错误',
    ];

    protected $scene = [
        'add' => ['name','pid'],
        'orderlist' => ['order','id'],
        'changestatus' => ['id','status'],
        'changename' => ['id','name','pid']
    ];

    public function statusIn(){
        $statusIn = implode(',',Status::getMysqlStatus());
        return $statusIn;
    }
}