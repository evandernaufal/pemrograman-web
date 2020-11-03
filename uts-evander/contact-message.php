<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Falevan | Contact</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation Bar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle Navigation">    
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><b>Home</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="aboutme.php"><b>About Me</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="myeducation.php "><b>My Education</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="skills.php"><b>Skills</b></a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="creation.php"><b>Creation</b></a></li>
                        <li class="nav-item active"><a class="nav-link js-scroll-trigger" href="contact.php"><b>Contact</b></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="jumbotron-title">Contact Me</h1>   
                <h3 class="jumbotron-title">Fill Form for Contact Me</h3>    
            </div>     
        </div>
        <?php   
            $status = 2;  
            if (isset($_POST['name'])) {
                include_once "koneksi.php"; 
                $name = $_POST['name'];
                $date = $_POST['date'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $strsql = "INSERT INTO messageadmin (name, date, email, subject, message) 
                VALUES ('$name','$date','$email','$subject','$message')";
                $runSQL = mysqli_query($conn,$strsql);        
                if ($runSQL) {
                    $status = 1;
                }  
                else {
                    $status = 0;
                }       
            }            
        ?>
    <div class="container">
        <?php 
            if ($status == 1) {
        ?>    
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Thank You, Your Message Success to Submit.
        </div>
        <?php 
            }
            else if ($status == 0){
        ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Sorry, Your Message Not Success to Submit.
        </div>
        <?php 
            }
        ?>
        <!-- Content Contact Me-->
        <section class="page-section" id="contactme"><br>
            <div class="container">
            <h2>Fill Form and I will Message You Soon</h2>   
                <form action="contact-message.php" method="post" id="messageform">
                    <p><label>Your Name:</label><input class="inputform paddingform" type="text" placeholder="Name" required name="name"></p>
                    <p><label>Your Email:</label><input class="inputform paddingform" type="email" placeholder="Email" required name="email"></p>
                    <p><label>Subject:</label><input class="inputform paddingform" type="text" placeholder="Subject" required name="subject"></p>
                    <p><label>Message:</label><input class="inputform paddingform" type="text" placeholder="Message" required name="message"></p>
                    <p><label>Today Date:</label><input class="inputform paddingform" type="date" placeholder="Date" required name="date"></p>
                    <p>
                        <button id="process" class="w3-button w3-light-grey w3-padding-large" type="submit">
                            <i class="fa fa-paper-plane"></i> SEND MESSAGE
                        </button>
                    </p>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <?php
            include "footer.php";
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
            $(document).ready(function() {
                $('#process').click(function(){
                    $('#messageform').submit();
                });
            });
        </script>
    </body>
</html>