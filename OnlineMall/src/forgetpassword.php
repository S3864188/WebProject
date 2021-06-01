<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Forgot Password</title>
    <!-- css link -->
    <link rel="stylesheet" href="../css/forgetpasswordandconfirmation.css">
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


    <!-- Main part -->
    <main>
        <div class="forget-wrapper">
            <div class="center">
                <!-- title -->
                <h1>Forgot Password</h1>
                <form method="POST">
                    <!-- input email -->
                    <div class="txt_field">
                        <input type="text" required>
                        <span></span>
                        <label> Enter your Email Adress here !</label>
                    </div>
                    <!-- continue button -->
                    <a href="./confirm_email.html"><input class="button" type="button" value="Continue"></a>
                </form>
            </div>
        </div>
    </main>


    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>


</body>

</html>