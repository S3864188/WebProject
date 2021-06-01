<?php include ("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LongTr&Co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tools/shop1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap " rel="stylesheet ">

</head>

<body>
    
    <!----column 2----->
    <div class="row">
        <div class="col-2">
        <div style="padding-left: 2em;">
            <h1>Buy Your Time</h1>
            <p>Watch is not Luxury Watch is Exactly</p>
        </div>
        </div>
        <div class="col-2">
            <img src="images/image/image1.png">
        </div>
    </div>
    </div>
    </div>
    <!---product categories-->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="images/category/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images/category/category-3.jpg">
                </div>
            </div>
        </div>
    </div>
    <!---new products-->
    

    <div class="small-container" style="margin-top: 20px;">
<h2 class="title">New Products</h2>
    <div class="row">
    

<?php
    require 'connect_csv.php';
    $products = read_all_products();
    $count = 0;
    usort($products, 'date_compare');
    foreach ($products as $p) {
        $id = $p['id'];
        $name = $p['name'];
        $price = $p['price'];
        $date = $p['created_time'];
        $count++;
                 
?>
    <form action="cart_function.php" method="POST">
        <a href="product-detail3.php"><img src="images/product/product-1.png" alt="H.Moser & Cie ALP">
            <h3 style="text-align:center;"><?= $name; ?></h3>
            <p style="text-align:center;">$<?= $price; ?></p>
            <div style="text-align:center;">
            <button type="submit" name="buy_btn" class="buy-btn">Add To Cart</button>
            <input type="hidden" name="item_name" value="<?= $name ?>">
            <input type="hidden" name="item_price" value="<?= $price ?>">
            </div>
        </a>
    </form>



<?php


if ($count == 5) 
{
    break;
    }
    }
?>

</div>
    </div> 







   <!-- feature producs  -->
    <div class="small-container" style="margin-top: 20px;">
    <h2 class="title">Feature Products</h2>
    <div class="row">

    <?php
    $count = 0;
    foreach ($products as $p) {
        $id = $p['id'];
        $name = $p['name'];
        $price = $p['price'];
        $pstore_id = $p['store_id'];
        $fe_in_to=$p['featured_in_store'];
        $count++;
                 
?>

<div class="col-4" 
    <?php
    if ($fe_in_to == "FALSE") {
            echo 'style="display: none;"';
    }
    ?>
    <?php
    if ($pstore_id != "66") {
            echo 'style="display: none;"';
    }
    ?>
>


<form action="cart_function.php" method="POST">
        <a href="product-detail3.php"><img src="images/product/product-1.png" alt="H.Moser & Cie ALP">
            <h6><?= $name; ?></h6>
            <p>$<?= $price; ?></p>
            <button type="submit" name="buy_btn" class="buy-btn">Add To Cart</button>
            <input type="hidden" name="item_name" value="<?= $name ?>">
            <input type="hidden" name="item_price" value="<?= $price ?>">
        </a>
    </form>
</div>

<?php
if ($count == 1000) 
{
    break;
    }
    }
    
?>

</div>
    </div> 
    <!--- brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <a href=""><img src="images/logo/logo-rolex.png" alt="logo rolex">
                    </a>
                </div>
                <div class="col-5">
                    <a href=""><img src="images/logo/logo-patek.png" alt="logo patek">
                    </a>
                </div>
                <div class="col-5">
                    <a href=""><img src="images/logo/logo-h-moser-cie.png" alt="logo H.Moser">
                    </a>
                </div>
                <div class="col-5">
                    <a href=""><img src="images/logo/logo-Richard-Mille.png" alt="logo Richard">
                    </a>
                </div>
                <div class="col-5">
                    <a href=""><img src="images/logo/logo-Audemars-Piguet.png" alt="logo AP">
                    </a>
                </div>
                <div class="col-5">
                    <a href=""><img src="images/logo/logo-JacobnCo.png" alt="logo Jacob">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include ("footer.php")?>

</body>
<script src="tools/store_cart.js"></script>

</html>