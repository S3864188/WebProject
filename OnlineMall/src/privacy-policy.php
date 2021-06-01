<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
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
            <!-- TermsFeed Website: https://www.termsfeed.com/ (Privacy Policy: https://app.termsfeed.com/download/e7b67bfe-3ecc-4cda-bd97-e7f1d3b03049) -->
            <div class="body">
                <?php 
                    echo readfile("../php/CMS/editpagetext/text/privacy_policy.txt");
                ?>
            </div>

        </section>
    </main>







    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>
</body>
</html>