<?php 
require './php/display.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Mall</title>
    <link rel="icon" href="./images/shop-icon.png">
    <!-- Mall CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Cookie Section CSS -->
    <link rel="stylesheet" href="./css/cookie.css"> 
    <!-- FontAwesome Icon. Link: https://fontawesome.com. -->
    <script src="https://kit.fontawesome.com/da0f099ad2.js" crossorigin="anonymous"></script>
  </head>
  
  <body>
  <!-- Header -->
  <header>
      <div class="nav-wrapper">
          <nav>
              <input type="checkbox" id="show-search">
              <input type="checkbox" id="show-menu">
              <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
              <div class="content">
                  <div class="logo"><img src="./images/logo.png" alt="mall.logo"></div>
                  <ul class="links">
                      <li><a href="./index.php">Home</a></li>
                      <li>
                          <a href="#" class="desktop-link">Products</a>
                          <input type="checkbox" id="show-features">
                          <label for="show-features">Products</label>
                          <ul>
                              <li><a href="./src/productbyName.php">Search By Names</a></li>
                              <li><a href="./src/product.php">Search By Categories</a></li>
                          </ul>
                      </li>
                      <li><a href="./src/contact_us.php">Contact Us</a></li>
                      <li><a href="./src/fee-page.php">Pricing</a></li>
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
                      <a href="./src/store/cart.php">
                      <i class="fas fa-shopping-cart">
                          <!-- number of product in cart -->
                          <span class="num-cart-product"><?php echo $count; ?></span>
                      </i>
                      </a>
                  </div>

                  <!-- User-Account -->
                  <div class="user-account">
                      <a href="./src/login.php"><i class="fas fa-user-circle"></i></a>
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

    <!-- Cookies -->
  <section class="cookie">
    <div class="cookie-container">
      <p>
        We use cookies in this website to give you the best experience on our
        site and show you relevant ads. To find out more, read our
        <a href="./src/privacy-policy.php">privacy policy</a> and <a href="./src/cookie-policy.php">cookie policy</a>.
      </p>

      <button class="cookie-btn">I understand</button>
      <a href="#" class="learnmore">Learn More</a>
    </div>
    <script src="./js/cookie.js"></script>
  </section>
  
    <!-- Main -->
    <main>
      <!-- Heading Slider -->
      <section class="heading">
        <div class="slider">
            <div class="slide active" style="background-image: url('./images/advertisement/microsoft-surface-laptop.jpg')">
                <div class="container">
                    <div class="caption ">
                        <h1>1. New Arrival Laptop 2021</h1>
                        <p>Come see the new laptops that will be arriving this year.</p>
                        <a href="">See More</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('./images/advertisement/houseware.jpg ')">
                <div class="container">
                    <div class="caption">
                        <h1>2. Houseware in your daily life</h1>
                        <p>Discover household appliances and essential family items.</p>
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url('./images/advertisement/watch.jpg')">
                <div class="container">
                    <div class="caption">
                        <h1>3. "Watches speak of your personality"</h1>
                        <p>Discover the world's finest design watches </p>
                        <a href="">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="slide" style="background-image: url('./images/advertisement/shoes.jpg')">
              <div class="container">
                  <div class="caption">
                      <h1>4. Smooth miles for all</h1>
                      <p>Discover our large range from adidas, Asics, Saucony & more now! </p>
                      <a href="">Shop Now</a>
                  </div>
              </div>
          </div>
        </div>
    
        <!-- controls  -->
        <div class="controls">
            <div class="prev"><</div>
            <div class="next">></div>
        </div>

        <!-- indicators -->
        <div class="indicator">
        </div>
        <!-- JavaScript Slider Link -->
        <script src="./js/heading-slider.js"></script>
        
      </section>

      <!-- Collection -->
      <section class="collection">
        <div class="inside">
          <div class="collection-container">

          <!-- collection-box-1 -->
            <div class="collection-box">
              <div class="c-header">
                <!-- Header -->
                <h2 class="header-text">Computer & Accessories</h2>
              </div>
              <!-- Body -->
              <div class="c-body">
                <a href="#" class="c-link">
                  <div class="body-image">
                    <img src="./images/stuff/laptop-asus.jpg" alt="laptop">
                  </div>
                </a>
              </div>
              <!-- Footer -->
              <div class="c-footer">
                <a href="#" class="footer-link">Shop Now</a>
              </div>
            </div>

            <!-- collection-box-2 -->
            <div class="collection-box">
              <div class="c-header">
                <!-- Header -->
                <h2 class="header-text">Toys for Kids</h2>
              </div>
              <!-- Body -->
              <div class="c-body">
                <a href="#" class="c-link">
                  <div class="body-image">
                    <img src="./images/stuff/toys.jpg" alt="toys">
                  </div>
                </a>
              </div>
              <!-- Footer -->
              <div class="c-footer">
                <a href="#" class="footer-link">Shop Now</a>
              </div>
            </div>

            <!-- collection-box-3 -->
            <div class="collection-box">
              <div class="c-header">
                <!-- Header -->
                <h2 class="header-text">Sport & Outdoor</h2>
              </div>
              <!-- Body -->
              <div class="c-body">
                <a href="#" class="c-link">
                  <div class="body-image">
                    <img src="./images/stuff/sport-outdoor.jpg" alt="sport">
                  </div>
                </a>
              </div>
              <!-- Footer -->
              <div class="c-footer">
                <a href="#" class="footer-link">Shop Now</a>
              </div>
            </div>

            <!-- collection-box-4 -->
            <div class="collection-box">
              <div class="c-header">
                <!-- Header -->
                <h2 class="header-text">Beauty Picks</h2>
              </div>
              <!-- Body -->
              <div class="c-body">
                <a href="#" class="c-link">
                  <div class="body-image">
                    <img src="./images/stuff/beauty.jpg" alt="beauty">
                  </div>
                </a>
              </div>
              <!-- Footer -->
              <div class="c-footer">
                <a href="#" class="footer-link">See More</a>
              </div>
            </div>

          </div>
        </div>
      </section>

      <!-- Feature Categories -->
      <section class="feature-categories">
        <!-- Heading -->
        <div class="categories-heading">
          <h2>Featured Categories</h2>
        </div>
        
        <!-- Box -->
        <ul class="container">
          <!-- Item 1 -->
          <li class="item">
            <div class="feature-box">
              <a href="#"><img src="./images/stuff/tablet.jpg" alt="tablet"></a>
            </div>
            <span>Phone - Tablet</span>
          </li>

          <!-- Item 2 -->
          <li class="item">
            <div class="feature-box">
              <a href="#"><img src="./images/stuff/electronic.jpg" alt="electronic"></a>
            </div>
            <span>Electronic</span>
          </li>

          <!-- Item 3 -->
          <li class="item">
            <div class="feature-box">
              <a href="#"><img src="./images/stuff/headphone.jpg" alt="headphone"></a>
            </div>
            <span>Accessories - Digital Equipments</span>
          </li>

          <!-- Item 4 -->
          <li class="item">
            <div class="feature-box">
              <a href="#"><img src="./images/stuff/macbook.jpg" alt=""></a>
            </div>
            <span>Laptop - IT Equipments</span>
          </li>

          <!-- Item 5 -->
          <li class="item">
            <div class="feature-box">
              <a href="#"><img src="./images/stuff/camera.jpg" alt=""></a>
            </div>
            <span>Camera - Video Recording</span>
          </li>

          <!-- Item 6 -->
          <li class="item">
            <div class="feature-box">
              <a href="#"><img src="./images/stuff/appliances.jpg" alt="appliances"></a>
            </div>
            <span>Electric Appliances</span>
          </li>

          <!-- Item 7 -->
          <li class="item">
            <div class="feature-box">
              <a href="#"><img src="./images/stuff/houseware.png" alt="houseware"></a>
            </div>
            <span>Houseware</span>
          </li>
        </ul>
        
        

      </section>

      <!-- New Product -->
      <?php 
      include ('./php/index/new-product.php')
      ?>

      <!-- New Store -->
      <?php 
      include ('./php/index/new-store.php')
      ?>

      <!-- Feature Store -->
      <?php 
      include ('./php/index/feature-store.php')
      ?>

      <!-- Feature Product -->
      <?php 
      include ('./php/index/feature-product.php')
      ?>
          
        

      <!-- Service Box -->
      <section class="services">
        <!-- Service Box -->
        <div class="services-box">
          <i class="fas fa-shipping-fast"></i>
          <span>Free Shipping</span>
          <p>Free Shipping for all VN order</p>
        </div>
        <!-- Service Box -->
        <div class="services-box">
          <i class="fas fa-headphones-alt"></i>
          <span>Support 24/7</span>
          <p>We support 24 hour a day</p>
        </div>
        <!-- Service Box -->
        <div class="services-box">
          <i class="fas fa-sync"></i>
          <span>100% Money Back</span>
          <p>We will support you if having issue</p>
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
                        <li><a href="./src/about-us.php">About Us</a></li>
                        <li><a href="./src/term-of-service.php">Term of Service</a></li>
                        <li><a href="./src/privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="./src/return&refundpolicy.php">Return & Refund Policy</a></li>
                        <li><a href="./src/cookie-policy.php">Cookie Policy</a></li>
                        <li><a href="#">Affiliate Program</a></li>
                        
                    </ul>
                </div>

                <!-- Get Help -->
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="./src/faq.php">F.A.Q</a></li>
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
                        <li><img src="./images/visa.png" alt="visa" class="pay-ship"></li>
                        <li><img src="./images/mastercard.png" alt="mastercard" class="pay-ship"></li>
                        <li><img src="./images/momo.png" alt="momo" class="pay-ship"></li>
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
