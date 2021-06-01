<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <!-- Category Page CSS -->
    <link rel="stylesheet" href="./css/product.css">
    <!-- Cookie Section CSS -->
    <link rel="stylesheet" href="./css/cookie.css">
    <!-- FontAwesome Icon. Link: https://fontawesome.com. -->
    <script src="https://kit.fontawesome.com/da0f099ad2.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Cookies -->
    <section class="cookie">
        <div class="cookie-container">
        <p>
            We use cookies in this website to give you the best experience on our
            site and show you relevant ads. To find out more, read our
            <a href="./privacy-policy.html">privacy policy</a> and <a href="./cookie-policy.html">cookie policy</a>.
        </p>
        
        <button class="cookie-btn">I understand</button>
        <a href="#" class="learnmore">Learn More</a>
        </div>
        <script src="../js/cookie.js"></script>
    </section>

    <!-- Header -->
    <header>
        <div class="nav-wrapper">
          <nav>
          <input type="checkbox" id="show-search">
          <input type="checkbox" id="show-menu">
          <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
          <div class="content">
              <div class="logo"><img src="../images/logo.png" alt="mall.logo"></div>
              <ul class="links">
                  <li><a href="../index.html">Home</a></li>
                  <li>
                      <a href="#" class="desktop-link">Products</a>
                      <input type="checkbox" id="show-features">
                      <label for="show-features">Products</label>
                      <ul>
                          <li><a href="./productbyName.html">Search By Names</a></li>
                          <li><a href="./product.html">Search By Categories</a></li>
                      </ul>
                  </li>
                  <li><a href="./contact_us.html">Contact Us</a></li>
                  <li><a href="./fee-page.html">Pricing</a></li>
              </ul>
          </div>
          
          <div class="content">
              <!-- Cart -->
              <div class="cart">
                  <a href="./store/cart.html">
                  <i class="fas fa-shopping-cart">
                      <!-- number of product in cart -->
                      <span class="num-cart-product">0</span>
                  </i>
                  </a>
              </div>
      
              <!-- User-Account -->
              <div class="user-account">
                  <a href="./login.html"><i class="fas fa-user-circle"></i></a>
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
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Department Stores</span>
                            <small>(10)</small>
                            </label>
                        </li>
            
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Grocery Stores</span>
                            <small>(7)</small>
                            </label>
                        </li>
            
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span> Restaurants</span>
                            <small>(3)</small>
                            </label>
                        </li>
            
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Clothing Stores</span>
                            <small>(3)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Toy Stores</span>
                            <small>(2)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Accessory Stores</span>
                            <small>(2)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Pharmacies</span>
                            <small>(2)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Technology Stores</span>
                            <small>(2)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Pet Stores</span>
                            <small>(2)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Specialty Stores</span>
                            <small>(2)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>THrift Stores</span>
                            <small>(2)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Services</span>
                            <small>(2)</small>
                            </label>
                        </li>

                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">
                            <span>Kiosks</span>
                            <small>(2)</small>
                            </label>
                        </li>
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
                <form action="" method="GET">
                        <div class="item">
                        <label for="sort-by">Sort By</label>
                        <select name="sort-by" id="sort-by">
                            <option value="title" selected="selected">Select one option</option>
                            <option value="shop_name">Shop name</option>
                            <option value="shop_category">Shop category</option>
                        </select>
                        </div>
                        <button type="submit" class="btna"> Apply </button>
                </form>
                
    
                    <!-- products -->
                    <div class="product-container">
                    <?php
     /* List of products */
    $products = array
    (
        array("shop_name" => "Nike", "shop_category" => "clothing_stores"),
        array("shop_name" => "Logo", "shop_category" => "toy_stores"),
        array("shop_name" => "circleK", "shop_category" => "grocery_stores"),
        array("shop_name" => "LongTr", "shop_category" => "accessory_stores"),
        array("shop_name" => "sumoBBQ", "shop_category" => "restaurants"),
        array("shop_name" => "Apple", "shop_category" => "technology_stores"),
        array("shop_name" => "uniqlo", "shop_category" => "clothing_stores"),
        array("shop_name" => "puppeys", "shop_category" => "pet_stores")
    );
        // Shop name comparison function
    function shopname_cmp($p1, $p2) 
    {
        // use the built-in string comparison
        return strcmp($p1['shop_name'], $p2['shop_name']);
    }
        // Shop category comparison function
    function cate_cmp($p1, $p2) 
    {
        // use the built-in string comparison
        return strcmp($p1['shop_category'], $p2['shop_category']);
    }
    
    // Create function choose selections
    if(isset($_GET["sort-by"]))
    {
        if ($_GET["sort-by"] == 'shop_name')
        {
            usort($products, 'shopname_cmp');
            echo '<pre>';
            print_r($products);
            echo '</pre>';
        }
        elseif ($_GET["sort-by"] == 'shop_category')
        {
            usort($products, 'cate_cmp');
            echo '<pre>';
            print_r($products);
            echo '</pre>';
        }
        elseif ($_GET["sort-by"] == 'title')
        {
            echo '<pre>';
            print_r($products);
            echo '</pre>';
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
    <footer class="footer" id="footer">
      <div class="container">
        <div class="row">

          <!-- Company  -->
          <div class="footer-col">
            <h4>Company</h4>
            <ul>
              <li><a href="./about-us.html">About Us</a></li>
              <li><a href="./term-of-service.html">Term of Service</a></li>
              <li><a href="./privacy-policy.html">Privacy Policy</a></li>
              <li><a href="./return&refundpolicy.html">Return & Refund Policy</a></li>
              <li><a href="#">Affiliate Program</a></li>
              
            </ul>
          </div>

          <!-- Get Help -->
          <div class="footer-col">
            <h4>Get Help</h4>
            <ul>
              <li><a href="./faq.html">F.A.Q</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Returns</a></li>
              <li><a href="#">Order Status</a></li>
              <li><a href="#">Sell Product ?</a></li>
            </ul>
          </div>

          <!-- Payment, Shipping -->
          <div class="footer-col">
            <h4>Payment Options</h4>
            <ul class="pay-ship-logo">
              <li><img src="../images/visa.png" alt="visa" class="pay-ship"></li>
              <li><img src="../images/mastercard.png" alt="mastercard" class="pay-ship"></li>
              <li><img src="../images/momo.png" alt="momo" class="pay-ship"></li>
            </ul>
          </div>

          <!-- Follow Us on -->
          <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            
          </div>

        </div>
      </div>
      <!-- Copyright -->
      <div class="copyright">
        <span>&#169 2021 - Online Mall. All right reserved</span>
      </div>
    </footer>


    </body>
</html>