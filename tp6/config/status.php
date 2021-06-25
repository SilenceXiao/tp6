<?php
// 状态码status配置文件
return [
    'success' => 1,
    'error' => 0,
    'action_not_found' => -1,
    'controller_not_found' => -2,
    'admin_user_session' => 'admin_user',
    'mysql'=>[
        'table_normal' => 1, //正常
        'table_pedding' => 0, //待审 
        'table_delete' => 99, //已删除
    ]
];