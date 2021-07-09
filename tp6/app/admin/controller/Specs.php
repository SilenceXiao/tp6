<?php
namespace app\admin\controller;

use app\admin\validate\Specs as ValidateSpecs;
use app\common\business\Specs as BusinessSpecs;
use think\facade\View;

class Specs extends AdminBase{

    public function index(){
        $list = (new BusinessSpecs())->getListsBypageNum();
        return View::fetch('',[
            'specsList' => $list,
        ]);
    }

    public function dialog(){
        $list = (new BusinessSpecs())->getAllSpecs();
        return View::fetch('',[
            'specsdata' => json_encode($list),
        ]);
    }

    public function add(){
        return View::fetch();
    }

    /**
     * 添加商品规格
     * @return void
     */
    public function addSpecs(){
        $name = input('name','','trim');
        $data = [
            'name' => $name,
        ];

        $validate = new ValidateSpecs();
        if(!$validate->scene('add')->check($data)){
            return show(config('status.error'),$validate->getError());
        }
        try {
            $res = (new BusinessSpecs())->insertSpecs($data);
        } catch (\Exception $e) {
            return show(config('status.error'),$e->getMessage());
        }
        if($res){
            return show(config('status.success'),'添加成功');
        }
        return show(config('status.error'),'添加失败');
    }

   
}