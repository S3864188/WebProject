<section class="mall-shop">
    <!-- Heading -->
    <div class="shop-heading">
        <h2>Feature Store</h2>
    </div>

    <!-- products -->
    <div class="shop-container">

    <!-- shop-box-1 -->
        <a href="./src/store/homestore1.php">
            <div class="shop-box">
                <!-- shop-overlay -->
                <div class="s-overlay"></div>
                <!-- shop-img -->
                <div class="s-img">
                <img src="./src/store/images/category/category-3.jpg" alt="longtr&co-store">
                </div>
                <!-- shop-icon -->
                <div class="s-icon">
                <img src="./src/store/images/logo/logo.png" alt="longtr&co-logo">
                </div>  
                <!-- shop details -->
                <div class="s-name">LongTr & Co</div>
                <p class="s-name-p">LongTr & Co</p>
                <p class="s-name-p">(Currently Available)</p>
            </div>
        </a>

        <?php
            $stores = read_all_stores();
            $count = 0;
            foreach ($stores as $s) {
                $id = $s['id'];
                $name = $s['name'];
                $date = $s['created_time'];
                $fe_in_stores = $s['featured'];
                if ($fe_in_stores == "FALSE"){
                    echo "";  /* display none when product in "feature in mall" is false */
                };
        ?>
        <div class="shop-box">
            <!-- shop-overlay -->
            <div class="s-overlay"></div>
            <!-- shop-img -->
            <div class="s-img">
                <img src="./images/icon/nike-shop.jpg" alt="nike-store">
            </div>
            <!-- shop-icon -->
            <div class="s-icon">
                <img src="./images/icon/nike-logo.jpg" alt="nike-logo">
            </div>
            <!-- shop details -->
            <div class="s-name"><?php echo $name ?></div>
            <p class="s-name-p"><?php echo $name ?></p>
        </div>
        <?php 
            $count++;
            if ($count == 5) {
            break;
            }
        }
        ?>
    </div>
</section>