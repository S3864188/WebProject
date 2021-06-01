<section class="suggestion-today">
  <!-- Heading -->
  <div class="suggestion-heading">
    <h2>Feature Product</h2>
  </div>
  <!-- products -->
  <div class="product-container">
    <?php
      $products = read_all_products();
      $count = 0;
      foreach ($products as $p) {
          $id = $p['id'];
          $name = $p['name'];
          $price = $p['price'];
          $date = $p['created_time'];
          $fe_in_mall = $p['featured_in_mall'];
          if ($fe_in_mall == "FALSE"){
            echo "";  /* display none when product in "feature in mall" is false */
          };
      ?>
    <div class="product-box">
      <!-- product-img -->
      <div class="product-img">
        <!-- img -->
        <img src="./images/product/feature-1.jpg" alt="product-1">
      </div>
      <!-- details -->
      <div class="product-details">
        <div class="p-segment"></div>
        <span class="p-title"> <?php echo $name ?> </span>
        <div class="user-rating">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="footing">(10)</span>
        </div>
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
        if ($count == 20) {
          break;
        }
    }
    ?>
  </div>
</section>