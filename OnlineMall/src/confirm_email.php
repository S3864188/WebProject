<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Confirm in Email</title>
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
        <div class="confirmation-wrapper">
            <div class="center">
                <!-- title -->
                <h1>Announcement</h1>
                <form>
                    <div class="announcement">
                        <p> Please check your email to get the link for your new password! </p>
                        <br>
                        <p>If you don't receive any email, please click <a href="">here</a> to get a new email.</p>

                    </div>
                    <a href="../index.html"><input class="button" type="button" value="Complete"></a>

                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>
    
</body>

</html>