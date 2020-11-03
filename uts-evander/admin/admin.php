<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include_once "../koneksi.php";
            $strSql = "SELECT * FROM home";
            $result = mysqli_query($conn, $strSql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
        ?>
        <title>Falevan | Admin Home</title>
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
                    <li class="active"><a href="admin.php">Home</a></li>
                    <li><a href="about-adm.php">About</a></li>
                    <li><a href="myeducation-adm.php">My Education</a></li>
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
                    <h2>Home - Admin</h2>
                    <form id="myform" method="post" action="admin-edit.php">
                        <div class="form-group">
                            <label>Webtitle:</label>
                            <input type="text" class="form-control" placeholder="-" name="webtitle"
                            value="<?php echo $row["webtitle"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Link Home Background:</label>
                            <input type="text" class="form-control" placeholder="-" name="bghome"
                            value="<?php echo $row["bghome"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Subtitle:</label>
                            <input type="text" class="form-control" placeholder="-" name="subtitle"
                            value="<?php echo $row["subtitle"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="-" name="name"
                            value="<?php echo $row["name"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Link Facebook:</label>
                            <input type="text" class="form-control" placeholder="-" name="linkfb"
                            value="<?php echo $row["linkfb"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Link Instagram:</label>
                            <input type="text" class="form-control" placeholder="-" name="linkig"
                            value="<?php echo $row["linkig"] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Link Github:</label>
                            <input type="text" class="form-control" placeholder="-" name="linkgh"
                            value="<?php echo $row["linkgh"] ?>" readonly>
                        </div>
                        <a href="admin-edit.php?id=<?php echo $row["id"] ?>" class="btn btn-info">Edit Data on Home Menu</a>                    
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