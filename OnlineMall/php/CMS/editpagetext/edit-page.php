<?php
    /* Cookie Privacy */
    if (file_exists("./text/cookies_policy.txt")) {
        $file1 = "./text/cookies_policy.txt";
        $current1 = file_get_contents($file1);
    } else {
        $myfile1 = fopen("./text/cookies_policy.txt", "w");
        header ("Refresh:0");
    }


/* Term of Service */

    if (file_exists("./text/termofservice.txt")) {
        $file2 = "./text/termofservice.txt";
        $current2 = file_get_contents($file2);
    } else {
        $myfile2 = fopen("./text/termofservice.txt", "w");
        header ("Refresh:0");
    }


/* Return & Refund Policy */

    if (file_exists("./text/return&refundpolicy.txt")) {
        $file3 = "./text/return&refundpolicy.txt";
        $current3 = file_get_contents($file3);
    } else {
        $myfile3 = fopen("./text/return&refundpolicy.txt", "w");
        header ("Refresh:0");
    }
/* Privacy Policy */

    if (file_exists("./text/privacy_policy.txt")) {
        $file4 = "./text/privacy_policy.txt";
        $current4 = file_get_contents($file4);
    } else {
        $myfile4 = fopen("./text/privacy_policy.txt", "w");
        header ("Refresh:0");
    }
?>

<a href="../cms-page.php" style="text-decoration: none; color: red; font-size: 20; background-color: yellow; margin: 50px"><---Go-Back---</a>
<form action="./process.php" method="POST" style="margin-top: 100px">
    <div class="title">Cookies Policy</div>
    <textarea name="comment1" cols="200" rows="20" style="resize: none;" autofocus>
        <?php //Output text captured in line 5
        echo $current1;
        ?>
    </textarea>

    <div class="title">Term of Service</div>
    <textarea name="comment2" cols="200" rows="20" style="resize: none;" autofocus>
        <?php //Output text captured in line 5
        echo $current2;
        ?>
    </textarea>

    <div class="title">Return & Pefund Policy</div>
    <textarea name="comment3" cols="200" rows="20" style="resize: none;" autofocus>
        <?php //Output text captured in line 5
        echo $current3;
        ?>
    </textarea>

    <div class="title">Privacy Policy</div>
    <textarea name="comment4" cols="200" rows="20" style="resize: none;" autofocus>
        <?php //Output text captured in line 5
        echo $current4;
        ?>
    </textarea>
    <input type="submit" style="margin-top: 50px">
</form>