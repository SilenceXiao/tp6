<?php

namespace app\admin\validate;

use think\Validate;

class Category extends Validate{

    protected $rule =[
        'name' => 'require',
        'pid' => 'require',
    ];

    protected $message = [
        'name' => '类名必须',
        'pid' => '层级必须',
    ];

}