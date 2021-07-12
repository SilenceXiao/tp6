<?php
namespace app\admin\controller;

use app\admin\validate\SpecsValue as ValidateSpecsValue;
use app\common\business\SpecsValue as BusinessSpecsValue;

class SpecsValue extends AdminBase{

    public function getBySpecsId(){
        $specs_id = input('specs_id',0,'intval');
        
        $data = [
            'specs_id' => $specs_id
        ];
        try {
            
            $result = (new BusinessSpecsValue())->getBySpecsId($data);
        } catch (\Exception $e) {
            return show(config('status.error'),'没有数据',$e->getMessage());
        }
        if($result){
            return show(config('status.success'),'ok',$result);
        }
        return show(config('status.error'),'没有数据');

    }

    /**
     * 添加规格属性
     * @return void
     */
    public function add(){
        $specs_id = input('specs_id',0,'intval');
        $name = input('name','','trim');
        $data = [
            'specs_id' => $specs_id,
            'name' => $name,
        ];

        $validate = new ValidateSpecsValue();
        if(!$validate->scene('add')->check($data)){
            return show(config('status.error'),$validate->getError());
        }

        try {
            $data['operate_user'] = $this->adminUser['username'];
            $result = (new BusinessSpecsValue())->add($data);
        } catch (\Exception $e) {
            return show(config('status.error'),$validate->getError());
        }
        if($result){
            return show(config('status.success'),'添加成功');
        }
        return show(config('status.error'),'添加失败');
    }
}