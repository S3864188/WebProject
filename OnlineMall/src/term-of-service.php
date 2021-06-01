<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Term of Service</title>
    <!-- Overall Policy CSS -->
    <link rel="stylesheet" href="../css/policy.css">
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
        <section class="section">
            <div class="body">
                <!-- TermsFeed Website: https://www.termsfeed.com/ (Term of Service: https://app.termsfeed.com/download/fb047351-b491-4075-a136-65475f61d9db) -->
                <?php 
                echo readfile("../php/CMS/editpagetext/text/termofservice.txt");
                ?>
            </div>
        </section>
    </main>
    






    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>
</body>
</html>