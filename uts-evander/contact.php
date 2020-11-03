<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include_once "koneksi.php";
            $strSql = "SELECT * FROM contact";
            $result = mysqli_query($conn, $strSql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
        ?>
        <title>Falevan | <?php echo $row["webtitle"] ?></title>
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
                <h1 class="jumbotron-title"><?php echo $row["title"] ?></h1>   
                <h3 class="jumbotron-title"><?php echo $row["subtitle"] ?></h3>    
            </div>     
        </div>
        <!-- Content Contact Me-->
        <section class="page-section" id="contactme"><br>
            <div class="container">
                <div class="margintext textbox">
                    <h5 class="labelbio"><i class="fas fa-envelope"></i> Email :</h5>
                    <h4><?php echo $row["email"] ?></h4>
                    <h5 class="labelbio"><i class="fas fa-mobile-alt"></i> Phone :</h5>
                    <h4><?php echo $row["phone"] ?></h4>
                    <h5 class="labelbio"><i class="fas fa-home"></i> Address :</h5>
                    <h4><?php echo $row["address"] ?></h4>
                </div><br>
                <h3 style="text-align:center;"><a href="contact-message.php";>Want Know More About Me? Click Here To Message Me!</a></h3>
        </section>
        <!-- Footer-->
        <?php
            include_once "footer.php";
                }
            } else {
              echo "Bad results";
            }
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>