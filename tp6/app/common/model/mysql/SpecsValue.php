<?php
namespace app\common\model\mysql;

use think\Model;

class SpecsValue extends Model{

    public function getBySpecsId(){
        $specs_id = input('specs_id',0,'intval');
        
    }
}