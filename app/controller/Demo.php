<?php

namespace app\controller;

use app\BaseController;

class Demo extends BaseController{

    public function show(){
        $result = [
            'code' => 1,
            'message' => 'ok',
            'data' => [
                'id' => 1,
                'title' => 'haha',
            ]
        ];
        $header = [
            'token' => '123455667ff',
        ];
        return json($result,200,$header);
    }

    public function request(){
        dump($this->request->param('aa',1,'intval'));
    }
}