<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <!-- Information Page CSS -->
    <link rel="stylesheet" href="../css/information_page.css">
    <!-- Cookie Section CSS -->
    <link rel="stylesheet" href="../css/cookie.css">
    <!-- FontAwesome Icon. Link: https://fontawesome.com. -->
    <script src="https://kit.fontawesome.com/da0f099ad2.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <script src="../js/new_05.js"></script>

    <!-- Cookies -->
    <?php include "../php/cookie-web.php" ?>

    <!-- Header -->
    <?php include "../php/mall-header.php" ?>

    <!-- Main -->
    <h2 style="text-align:center">User Information Page</h2>

    <div class="card">
        <img src="../images/creator-img/DucAnh.jpg" alt="David" style="width:100%">
        <h1>Le Duc Anh</h1>
        <p class="title">Web Developer</p>
        <p style="font-size: 20px;">RMIT University</p>
        <p id="email-field" onload="testtmp()">adad</p>
        <div class="social-icons" style="margin: 24px 0;">
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <p><button class="contact-button">Contact</button></p>
    </div>

    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>

    <!-- Javascript -->
    <script>
        var temp = localStorage.getItem("user1");
        document.getElementById("email-field").innerHTML = temp;
    </script>

</body>

</html>