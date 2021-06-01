<?php

// read product.csv
function read_all_products() {
  $file_name = '../../data/products.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $products = [];
  
  while ($row = fgetcsv($fp)) {
    $i = 0;
    $product = [];
    foreach ($first as $col_name) {
      $product[$col_name] =  $row[$i];
      $i++;
    }
    $products[] = $product;
  }
  return $products;
}






// date created
$products = read_all_products();
function date_compare($a, $b)
{
    $t1 = strtotime($a['created_time']);
    $t2 = strtotime($b['created_time']);
    return $t2-$t1;
}    
usort($products, 'date_compare');


// get product
function get_product_id($product_id) {
  $products = read_all_products();
  foreach ($products as $p) {
    if ($p['id'] == $product_id) {
      return $p;
    }
  }
  return false;
}


