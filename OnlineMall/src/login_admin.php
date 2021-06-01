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
    <h2>Login Admin</h2>
    <form method="post" action="login_admin_config.php">
        <div>
            Admin Name<br>
            <input type="text" name="name">
        </div>
        <div>
            Password<br>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="act" value="Login">
            <a href="install.php">Register Admin</a>
        </div>
    </form>

</body>

</html>