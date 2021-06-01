<?php
if (!isset($_SESSION['name'])) {
    // check cookie
    if (isset($_COOKIE['name'])) {
      $name = $_COOKIE['name'];
      // check if the cookie is valid one
      if (file_exists("../../../$name")) {
        $val = file_get_contents("../../../$name");
        if ($_COOKIE['uniqid'] == $val) {
          $_SESSION[$name] = $_COOKIE['name'];
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/cms-page.css">
</head>

<style>


</style>
<body>
    <div class="header-title"><h2>CMS Page</h2s></div>
    <div class="page">
        <a href="./editpagetext/edit-page.php" class="btn"><h2>Edit Page Text</h2></a>
    </div>
    <div class="page">
        <a href="./replaceimage/replace-img.php" class="btn"><h2>Edit About Us Image</h2></a>
    </div>
    <a href="../../../"></a>
</body>
</html>