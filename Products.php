<?php


require "ProductSalesPerViewSorter.php";
require "ProductPriceSorter.php";
include("Category.php");


$products = 
[
    [
        'id' => 1,
        'name' => 'Alabaster Table',
        'price' => 12.99,
        'created' => '2019-01-04',
        'sales_count' => 32,
        'views_count' => 730,
    ],
    [
        'id' => 2,
        'name' => 'Zebra Table',
        'price' => 44.49,
        'created' => '2012-01-04',
        'sales_count' => 301,
        'views_count' => 3279,
    ],
    [
        'id' => 3,
        'name' => 'Coffee Table',
        'price' => 10.00,
        'created' => '2014-05-28',
        'sales_count' => 1048,
        'views_count' => 20123,
    ]
];





$priceSorter = new ProductPriceSorter();
$salePerViews = new ProductSalesPerViewSorter();
$catalog = new Catalog($products);

$sortByPrice = $catalog->getProducts($priceSorter);
$sortByPricePerViews = $catalog->getProducts($salePerViews);
print_r($sortByPricePerViews);
