<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <!-- User Account CSS -->
    <link rel="stylesheet" href="../css/user-account.css">
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
    <!-- user account -->
    <div class="main-profile">
        <div class="titler">
            <p>Your Profile</p>
        </div>
        <!-- user img-name -->
        <div class="profile">
            <div class="colum-left left">
                <img src="https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.18169-9/14910295_559236277598899_999382489733537467_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=9ro-MOeap_QAX_1wUzh&_nc_ht=scontent.fsgn5-5.fna&oh=67a74435a92644cf2eee4cd2fe952e22&oe=609D5CFC"
                    width="100">
                <h4>Hoang Bui</h4>
                <p>(SELLER)</p>
            </div>
            <!-- user infor -->
            <div class="right">
                <div class="colum-right">
                    <h3>Information</h3>
                    <div class="detail-out">
                        <div class="detail">
                            <h4>Phone: </h4>
                            <p>0912 999 999</p>
                        </div>
                        <div class="detail">
                            <h4>Email </h4>
                            <p>0912 999 999</p><br>
                        </div>
                        <div class="detail">
                            <h4>Gender </h4>
                            <p>0912 999 999</p>
                        </div>
                        <div class="detail">
                            <h4>Address </h4>
                            <p>0912 999 999</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>
</body>

</html>