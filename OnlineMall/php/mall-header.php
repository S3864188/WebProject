<!-- Header -->
<?php
session_start();
?>
    

<header>
    <div class="nav-wrapper">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <div class="logo"><img src="../images/logo.png" alt="mall.logo"></div>
                <ul class="links">
                    <li><a href="../index.php">Home</a></li>
                    <li>
                        <a href="#" class="desktop-link">Products</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Products</label>
                        <ul>
                            <li><a href="../src/productbyName.php">Search By Names</a></li>
                            <li><a href="../src/product.php">Search By Categories</a></li>
                        </ul>
                    </li>
                    <li><a href="../src/contact_us.php">Contact Us</a></li>
                    <li><a href="../src/fee-page.php">Pricing</a></li>
                </ul>
            </div>
            
            <div class="content">
                <!-- Cart -->
                <div class="cart">
                <?php
                    $count = 0;
                        if(isset($_SESSION['cart']))
                        {
                            $count=count($_SESSION['cart']);
                        }
                    ?>
                    <a href="../src/store/cart.php">
                    <i class="fas fa-shopping-cart">
                        <!-- number of product in cart -->
                        <span class="num-cart-product"><?php echo $count; ?></span>
                    </i>
                    </a>
                </div>

                <!-- User-Account -->
                <div class="user-account">
                    <a href="../src/login.php"><i class="fas fa-user-circle"></i></a>
                </div>
                <!-- Search icon -->
                <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
            </div>
            <!-- Search Bar -->
            <form action="#" class="search-box">
                <input type="text" placeholder="Type Something to Search..." required>
                <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
            </form>
        </nav>
    </div>      
</header>

