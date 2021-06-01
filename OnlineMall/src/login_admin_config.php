<?php

# function read_all_users
function read_all_admin()
{
    $file_name = '../../admindata.csv';
    $fp = fopen($file_name, 'r');
    $first = fgetcsv($fp);
    $userdatas = [];

    while ($row = fgetcsv($fp)) {
        $i = 0;
        $userdata = [];
        foreach ($first as $col_name) {
            $userdata[$col_name] =  $row[$i];
            $i++;
        }
        $userdatas[] = $userdata;
    }
    return $userdatas;
}

//read file user csv and get user login
function get_account($name, $pass)
{
    $admin = read_all_admin();
    foreach ($admin as $ad) {
        if (($ad["name"] == $name) && ($ad["password"] == md5($pass))) {
            echo "Login Successfully";
            session_start();
            $uniqid = uniqid();
            if (isset($_POST['act'])) {
                // create a cookie that expires after 7 days
                setcookie('name', $name, time() + 60 * 60 * 24 * 7);
                setcookie('uniqid', $uniqid, time() + 60 * 60 * 24 * 7);
                $_SESSION['name'] = $name;
                header('location:../php/CMS/cms-page.php');
            }
            return true;
        }
    }
    echo "Login Failed";
}
if (isset($_POST['act'])) {
    get_account($_POST["name"], $_POST["password"]);
}


//Set Cookie
