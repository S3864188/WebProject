<?php include ("header.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>By Date</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tools/shop1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap " rel="stylesheet ">

</head>

<div class="small-container" style="margin-top: 20px;">
<h2 class="title">Catelogy</h2>
    <div class="row">
    

<?php
    require 'connect_csv.php';
    $products = read_all_products();
    $count = 0;
    foreach ($products as $p) {
        $id = $p['id'];
        $name = $p['name'];
        $price = $p['price'];
        $date = $p['created_time'];
        $count++;
                 
?>
<!-- display products depend on catelogy -->
    <div class="catelogy"
    <?php
    if ($name != "KFC") {
            echo 'style="display: none;"';
    }
    ?>
    >
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
    </div>


<?php


if ($count == 100) 
{
    break;
    }
    }
?>

</div>
    </div> 

    <!--- logo brands -->
    <div class="brands">
        <div class="small-container" style="margin-bottom: -4em;">
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

    <div class="footer">
    <?php include ("footer.php")?>
    </div>
</body>
<script src="tools/store_cart.js"></script>

</html>