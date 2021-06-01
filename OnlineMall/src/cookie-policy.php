<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Policy</title>
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
            <!-- TermsFeed Website: https://www.termsfeed.com/ (Cookies Policy: https://app.privacypolicies.com/download/6e9d6130-e61a-4b37-9ea7-a7530b0c7854) -->
            <div class="body">
                <?php 
                    echo readfile("../php/CMS/editpagetext/text/cookies_policy.txt");
                ?>
            </div>

        </section>
    </main>

    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>
</body>
</html>