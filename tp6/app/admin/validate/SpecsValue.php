<?php

namespace app\admin\validate;

use think\Validate;

class SpecsValue extends Validate{

    

    protected $rule =[
        'name' => 'require',
        'id' => 'require',
        'specs_id' => 'require',
        'order' => 'require',
        'status' => ['require','in'=> "0,1,99"]
    ];

    protected $message = [
        'name' => '规格名必须',
        'id' => 'ID必须',
        'order' => '排序序号必须',
        'status.require' => '状态必须',
        'status.in' => '状态参数错误',
        'specs_id' => '规格ID必须',
    ];

    protected $scene = [
        'add' => ['name','specs_id'],
        'orderlist' => ['order','id'],
        'changestatus' => ['id','status'],
        'changename' => ['id','name','pid']
    ];
    
}