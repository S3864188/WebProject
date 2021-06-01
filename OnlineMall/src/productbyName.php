<?php
function read_all_products() {
  $file_name = '../data/products.csv';
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

function read_all_name() {
  $file_name = '../data/stores.csv';
  $fp = fopen($file_name, 'r');
  $first = fgetcsv($fp);
  $names = [];

  while ($row = fgetcsv($fp)) {
    $i = 0;
    $name = [];
    foreach ($first as $col_name) {
      $name[$col_name] =  $row[$i];
      $i++;
    }
    $names[] = $name;
  }
  return $names;

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Overall Policy CSS -->
    <link rel="stylesheet" href="../css/productbyName.css">
    <!-- Cookie Section CSS -->
    <link rel="stylesheet" href="../css/cookie.css">
    <!-- FontAwesome Icon. Link: https://fontawesome.com. -->
    <script src="https://kit.fontawesome.com/da0f099ad2.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Cookies -->
    <?php include "../php/cookie-web.php" ?>

    <!-- Header -->
    <?php include "../php/mall-header.php" ?>

    <!-- Main -->
    <div class="name-nav-wrapper">
        <!-- calogory by alphabet -->
        <div class="alphabet">
            <a href="#">A</a>
            <a href="#">B</a>
            <a href="#">C</a>
            <a href="#">D</a>
            <a href="#">F</a>
            <a href="#">G</a>
            <a href="#">H</a>
            <a href="#">I</a>
            <a href="#">J</a>
            <a href="#">K</a>
            <a href="#">L</a>
            <a href="#">N</a>
            <a href="#">M</a>
            <a href="#">O</a>
            <a href="#">P</a>
            <a href="#">Q</a>
            <a href="#">R</a>
            <a href="#">S</a>
            <a href="#">T</a>
            <a href="#">U</a>
            <a href="#">V</a>
            <a href="#">W</a>
            <a href="#">S</a>
            <a href="#">Y</a>
            <a href="#">Z</a>
        </div>

        <!-- products -->
        <!-- products -->
        <div class="product-container">
            <?php
            $products = read_all_products();
            $name = read_all_name();
            usort($name, function($p1, $p2) {
            // use the built-in string comparison
            return strcmp($p1['name'], $p2['name']);
            });
            $count = 0;
            foreach ($name as $n) {
                $id = $n['id'];
                $name = $n['name'];
                
            ?>
            <div class="product-box">
                <!-- product-img -->
                <div class="product-img">
                    <!-- img -->
                    <img src="../images/product/feature-1.jpg" alt="product-1">
                </div>
                <!-- details -->
                <div class="product-details">
                    <div class="p-segment"></div>
                    <span class="p-title"> <?php echo $name ?> </span>
        
                </div>
            </div>

            <?php 
                $count++;
            }
            ?>
        </div>
        
        <div class="pagination-block">
            <ul class="pagination">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span class="icon">></span>
                <span class="last"> Last >></span>
            </ul>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>
</body>

</html>