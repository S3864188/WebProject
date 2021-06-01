<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title -->
    <title>Contact Us</title>
    <!-- Css Link-->
    <link rel="stylesheet" href="../css/contact_us.css">
    <!-- Cookie Section CSS -->
    <link rel="stylesheet" href="../css/cookie.css"> 
    <!-- FontAwesome Icon. Link: https://fontawesome.com. -->
    <script src="https://kit.fontawesome.com/da0f099ad2.js" crossorigin="anonymous"></script>
    <!-- Stackpath FontAwesome Icon. Link: https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <!-- Cookies -->
    <?php include "../php/cookie-web.php" ?>

    <!-- Header -->
    <?php include "../php/mall-header.php" ?>

    <!-- Main -->
    <!-- Main screen Contact-->
    <main>
        <div class="contact_wrapper">
            <div class="contact-container">
                <!-- Title -->
                <h2>Contact Us</h2>
                <form action="#" method="POST" id="form" class="form">
                    <!-- Input Full name of user -->
                    <div class="input-group">
                        <div class="input-box">
                            <label for="usename">First Name</label>
                            <input type="text" class="input" placeholder="florinpop17" id="firstname">
                            <i class="fa fa-user"></i>
                            <small>Error message</small>
                        </div>
                        <div class="input-box">
                            <label for="usename"> Last name</label>
                            <input type="text" class="input" id="lastname">
                            <i class="fa fa-user"></i>
                            <small>Error message</small>
                        </div>
                    </div>

                    <!-- Email and Phone number -->
                    <div class="input-group">
                        <div class="input-box">
                            <label for="usename">Email Address</label>
                            <input class="input" id="email">
                            <i class="fa fa-envelope"></i>
                            <small>Error message</small>
                        </div>
                        <div class="input-box">
                            <label for="usename">Mobile No</label>
                            <input type="tel" class="input" id="phone">
                            <i class="fa fa-phone"></i>
                            <small>Error message</small>
                        </div>
                    </div>

                    <!-- Contact days  -->
                    <div class="contact">
                        <div class="">
                            <i class="fa fa-calendar "> </i>
                            <label for="usename">Contact days: </label>
                            <div class="checkbox">
                                <input type="checkbox" name="day1" value="Monday" id="Check1" onclick="selectOnlyThis(this.id)">
                                <label for="day1"> Monday</label><br>
                                <input type="checkbox" name="day2" value="Tuesday" id="Check2" onclick="selectOnlyThis(this.id)">
                                <label for="day2"> Tuesday</label><br>
                                <input type="checkbox" name="day3" value="Wednesday" id="Check3" onclick="selectOnlyThis(this.id)">
                                <label for="day3"> Wednesday</label><br>
                                <input type="checkbox" name="day4" value="Thursday" id="Check4" onclick="selectOnlyThis(this.id)">
                                <label for="day4"> Thursday</label><br>
                                <input type="checkbox" name="day5" value="Friday" id="Check5" onclick="selectOnlyThis(this.id)">
                                <label for="day5"> 	Friday</label><br>
                                <input type="checkbox" name="day6" value="Saturday" id="Check6" onclick="selectOnlyThis(this.id)">
                                <label for="day6"> 	Saturday</label><br>
                                <input type="checkbox" name="day7" value="Sunday" id="Check7" onclick="selectOnlyThis(this.id)">
                                <label for="day7"> 	Sunday</label><br>
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box options">
                            <label for="usename">Preferred Contact Method</label>
                            <div class="options">
                                <label class="container">Email <i class="fas fa-envelope"></i>
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Phone <i class="fas fa-phone"></i>
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="input-box options">
                            <label for="usename">Reason for reaching out</label>
                            <select class="reason" name="reason">
                                <option selected="selected">--None--</option>
                                <option value="department_stores">Department Stores</option>
                                <option value="grocery_stores">Grocery Stores</option>
                                <option value="restaurants">Restaurants</option>
                                <option value="clothing_stores">Clothing Stores</option>
                            </select>
                        </div>
                    </div>

                    <!-- Message  -->
                    <div class="input-group ">
                        <div class="input-box" >
                            <label for="usename">Comments or Message</label>
                            <textarea cols="46 " rows="3 " placeholder="Write Your Message here ! " class="input" id="comment"></textarea>
                            <i class="fa fa-comment comm"></i>
                            <small>Error message</small>
                        </div>
                    </div>
                    <!-- Submit button -->
                    <div class="button-group ">
                        <button class="buttons clear" type="reset" value="Reset"><p>Clear</p></button>
                        
                        <button class="buttons send" type="submit "><i class="fa fa-paper-plane "></i> Send Message</button>
                        
                    </div>
                </form>
            </div>
        </div>
        <script src="../js/contact-us-form.js"></script>
    </main>


    <!-- Footer -->
    <?php include '../php/mall-footer.php'?>



</html>


</body>

</html>