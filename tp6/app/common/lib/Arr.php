<?php
namespace app\common\lib;

class Arr{

    /**
     * 無限極分類
     * @param [type] $arrs
     * @return void
     */
    public static function TreeData($arrs){
        $items = [];
        foreach ($arrs as $arr) {
            $items[$arr['category_id']] = $arr;
        }
        $tree = [];
        // dump($temp);
        foreach ($items as $key => $item) {
           
            if(isset($items[$item['pid']])){
                // 变量A指向变量B的内存地址 即变量A和B共用一块内存地址
                $items[$item['pid']]['list'][] = &$items[$key];
            }else{
                //代表顶级分类
                $tree[] = &$items[$key];
            }
        }
        // dump($items,$tree);exit;
        return $tree;
    }


    /**
     * 根据分类展示截取数据
     * @param [type] $data
     * @param integer $firstColumn
     * @param integer $secondColumn
     * @param integer $threeColumn
     * @return void
     */
    public static function sliceArray($datas,$firstColumn=5,$secondColumn=3,$threeColumn=5){
        $datas = array_slice($datas,0,$firstColumn);

        foreach ($datas as $key => $data) {
            if ( !empty($data['list']) ) {
                $datas[$key]['list'] = array_slice($data['list'],0,$secondColumn);
                foreach ($datas[$key]['list'] as $kk => $list) {
                    if ( !empty($list['list']) ) {
                        $datas[$key]['list'][$kk]['list'] = array_slice($list['list'],0,$threeColumn);
                    }
                }
            }
            
        }
        return $datas;
    }
}