<?php
namespace app\common\business;

use app\common\model\mysql\Demo as ModelDemo;

class Demo{
    /**
     * business 层通过model层获取数据
     * @param [type] $categoryId
     * @param integer $limit
     * @return array
     */
    public function getDemoDataByCategoryId($categoryId,$limit=10){
        $model = new ModelDemo();
        $results = $model->getDemoDataByCategoryId($categoryId,$limit);

        if(empty($results)){
            return [];
        }

        $categories = config("category");
        foreach ($results as $key => $data) {
            $results[$key]['category_name'] = $categories[$data['category_id']] ?? "其他";
        }
        return $results;
    }
}