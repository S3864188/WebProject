<?php
//index.php


$name = '';
$password = md5('');
$second_password = '';
function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
function register(){
    $error = '';
    if (isset($_POST["submit"])) {
        if (empty($_POST["name"])) {
            $error = '<p><label class="text-danger">Please Enter your Name</label></p>';
        } else {
            $name = clean_text($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
            }
        }
        if (empty($_POST["password"])) {
            $error = '<p><label class="text-danger">Please Enter your password number</label></p>';
        } else {
            $password = clean_text($_POST["password"]);
        }
        //second password
        if (empty($_POST["second-password"])) {
            $error = '<p><label class="text-danger">Please Enter your password number</label></p>';
        } else {
            $second_password = clean_text($_POST["second-password"]);
        }
    
        if ($error == '') {
            fopen("../../admindata.csv", "a");
            $no_rows = count(file("../../admindata.csv"));
            if ($no_rows > 1) {
                $no_rows = ($no_rows - 1) + 1;
            }
            $form_data = array(
                'sr_no'  => $no_rows,
                'name'  => $name,
                'password' => $password,
                'phone' => $second_password
            );
    
            $file = '../../admindata.csv';
            $data = $no_rows . "," . $name  . "," . md5($password) . "," . md5($second_password) . "\n";
            $fp = fopen($file, "r+") or die("Couldn't open $file for writing!");
    
    
            $contents = fread($fp, filesize($file));
    
            if (strpos($contents, $name) === false) {
                fwrite($fp, $data) or die("Couldn't write values to file!");
                echo "<script>
            alert('Successfully ');
            window.location.href='login_admin.php';    
                    </script>";
            } else {
                echo "<script>
            alert('Check your username ');
            window.location.href='install.php';
            </script>";
            }
    
            if (strpos($contents, $second_password) === false) {
            } else {
                echo "<script>
                alert('Check your second password');
                window.location.href='install.php';
            </script>";
            }
        }
    }
    
}


function createDirectory()
{
    $create = $_POST['submit'];
    if (!file_exists("../Admin Account")) {
        mkdir("../Admin Account") . $create;
        echo "<script type ='text/javascript'>alert('Finished!');</script>";
        register();
    }
    register();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Register</title>
</head>

<body>
    <?php
    if (!isset($_POST['submit'])) {
    ?>
        <br />
        <div class="container">
            <br />
            <tr class="col-md-6" style="margin:0 auto; float:none;">
                <form method="post">
                    <h3 align="center">Admin Register Form</h3>
                    <br />
                    
                    <div class="regist" align="center">
                        <table class="regist">
                            <th class="regist-group">
                                <label>Enter Name</label>
                            <td><input type="text" name="name" placeholder="Enter Name" class="form-control" <?php echo $name; ?> /></td>
                            </th>
                        </table>
                        <table>
                            <th class="regist-group">
                                <label>Enter Password</label>
                            <td><input type="password" name="password" class="form-control" placeholder="Enter Password" /></td>
                            </th>
                        </table>
                        <table>
                            <th class="regist-group">
                                <label>Retype Password</label>
                            <td><input type="password" name="second-password" class="form-control" placeholder="Retype Password" /></td>
                            </th>
                        </table>

                    </div>
                    <div class="regist-group" align="center">
                        <input type="submit" name="submit" value="Submit" />
                    </div>

                </form>
            <?php
        } else {
            createDirectory();
        }
            ?>
            </tr>
        </div>
</body>

</html>