<?php

// function for login

$error = '';
$name = '';
$email = '';
$password = md5('');
$phone = '';
$message = '';

function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
  }
 }
 if(empty($_POST["email"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
 }
 else
 {
  $email = clean_text($_POST["email"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Invalid email format</label></p>';
  }
 }
 $phone = clean_text($_POST["phone"]);
 if (!preg_match("/^\d([-, ]?[0-9]){8,10}$/",$phone))
 {
  $error .= '<p><label class="text-danger">Please Enter your 10 phone number </label></p>';
 }
 else
 {
  $phone = clean_text($_POST["phone"]);
 }

 if(empty($_POST["password"]))
 {
  $error .= '<p><label class="text-danger">Please Enter your password number</label></p>';
 }
 else
 {
  $password = clean_text($_POST["password"]);
 }
 
 if(empty($_POST["address"]))
 {
  $error .= '<p><label class="text-danger">address is required</label></p>';
 }
 else
 {
  $address = clean_text($_POST["address"]);
 }

 if($error == '')
 {
  $file_open = fopen("../../userdata.csv", "a");
  $no_rows = count(file("../../userdata.csv"));
  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
//   put in to csv file
  $form_data = array(
   'sr_no'  => $no_rows,
   'name'  => $name,
   'email'  => $email,
   'password' => $password,
   'phone' => $phone,
   'address' => $address
  );

  $file = '../../userdata.csv';
  $data = $no_rows . "," . $name . "," . $email . "," . md5($password) . "," . $phone . "," . $address . "\n";
  $fp = fopen($file, "r+") or die("Couldn't open $file for writing!");

 
    $contents = fread($fp, filesize($file)) ;

    if (strpos($contents, $email) === false) {
    fwrite($fp, $data) or die("Couldn't write values to file!");
    echo"<script>
        alert('zo ');
        window.location.href='login.php';;
    </script>";
    }
    else {
        echo"<script>
        alert('check your email ');
        window.location.href='registerscreen.php';;
    </script>";
    }
    

    if (strpos($contents, $phone) === false) {
        
        }
        else {
            echo"<script>
            alert('check your  phone');
            window.location.href='registerscreen.php';;
        </script>";
        }
    
 }
}

?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Register Form -->
    <title> Registration Form </title>
    <!-- Css Link-->
    <link rel="stylesheet" href="store/tools/register.css">
    <!-- FontAwesome Icon. Link: https://fontawesome.com. -->
    <script src="https://kit.fontawesome.com/da0f099ad2.js" crossorigin="anonymous"></script>
 </head>
 <body>
  <?php include '../php/mall-header.php'; ?>
  
  <br />
  <main>
       <div class="registation-form">
            <div class="main">
                <div class="regform">
                     <h1>Registration Form</h1>
                </div>
                <div class="inside">
                    <form  class="registeration-info" method="POST">
                    <div class="info">
                       
                        <?php echo $error; ?>

                        <h2 class="name">Enter Name</h2> 
                        <div class="form-group">                                                  
                            <td><input class="email form-control" type="text" name="name" placeholder="Enter Name" class="form-control" value="<?php echo $name; ?>" /></td>
                        </div>

                        <h2 class="name">Enter Email</h2> 
                        <div class="form-group">                       
                            <td><input class="email form-control" type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Email must follow this order: characters@characters.domain" placeholder="Enter Email" value="" /></td>    
                        </div>

                        <h2 class="name">Enter Phone</h2>
                        <div class="form-group">                        
                            <td><input class="email form-control" type="number" name="phone" class="form-control" title="" placeholder="Enter Phone Number" value="<?php echo $phone; ?>" /></td>       
                        </div>

                        <h2 class="name">Enter Password</h2>
                        <div class="form-group">                                       
                            <td><input class="email form-control" type="password" name="password" class="form-control" placeholder="Enter Password" value="" /></td>
                        </div>

                        <h2 class="name">Enter Address</h2>
                        <div class="form-group">                                                    
                            <td><textarea class="email form-control" name="address" class="form-control" placeholder="Enter Message"></textarea></td>       
                        </div>

                        <h2 id="account">By continuing, you agree to Online Mall's <a href="./privacy-policy.html" class="link">Privacy Policy</a>.</h2>

                        <button class="buttons reset" type="reset" value="Reset"><p>Reset</p></button>

                        <input class="buttons register" type="submit" name="submit" class="btn btn-info" value="Submit" />

            



                    </div>

                <div class="signin_link">
                    Already have an account? <a href="login.html">Login</a>
                </div>
                    </form>
                </div>     
            </div>
        </div>
    </main>
 

    <br>
    <br>
    <br>
    <?php include '../php/mall-footer.php'; ?>
</body>
</html>