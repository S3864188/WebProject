<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        form div {
            margin: 20px 50px;
        }

        .error {
            background-color: red;
        }
    </style>
</head>

<body>
    <?php
    if (isset($status)) {
        echo "<h3 class=\"error\">$status</h3>";
    }
    ?>
    <h2>Login Form</h2>
    <a href="login_admin.php">admin</a>
    <form method="post" action="login_config.php">
        <div>
            User Email<br>
            <input type="text" name="email">
        </div>
        <div>
            Password<br>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="act" value="Login">
            <a href="registerscreen.php">Register</a>
            
        </div>
    </form>
   
</body>

</html>