<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>By Date</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop1.css">
    <script src="tools/store_cart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap " rel="stylesheet ">

</head>
<body>
<div class="header">
        <div class="container">
            <div class="navbar">
                <!----store logo-->
                <div class="logo">
                    <a href="homestore1.php"><img src="images/logo/logo.png" width="200px"></a>
                </div>
                <!---dropdown menu using checkbox-->
                <nav>
                    <div class="menu">
                        <label for="toggle-responsive" class="toggle-menu"><img src="images/logo/menu.png" width="30px" height="30px"></label>
                        <input type="checkbox" id="toggle-responsive" />
                        <ul class="nav level-one">
                            <li><a href="../../index.php">Mall</a></li>
                            <li><a href="homestore1.php">Home</a></li>

                            <li class="parent">
                                <label for="toggle-level-1-01" class="toggle">Products</label>
                                <input type="checkbox" id="toggle-level-1-01" />
                                <ul class="level-three">
                                    <li>
                                        <a href="bydate.php?page=1">By Date</a>
                                    </li>
                                    <li class="parent">
                                        <label for="toggle-level-2-01" class="toggle">Catelogy</label>
                                        <input type="checkbox" id="toggle-level-2-01"/>
                                        <ul class="level-four">
                                            <li>
                                                <a href="HMoser.php">H.Moser & Cie</a>
                                            </li>
                                            <li>
                                                <a href="HMoser.php">Rolex</a>
                                            </li>
                                            <li>
                                                <a href="HMoser.php">Patek Philippe</a>
                                            </li>
                                            <li>
                                                <a href="HMoser.php">Hublot</a>
                                            </li>
                                            <li>
                                                <a href="HMoser.php">Jacob & Co</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="../about-us.php">About Us</a></li>
                            <li><a href="../contact_us.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="cart-icon">
                    <?php
                    $count = 0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }
                    ?>
                    <a href="cart.php"><img src="images/logo/cart.png" width="30px" height="30px"><?php echo $count; ?></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>