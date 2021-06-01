<?php
    /* Cookie Privacy */
    //Capture comment from form using POST
    $comment1 = $_POST["comment1"];
    //Get the file
    $file1 = "./text/cookies_policy.txt";
    //Write the new text
    file_put_contents($file1, $comment1);
    //Send user back to index page to view changes
    header('Location: http://localhost/OnlineMall/php/CMS/editpagetext/edit-page.php');

    /* Term of Service */
    $comment2 = $_POST["comment2"];
    $file2 = "./text/termofservice.txt";
    file_put_contents($file2, $comment2);
    header('Location: http://localhost/OnlineMall/php/CMS/editpagetext/edit-page.php');

    /* Return & Refund Policy */
    $comment3 = $_POST["comment3"];
    $file3 = "./text/return&refundpolicy.txt";
    file_put_contents($file3, $comment3);
    header('Location: http://localhost/OnlineMall/php/CMS/editpagetext/edit-page.php');

    /* Privacy Policy */
    $comment4 = $_POST["comment4"];
    $file4 = "./text/privacy_policy.txt";
    file_put_contents($file4, $comment4);
    header('Location: http://localhost/OnlineMall/php/CMS/editpagetext/edit-page.php');