<?php
namespace app\controller;

use app\BaseController;
use app\common\model\mysql\Demo;
use think\facade\Db;
class Data extends BaseController{

    public function index(){
        //使用门面模式 facade获取数据
        $result = Db::table('mall_demo')->where('id',1)->find();
        // 使用容器获取数据
        $result = app('db')->table('mall_demo')->where('id',1)->find();
        dump($result);
    }

    /**
     *  输出sql
     * @return void
     */
    public function echoSql(){
        $result = Db::table('mall_demo')
            ->where('id',1)->fetchSql()->find();
        
        var_dump($result);
        $result = Db::table('mall_demo')
            ->where('id',1)->find();
        echo Db::getLastSql();
    }

    public function demo(){
        $data = [
            'name' => 'bar'
        ];
        $result = Db::table('mall_demo')->insert($data);
        var_dump($result);
    }


    public function model1()
    {
        $data = Demo::find(1)->toArray();
        dump($data);
    }

    public function model2(){
        $demoObj = new Demo();
        $data = $demoObj->where('id',1)->find();
        dump($data);
    }
} 

