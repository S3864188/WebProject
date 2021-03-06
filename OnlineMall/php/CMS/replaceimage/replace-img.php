<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About Us Page</title>
    <link rel="stylesheet" href="../../../css/about-us.css">
</head>
<body>
    
    
    <main>
        <a href="../cms-page.php" style="text-decoration: none; color: red; font-size: 20; background-color: yellow; margin: 100px 50px"><---Go-Back---</a>
        <div class="team-board">
            <h1>Board of Team Members</h1>
            <?php
            if (isset($_POST['act'])) {
                if ($_FILES["group_image"]["error"] == UPLOAD_ERR_OK) {
                    // store new image as avatar.png (overwrite the current file)
                    $new_location = '../../../images/creator-img/group.jpg';    
                    move_uploaded_file($_FILES['group_image']['tmp_name'], $new_location);
                    echo '<h2>Done</h2>';
                }
            }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="team-image">
                    <img src="../../../images/creator-img/group.jpg" alt="group-members">
                </div>
                <input type="file" name="group_image">
                <input type="submit" name="act" value="Upload">
                <p>Our team members are newbies in developing web application. However, 
                    hard-working, meticulosity and carefulness are the core quality that we have got here.</p>
                </p>
            </form>
        </div>

        <div class="main">
            <h1>Meet Our Team</h1>
            <section class="about-container">
                <div class="first-creator">
                    <?php
                    if (isset($_POST['act1'])) {
                        if ($_FILES["creator1_image"]["error"] == UPLOAD_ERR_OK) {
                            // store new image as avatar.png (overwrite the current file)
                            $new_location1 = '../../../images/creator-img/DucAnh.jpg';    
                            move_uploaded_file($_FILES['creator1_image']['tmp_name'], $new_location1);
                        }
                    }
                    ?>
                    <form action="replace-img.php" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="bg-img">
                                <img src="../../../images/bg.jpg" alt="background">
                            </div>

                            <div class="picture">
                                <img src="../../../images/creator-img/DucAnh.jpg" alt="creator-1" onclick="togglePopup1()">
                            </div>

                            <div class="info">
                                <h3>Le Duc Anh</h3>
                                <h4>(s3758780)</h4>
                                <span><i class="fas fa-code"></i>Web Designer</span>
                                <div class="icons">
                                    <a href=""><i class="fab fa-facebook"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="container">
                                <div class="close-btn" onclick="togglePopup1()">&times</div>
                                            
                                <div class="card-1">
                                    <div class="img-box">
                                        <img src="../../../images/creator-img/DucAnh.jpg" alt="creator-1">
                                        <input type="file" name="creator1_image">
                                        <input type="submit" name="act1" value="Upload">
                                    </div>
                                    
                                    <div class="content">
                                        <h2>------------Web Creator------------</h2>
                                        <p>Full name: Le DucAnh <br>
                                            Student ID: s3758780 <br>
                                            Gender: Male	<br>
                                            Date of birth: 12/02/2000 <br> 
                                            Major and minor: Information of Technology- Cloud Technologies Network <br>
                                            Interested: Cloud technology, Data analyze, Web development <br>
                                            Role: Web developer <br>
                                            Something about myself: I am an active and dynamic person who love to make friend with other people, I also love to join school clubs and extracurricular activities. In my free time, I love to hang out with my friends and watching movies. In this project, I play a role as one of Full-stacks Web developer and have joined from front-end tasks to back-ends. Even that I had a web project in Building IT Project before, this project has given for me a lot of experience in web project and it also help me improve a lot of team working skills.  
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Second Creator -->
                <div class="second-creator">
                <?php
                    if (isset($_POST['act2'])) {
                        if ($_FILES["creator2_image"]["error"] == UPLOAD_ERR_OK) {
                            // store new image as avatar.png (overwrite the current file)
                            $new_location2 = '../../../images/creator-img/Hoang.jpg';    
                            move_uploaded_file($_FILES['creator2_image']['tmp_name'], $new_location2);
                        }
                    }
                    ?>
                    <form action="replace-img.php" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="bg-img">
                            <img src="../../../images/bg.jpg" alt="background">
                        </div>

                        <div class="picture">
                            <img src="../../../images/creator-img/Hoang.jpg" alt="creator-2" onclick="togglePopup2()">
                        </div>

                        <div class="info">
                            <h3>Bui Hoang</h3>
                            <h4>(s3818202)</h4>
                            <span><i class="fas fa-code"></i>Web Designer</span>
                            <div class="icons">
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="popup" id="popup-2">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="close-btn" onclick="togglePopup2()">&times</div>
                                        
                            <div class="card-1">
                                <div class="img-box">
                                    <img src="../../../images/creator-img/Hoang.jpg" alt="creator-2">
                                    <input type="file" name="creator2_image">
                                    <input type="submit" name="act2" value="Upload">
                                </div>
                                <div class="content">
                                    <h2>------------Web Creator------------</h2>
                                    <p>Full name: Bui Hoang	<br>
                                        Student ID: s3818202 <br>
                                        Gender: Male <br>
                                        Date of birth: 04/01/199x <br>
                                        Major and minor: Information of Technology ??? Mobile and Web Development <br>
                                        Interested:  Mobile app development, Artificial Intelligence, Web development <br>
                                        Role: Web developer <br>
                                        Something about myself: I am kind of dynamic person and I like to spend my free time to participate sport activities specially football. I have distributed as a Full-stacks Web developer. This is my first time I have chance to work in web project. This project give to me a lot of wonderful knowledge and experience of Web developing. I also learned valuable experience of team working.
                                    </p>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- Third Creator -->
                <div class="third-creator">
                <?php
                    if (isset($_POST['act3'])) {
                        if ($_FILES["creator3_image"]["error"] == UPLOAD_ERR_OK) {
                            // store new image as avatar.png (overwrite the current file)
                            $new_location3 = '../../../images/creator-img/Loi.jpg';    
                            move_uploaded_file($_FILES['creator3_image']['tmp_name'], $new_location3);
                        }
                    }
                    ?>
                    <form action="replace-img.php" method="POST" enctype="multipart/form-data">
                    <div class="card">
                    
                        <div class="bg-img">
                            <img src="../../../images/bg.jpg" alt="background">
                        </div>

                        <div class="picture">
                            <img src="../../../images/creator-img/Loi.jpg" alt="creator-3" onclick="togglePopup3()">
                        </div>

                        <div class="info">
                            <h3>Phan Thanh Loi</h3>
                            <h4>(s3864188)</h4>
                            <span><i class="fas fa-code"></i>Web Designer</span>
                            <div class="icons">
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="popup" id="popup-3">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="close-btn" onclick="togglePopup3()">&times</div>
                                        
                            <div class="card-1">
                                <div class="img-box">
                                    <img src="../../../images/creator-img/Loi.jpg" alt="creator-3">
                                    <input type="file" name="creator3_image">
                                    <input type="submit" name="act3" value="Upload">
                                </div>
                                <div class="content">
                                    <h2>------------Web Creator------------</h2>
                                    <p>
                                        - Full name: Phan Thanh Loi <br>
                                        - Student ID: s3864188 <br>
                                        - Gender: Male <br>
                                        - Date of birth: 22/11/2001 <br>
                                        - Major and minor: Information of Technology ??? Mobile and Web Development <br>
                                        - Interested:  Mobile app development, Data analyze, Web development <br>
                                        - Role: Web developer <br>
                                        - Something about myself: As every boy in my age, I love to spend my free time to play video games, watch movies and read novels. I step in this project as a team leader and Full-stack Web developer. Instead of technical knowledge that I learned during the project, I also learned leader skills specially planning and distributed skills. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Forth Creator -->
                <div class="forth-creator">
                <?php
                    if (isset($_POST['act4'])) {
                        if ($_FILES["creator4_image"]["error"] == UPLOAD_ERR_OK) {
                            // store new image as avatar.png (overwrite the current file)
                            $new_location4 = '../../../images/creator-img/Long.jpg';    
                            move_uploaded_file($_FILES['creator4_image']['tmp_name'], $new_location4);
                        }
                    }
                    ?>
                    <form action="replace-img.php" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="bg-img">
                            <img src="../../../images/bg.jpg" alt="background">
                        </div>

                        <div class="picture">
                            <img src="../../../images/creator-img/Long.jpg" alt="creator-4" onclick="togglePopup4()">
                        </div>

                        <div class="info">
                            <h3>Truong Thanh Long</h3>
                            <h4>(s3818775)</h4>
                            <span><i class="fas fa-code"></i>Web Designer</span>
                            <div class="icons">
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="popup" id="popup-4">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="close-btn" onclick="togglePopup4()">&times</div>
                                        
                            <div class="card-1">
                                <div class="img-box">
                                    <img src="../../../images/creator-img/Long.jpg" alt="creator-4">
                                    <input type="file" name="creator4_image">
                                    <input type="submit" name="act4" value="Upload">
                                </div>
                                <div class="content">
                                    <h2>------------Web Creator------------</h2>
                                    <p>
                                        - Full name: Truong Thanh Long	<br>
                                        - Student ID: s3818775 <br>
                                        - Gender: Male <br>
                                        - Date of birth: 05/01/199x <br>
                                        - Major and minor: Information of Technology ??? Data Analyze <br>
                                        - Interested: Data analyze, Artificial Intelligence, Web development <br>
                                        - Role: Web developer <br>
                                        - Something about myself: I am a night owl person so I love to do all my activities on midnight.  I love to play video games and listen music when I was free. Although that this project was my second web project, step in this project as a Full-stacks Web developer help me improve a lot of technological skills. Because I am a night owl person, I do all my tasks on the midnight. This habit sometime annoyed my teammate while we have different working time.                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <script src="../../../js/popupfromimage.js"></script>
        <div class="office-map">
            <h1>Our Team Office</h1>
            <div class="map-nav-wrapper">
                <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4695.547861456468!2d106.69158261112526!3d10.729624478450301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fbea5fe3db1%3A0xfae94aca5709003f!2sRMIT%20University!5e0!3m2!1svi!2s!4v1618243765863!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </main>

</body>
</html>