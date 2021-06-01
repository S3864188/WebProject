<section class="new-store">
    <div class="new-heading">
        <h2>New Store</h2>
    </div>
    <div class="new-slide-container">
        <section class="new-container" id="slider2">
            <?php
                $stores = read_all_stores();
                $count = 0;
                usort($stores, 'date_compare');
                foreach ($stores as $s) {
                    $id = $s['id'];
                    $name = $s['name'];
                    $date = $s['created_time'];
                    $new_in_stores = $s['featured'];
            ?>
            <!-- Store 1 -->
            <div class="thumbnail-box-2">
                <!-- shop-overlay -->
                <div class="s-overlay"></div>
                <!-- shop-img -->
                <div class="s-img">
                <img src="./images/icon/apple-shop.jpg" alt="apple-store">
                </div>
                <!-- shop-icon -->
                <div class="s-icon">
                <img src="./images/icon/apple-logo.jpg" alt="apple-logo">
                </div>
                <!-- shop details -->
                <div class="s-name"><?php echo $name ?></div>
                <p class="s-name-p"><?php echo $name ?></p>
            </div>
            <?php 
                    $count++;
                    if ($count == 10) {
                    break;
                    }
                }
            ?>
        </section>
        <div class="control">
            <div class="slide-left" id="slide-left-2" ><</div>
            <div class="slide-right" id="slide-right-2">></div>
        </div>
        
        <script src="./js/product-slider-store.js"></script>
    </div>
</section>