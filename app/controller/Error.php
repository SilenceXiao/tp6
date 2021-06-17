<?php
namespace app\controller;

class Error{
    public function __call($name, $arguments)
    {
        return show(config('status.controller_not_found'),"找不到{$arguments}控制器",[],404);
    }
}