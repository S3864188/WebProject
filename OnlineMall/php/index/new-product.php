<section class="new-product">
    <div class="new-heading">
        <h2>New Product</h2>
    </div>

    <div class="new-slide-container">
        <section class="new-container" id="slider1">
            <?php
                $products = read_all_products();
                $count = 0;
                usort($products, 'date_compare');
                foreach ($products as $p) {
                    $id = $p['id'];
                    $name = $p['name'];
                    $price = $p['price'];
                    $date = $p['created_time'];
                    $new_in_mall = $p['featured_in_mall'];
            ?>
            <div class="thumbnail-box-1">
                <div class="product-img">
                    <!-- img -->
                    <img src="./images/product/feature-1.jpg" alt="product-1">
                </div>
                <!-- details -->
                <div class="product-details">
                    <div class="p-segment"></div>
                    <span class="p-title"><?php echo $name ?></span>
                    <div class="p-price">
                        <div class="price-first-line">
                            <span class="currency"> &#36 </span>
                            <span class="price"><?php echo $price ?></span>
                        </div>
                        <div class="price-second-line">
                            <div class="price-text">
                            <span class="currency"><!-- &#36 --></span>
                            <span class="price"><!-- <?php echo $price ?> --></span>
                            </div>
                            <span class="discount-text"><!-- 50% --></span>
                        </div>
                    </div>
                </div>
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
            <div class="slide-left" id="slide-left-1" ><</div>
            <div class="slide-right" id="slide-right-1">></div>
        </div>
        
    </div>
    <script src="./js/product-slider-product.js"></script>

</section>