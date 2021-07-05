<?php
namespace app\common\lib;

class Arr{

    /**
     * 無限極分類
     * @param [type] $arrs
     * @return void
     */
    public static function TreeData($arrs){
        $temp = [];
        foreach ($arrs as $arr) {
            $temp[$arr['category_id']] = $arr;
        }
        $tree = [];
        
        foreach ($temp as $key => $item) {
            if(isset($temp[$item['pid']])){
                $temp[$item['pid']]['list'][] = &$temp[$key];
            }else{
                $tree[] = &$temp[$key];
            }
        }

        return $tree;
    }
}