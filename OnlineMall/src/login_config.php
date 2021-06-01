<?php

# function read_all_users
function read_all_users()
{
    $file_name = '../../userdata.csv';
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
function get_account($email, $pass)
{
    $users = read_all_users();
    foreach ($users as $u) {
        if (($u["email"] == $email) && ($u["password"] == md5($pass))) {
            echo "Login Successfully";
            session_start();
            $uniqid = uniqid();
            if (isset($_POST['act'])) {
                // create a cookie that expires after 7 days
                setcookie('email', $email, time() + 60 * 60 * 24 * 7);
                setcookie('uniqid', $uniqid, time() + 60 * 60 * 24 * 7);
                $_SESSION['email'] = $email;
                header('location:../index.php');
            }
            return true;
        }
    }
    echo "Login Failed";
}
if (isset($_POST['act'])) {
    get_account($_POST["email"], $_POST["password"]);
}


//Set Cookie
