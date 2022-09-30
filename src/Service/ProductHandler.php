<?php

namespace App\Service;

class ProductHandler
{
    /**
     * 计算商品总金额
     * getTotalPrice
     * @access
     * @param array $products
     * @return int
     */
    public function getTotalPrice(array $products)
    {
        $totalPrice = 0;
        foreach ($products as $product) {
            $price = $product['price'] ?: 0;
            $totalPrice += $price;
        }
        return $totalPrice;
    }

    /**
     * 获取筛选后的商品
     * getFilteredProducts
     * @access
     * @param array $products
     * @param array $filter
     * @return array
     */
    public function getFilteredProducts(array $products, array $filter):array
    {
//        $filter = ['sort' => SORT_ASC, 'type' => ['dessert']];
        $sort = $filter['sort'];
        $type = $filter['type'];
        $types =  array_column($products, 'type');
        //指定类别筛选商品
        $filteredTypes = array_intersect($types, $type);
        $filteredProducts = array_intersect_key($products, $filteredTypes);
        //按价格数值排序
        $sortColumn = array_column($filteredProducts, 'price');
        array_multisort($sortColumn, $sort, SORT_NUMERIC, $filteredProducts);

        return $filteredProducts;
    }

    /**
     * 产品中的创建日期转换为unix timestamp
     * convertProductsCreateTime
     * @access
     * @param array $products
     * @return array
     */
    public function convertProductsCreateTime(array $products)
    {
        array_walk($products, function(&$arr, $key) {
            $createAt = $arr['create_at'];
            $arr['create_at'] =  strtotime($createAt);
        });
        return $products;
    }
}
