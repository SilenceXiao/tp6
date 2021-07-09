<?php
namespace app\admin\controller;

class SpecsValue extends AdminBase{

    public function getBySpecsId(){
        $specs_id = input('specs_id',0,'intval');

    }
}