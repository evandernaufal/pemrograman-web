<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include_once "../koneksi.php";
            if (isset($_GET['id'])) {
                $_id = $_GET['id'];
                $strSQL = "SELECT * FROM aboutme WHERE id='$_id'";
                $runStrSQL = mysqli_query($conn,$strSQL);
                $jmlRowData = mysqli_num_rows($runStrSQL);
                if ($jmlRowData > 0) {
                    while($row = mysqli_fetch_assoc($runStrSQL)) {
                        $id = $row["id"];
                        $webtitle = $row["webtitle"];
                        $title = $row["title"];
                        $subtitle = $row["subtitle"];
                        $name = $row["name"];
                        $nickname = $row["nickname"];
                        $avatar = $row["avatar"];
                        $dob = $row["dob"];
                        $bp = $row["bp"];
                        $gender = $row["gender"];
                        $religion = $row["religion"];
                        $height = $row["height"];
                        $weight = $row["weight"];
                        $nationality = $row["nationality"];
                        $mstatus = $row["mstatus"];
        ?>
        <title>Falevan | Admin About Edit</title>
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
                    <li class="active"><a href="about-adm.php">About</a></li>
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
                    <h2>About - Admin</h2>
                    <div class="modal" id="message">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Confirmation</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6"><b>Are You Sure to Edit About Menu?</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                                    <button id="process" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form id="myform" method="post" action="update-about.php">
                        <div class="form-group">
                            <input id="id" class="form-control" type="hidden" name="id" value="<?php echo $id ?>">
                            <label>Webtitle:</label>
                            <input type="text" class="form-control" placeholder="Enter Webtitle" name="webtitle"
                            value="<?php echo $row["webtitle"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Title:</label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="title"
                            value="<?php echo $row["title"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Subtitle:</label>
                            <input type="text" class="form-control" placeholder="Enter Subtitle" name="subtitle"
                            value="<?php echo $row["subtitle"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name"
                            value="<?php echo $row["name"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Nickname:</label>
                            <input type="text" class="form-control" placeholder="Enter Nickname" name="nickname"
                            value="<?php echo $row["nickname"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Link Photo:</label>
                            <input type="text" class="form-control" placeholder="Enter Link Photo" name="avatar"
                            value="<?php echo $row["avatar"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <input type="date" class="form-control" placeholder="Enter Date of Birth" name="dob"
                            value="<?php echo $row["dob"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Birth Place:</label>
                            <input type="text" class="form-control" placeholder="Enter Birth Place" name="bp"
                            value="<?php echo $row["bp"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Gender:</label>
                            <select id="gender" name="gender" class="form-control">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Religion:</label>
                            <input type="text" class="form-control" placeholder="Enter Religion" name="religion"
                            value="<?php echo $row["religion"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Height:</label>
                            <input type="text" class="form-control" placeholder="Enter Height" name="height"
                            value="<?php echo $row["height"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Weight:</label>
                            <input type="text" class="form-control" placeholder="Enter Weight" name="weight"
                            value="<?php echo $row["weight"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Nationality:</label>
                            <input type="text" class="form-control" placeholder="Enter Nationality" name="nationality"
                            value="<?php echo $row["nationality"] ?>">
                        </div>
                        <div class="form-group">
                            <label>Marital Status:</label>
                            <select id="mstatus" name="mstatus" class="form-control">
                            <option value="Not Married">Not Married</option>
                            <option value="Engaged">Engaged</option>
                            <option value="Married">Married</option>
                            </select>
                        </div>
                        <input class="btn btn-primary" type="button" id="button" value="Submit">
                        <a href="about-adm.php" class="btn btn-danger">Cancel</a>
                    </form><br><br><br><br>
                </div>
            </div>
        </div>
        <?php   
                    }
                }
            }include "footer-adm.php";
        ?>
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#process').click(function(){
                    $('#myform').submit();
                });
                $('#button').click(function(){
                    $('#message').modal({
                        show: true
                    });
                });
            });
        </script>
    </body>
</html>