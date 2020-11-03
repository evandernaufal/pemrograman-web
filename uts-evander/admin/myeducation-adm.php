<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include_once "../koneksi.php";
            $strSql = "SELECT * FROM myeducation";
            $result = mysqli_query($conn, $strSql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
        ?>
        <title>Falevan | Admin My Education</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../images/favicon.ico" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse" style="background-color: #212529;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" style="color:white;" href="admin.php">FALEVAN</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="admin.php">Home</a></li>
                    <li><a href="about-adm.php">About</a></li>
                    <li class="active"><a href="myeducation-adm.php">My Education</a></li>
                    <li><a href="skills-adm.php">Skills</a></li>
                    <li><a href="creation-adm.php">Creation</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contact-adm.php">My Contact</a></li>
                            <li><a href="message-adm.php">Message</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="account-adm.php"><span class="glyphicon glyphicon-user"></span> Account</a></li>
                    <li><a href="logout-adm.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>My Education - Admin My Education</h2>
                    <form id="myform" method="post" action="myeducation-adm-edit.php">
                        <div class="form-group">
                            <label>Webtitle:</label>
                            <input type="text" class="form-control" placeholder="-" name="webtitle"
                            value="<?php echo $row["webtitle"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" placeholder="-" name="title"
                            value="<?php echo $row["title"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Subtitle:</label>
                            <input type="text" class="form-control" placeholder="-" name="subtitle"
                            value="<?php echo $row["subtitle"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Years on Kindergarten:</label>
                            <input type="text" class="form-control" placeholder="-" name="yeartk"
                            value="<?php echo $row["yeartk"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Name of Kindergarten:</label>
                            <input type="text" class="form-control" placeholder="-" name="namatk"
                            value="<?php echo $row["namatk"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Description about Kindergarten:</label>
                            <input type="text" class="form-control" placeholder="-" name="dectk"
                            value="<?php echo $row["dectk"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Years on Elementary School:</label>
                            <input type="text" class="form-control" placeholder="-" name="yearsd"
                            value="<?php echo $row["yearsd"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Name of Elementary School:</label>
                            <input type="text" class="form-control" placeholder="-" name="namasd"
                            value="<?php echo $row["namasd"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Description about Elementary School:</label>
                            <input type="text" class="form-control" placeholder="-" name="decsd"
                            value="<?php echo $row["decsd"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Years on Junior High School:</label>
                            <input type="text" class="form-control" placeholder="-" name="yearsmp"
                            value="<?php echo $row["yearsmp"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Name of Junior High School:</label>
                            <input type="text" class="form-control" placeholder="-" name="namasmp"
                            value="<?php echo $row["namasmp"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Description about Junior High School:</label>
                            <input type="text" class="form-control" placeholder="-" name="decsmp"
                            value="<?php echo $row["decsmp"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Years on Highschool:</label>
                            <input type="text" class="form-control" placeholder="-" name="yearsma"
                            value="<?php echo $row["yearsma"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Name of Highschool:</label>
                            <input type="text" class="form-control" placeholder="-" name="namasma"
                            value="<?php echo $row["namasma"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Description about Highschool:</label>
                            <input type="text" class="form-control" placeholder="-" name="decsma"
                            value="<?php echo $row["decsma"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Years on University:</label>
                            <input type="text" class="form-control" placeholder="-" name="yearpt"
                            value="<?php echo $row["yearpt"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Name of University:</label>
                            <input type="text" class="form-control" placeholder="-" name="namapt"
                            value="<?php echo $row["namapt"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Description about University:</label>
                            <input type="text" class="form-control" placeholder="-" name="decpt"
                            value="<?php echo $row["decpt"] ?>" readonly>
                        </div>
                        <a href="myeducation-adm-edit.php?id=<?php echo $row["id"] ?>" class="btn btn-info">Edit Data on My Education Menu</a>                    
                    </form><br><br><br><br>
                </div>
            </div>
        </div>
        <?php   
                }
            } else {
              echo "Bad results";
            }include "footer-adm.php";
        ?>
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>