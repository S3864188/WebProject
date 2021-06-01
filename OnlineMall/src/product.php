<?php
function read_all_categories() {
    $file_name = '../data/categories.csv';
    $fp = fopen($file_name, 'r');
    $first = fgetcsv($fp);
    $categories = [];
    while ($row = fgetcsv($fp)) {
      $i = 0;
      $category = [];
      foreach ($first as $col_name) {
        $category[$col_name] =  $row[$i];
        $i++;
      }
      $categories[] = $category;
    }
    return $categories;
}

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <!-- Category Page CSS -->
    <link rel="stylesheet" href="../css/product.css">
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
    
    <!-- Body -->
    <main>
        <section class="products">
            <div class="products-layout container">
                <div class="col-1-of-4">
                    <div>
                        <div class="block-title">
                        <h3>Category</h3>
                        </div>
            
                        <ul class="block-content">
                            <?php
                            $categories = read_all_categories();
                            foreach ($categories as $c) {
                                $id = $c['id'];
                                $name = $c['name'];
                            ?>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span><?php echo $name?></span>
                            <small><!-- (10) --></small>
                            </label>
                        </li>
                            <?php 
                            }
                            ?>
                        
                        </ul>
                    </div>
            
                    <div>
                        <div class="block-title">
                        <h3>Brands</h3>
                        </div>
            
                        <ul class="block-content">
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                <span>Nike</span>
                                <small>(10)</small>
                                </label>
                            </li>
                
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                <span>Burberry</span>
                                <small>(7)</small>
                                </label>
                            </li>
                
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                <span> Apple Store</span>
                                <small>(3)</small>
                                </label>
                            </li>
                
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                <span>Asus</span>
                                <small>(3)</small>
                                </label>
                            </li>
                
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                <span>Samsung</span>
                                <small>(3)</small>
                                </label>
                            </li>
                
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                <span>Rolex</span>
                                <small>(3)</small>
                                </label>
                            </li>
                
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                <span>Moreschi</span>
                                <small>(3)</small>
                                </label>
                            </li>
                
                            <li>
                                <input type="checkbox" name="" id="">
                                <label for="">
                                <span>Lego</span>
                                <small>(3)</small>
                                </label>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-3-of-4">
                    <form action="">
                      <div class="item">
                        <label for="sort-by">Sort By</label>
                        <select name="sort-by" id="sort-by">
                          <option value="title" selected="selected">Name</option>
                          <option value="number">Price</option>
                          <option value="search_api_relevance">Relevance</option>
                          <option value="created">Newness</option>
                        </select>
                      </div>
                      <a href="">Apply</a>
                    </form>
                
    
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
            </div>
        </section>
    </main>







    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>


    </body>
</html>