<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Overall Policy CSS -->
    <link rel="stylesheet" href="../css/faq.css">
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
    
    <!-- Main -->
    <main>
        <div class="faq-container">
            <div class="faq-heading">
                <h1>Frequently Asked Questions (F.A.Q)</h1>
            </div>
            <!-- Accordion Heading One -->
            <div class="parent-tab tab-tab">
              <input type="radio" name="tab" id="tab-1" checked>
              <label for="tab-1" class="tab-tab">
                <span>My Account</span>
                <div class="icon"><i class="fas fa-plus"></i></div>
              </label>
              <div class="content">
                
                    <!-- Sub Heading One -->
                    <div class="child-tab">
                        <input type="checkbox" name="sub-tab" id="sub-tab-1">
                        <label for="sub-tab-1">
                          <span>Can't login into Online Mall</span>
                          <div class="icon"><i class="fas fa-plus"></i></div>
                        </label>
                        <div class="sub-content">
                          <p> Here are some common reasons people can't log into Online Mall. Find the reason that best matches your experience and follow the steps.</p>

                          <h2>Forgot your password</h2>
                          <p> If you can’t remember your password, you can reset it. For more information, learn how to Reset your password. <br>
                              Note: You'll need access to the email connected to your Online Mall account to reset your password.</p>

                          <h2>We protected your account</h2>
                          <p>If we notice any strange activity on your Online Mall account, we'll send you an email, reset your password, and log everyone out (including you) to protect your account. To get back on Online Mall, reset your password. Or, if your account is connected to Google, Facebook or Twitter and you've logged in that way before, log in with Google, Facebook, or Twitter.</p>

                          <h2>We suspended your account</h2>
                          <p>If your account is suspended, you'll see an error message when you try to log in. It may be because you did something that went against our community guidelines. If you think we shouldn't have suspended your account, get in touch with us.</p>

                          <h2>Can't log in with Facebook or Google</h2>
                          <p>If you're having trouble logging into Online Mall with Facebook, Google or Twitter, you may need to adjust your settings in your Facebook app, Google or Twitter account.</p>

                          <h2>Accidentally created another account</h2>
                          <p>If your Pins and boards are missing or you recently got a new phone and things suddenly look different, you may have accidentally created a new account. Log out and search for your original account.</p>
                        </div>
                    </div>
                    <!-- Sub Heading Two -->
                    <div class="child-tab">
                        <input type="checkbox" name="sub-tab" id="sub-tab-2">
                        <label for="sub-tab-2">
                          <span>Protect your account</span>
                          <div class="icon"><i class="fas fa-plus"></i></div>
                        </label>
                        <div class="sub-content">
                          <p>It’s important to protect your information against unknown logins and suspicious activity. We do our best to keep your account safe but here are a couple of additional actions you can take to secure it. </p>

                          <h2>Enable two factor authentication</h2>
                          <p>Turn on Two-factor authentication to use your phone and your password for extra security. </p>
                            
                          <h2>Use a strong password</h2>
                            <p> Use numbers and symbols to make your password stronger <br>
                                Use a unique password for your Pinterest account <br>
                                Keep your password secret—we'll never ask for your password by email, instant message or phone
                            </p>
                            
                          <h2>Watch where you log in</h2>
                          <p>Only enter your password on pinterest.com <br>
                            Check the address bar in your browser to make sure it ends in onlinemall.com and onlinemall.somethingelse.com <br>
                            If you're not sure whether you should log in, go to onlinemall.com to be safe <br>
                            Never answer suspicious requests for personal information and be cautious about any deals that seem too good to be true</p>
                        </div>
                    </div>

              </div>
            </div>
        
            <!-- Accordion Heading Two -->
            <div class="parent-tab tab-tab">
              <input type="radio" name="tab" id="tab-2">
              <label for="tab-2" class="tab-tab">
                <span>COVID-19 FAQs</span>
                <div class="icon"><i class="fas fa-plus"></i></div>
              </label>
              <div class="content">
                
                    <!-- Sub Heading One -->
                    <div class="child-tab">
                        <input type="checkbox" name="sub-tab" id="sub-tab-1">
                        <label for="sub-tab-1">
                        <span>Sub Heading One</span>
                        <div class="icon"><i class="fas fa-plus"></i></div>
                        </label>
                        <div class="sub-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>
                        </div>
                    </div>
                    <!-- Sub Heading Two -->
                    <div class="child-tab">
                        <input type="checkbox" name="sub-tab" id="sub-tab-2">
                        <label for="sub-tab-2">
                        <span>Sub Heading Two</span>
                        <div class="icon"><i class="fas fa-plus"></i></div>
                        </label>
                        <div class="sub-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>
                        </div>
                    </div>

              </div>
            </div>
        
            <!-- Accordion Heading Three -->
            <div class="parent-tab tab-tab">
              <input type="radio" name="tab" id="tab-3">
              <label for="tab-3" class="tab-tab">
                <span>Returns & Refunds</span>
                <div class="icon"><i class="fas fa-plus"></i></div>
              </label>
              <div class="content">

                <!-- Sub Heading One -->
                <div class="child-tab">
                  <input type="checkbox" name="sub-tab" id="sub-tab-1">
                  <label for="sub-tab-1">
                    <span>Sub Heading One</span>
                    <div class="icon"><i class="fas fa-plus"></i></div>
                  </label>
                  <div class="sub-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>
                  </div>
                </div>
                <!-- Sub Heading Two -->
                <div class="child-tab">
                  <input type="checkbox" name="sub-tab" id="sub-tab-2">
                  <label for="sub-tab-2">
                    <span>Sub Heading Two</span>
                    <div class="icon"><i class="fas fa-plus"></i></div>
                  </label>
                  <div class="sub-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>
                  </div>
                </div>

              </div>
            </div>
        
            <!-- Accordion Heading Four -->
            <div class="parent-tab tab-tab">
              <input type="radio" name="tab" id="tab-4">
              <label for="tab-4" class="tab-tab">
                <span>Delivery</span>
                <div class="icon"><i class="fas fa-plus"></i></div>
              </label>
              <div class="content">

                 <!-- Sub Heading One -->
                 <div class="child-tab">
                    <input type="checkbox" name="sub-tab" id="sub-tab-1">
                    <label for="sub-tab-1">
                      <span>Sub Heading One</span>
                      <div class="icon"><i class="fas fa-plus"></i></div>
                    </label>
                    <div class="sub-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>
                    </div>
                  </div>
                  <!-- Sub Heading Two -->
                  <div class="child-tab">
                    <input type="checkbox" name="sub-tab" id="sub-tab-2">
                    <label for="sub-tab-2">
                      <span>Sub Heading Two</span>
                      <div class="icon"><i class="fas fa-plus"></i></div>
                    </label>
                    <div class="sub-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing thelit dolor. Utfacilis labore, exercitationem fuga minima a illo modi vitaerse dignissimos? Vero?</p>
                    </div>
                  </div>

              </div>
            </div>
          </div>
    </main>

    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>
</body>
</html>