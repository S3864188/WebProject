<?php
include ("header.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tools/shop1.css">
    <script src="tools/store_cart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap " rel="stylesheet ">

</head>

<body>
    <!-----single product details--->


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


    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images/gallery/gallery-1.jpg" width="100%" id="ProductImg">
            </div>
            <form action="cart_function.php" method="POST">
            <div class="col-2">
                <!---Input-->
                <p><?= $name; ?></p>
                <h3 style="text-align:center;"><?= $name; ?></h3>
                <p style="text-align:center;">$<?= $price; ?></p>
                <select>
                    <option>Select Size</option> <!---Input-->
                    <option>45.32mm</option>
                </select>
                <input type="number" value="1">
                <div style="text-align:center;">
                <button type="submit" name="buy_btn" class="buy-btn">Add To Cart</button>
                <input type="hidden" name="item_name" value="<?= $name ?>">
                <input type="hidden" name="item_price" value="<?= $price ?>">
                </div>
                </form>

                <!---Input-->
                <h3>Product Details</h3>
                <p>Ceramic case</p>
                <p>Self-Winding Mecanical</p>
                <p>Power Reserve: 50h</p>
            </div>
            <!---addition img product detail-->
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/gallery/gallery-2.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery/gallery-3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery/gallery-4.jpg" width="100%" class="small-img">
                </div>
            </div>
        </div>

    </div>

    <?php


if ($count == 1) 
{
    break;
    }
    }
?>

    <!-----title-->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Product</h2>
            <p>View More</p>
        </div>

    </div>

    <div class="small-container">

        <div class="row">
            <h2 class="title">Featured products</h2>
            <div class="row">
                <div class="col-4">
                    <a href="product-detail3.html"><img src="images/product/product-6.png">
                        <h4>H.Moser & Cie APL FE</h4>
                    </a>
                    <p>$100000.00</p>
                </div>
                <div class="col-4">
                    <a href="product-detail3.html"><img src="images/product/product-7.png">
                        <h4>Jacob & Co Pioneer</h4>
                        <p>$40000.00</p>
                </div>
                </a>
                <div class="col-4">
                    <a href="product-detail3.html"><img src="images/product/product-8.png">
                        <h4>Rolex Submariner Batman edition</h4>
                        <p>$15000.00</p>
                </div>
                </a>
                <div class="col-4">
                    <a href="product-detail3.html"><img src="images/product/product-9.png">
                        <h4>Rolex GMT Pepsi edition</h4>
                        <p>$18000.00</p>
                </div>
                </a>
            </div>
        </div>
    </div>


    <!-- footer -->

    
    <?php
    include ("footer.php");
    ?>
    
</body>

</html>