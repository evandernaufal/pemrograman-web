<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include_once "../koneksi.php";
            if (isset($_GET['id'])) {
                $_id = $_GET['id'];
                $strSQL = "SELECT * FROM skills WHERE id='$_id'";
                $runStrSQL = mysqli_query($conn,$strSQL);
                $jmlRowData = mysqli_num_rows($runStrSQL);
                if ($jmlRowData > 0) {
                    while($row = mysqli_fetch_assoc($runStrSQL)) {
                        $id = $row["id"];
                        $webtitle = $row["webtitle"];
                        $title = $row["title"];
                        $subtitle = $row["subtitle"];
                        $widthwd = $row["widthwd"];
                        $widthpp = $row["widthpp"];
                        $widthpc = $row["widthpc"];
                        $widthaa = $row["widthaa"];
                        $widthse = $row["widthse"];
        ?>
        <title>Falevan | Admin Skills</title>
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
                    <li><a href="myeducation-adm.php">My Education</a></li>
                    <li class="active"><a href="skills-adm.php">Skills</a></li>
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
                    <h2>Skills - Admin</h2>
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
                                            <div class="col-6"><b>Are You Sure to Edit Skills Menu?</b></div>
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
                    <form id="myform" method="post" action="update-skills.php">
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
                            <label>Web Design Skill:</label>
                            <input type="range" class="form-range" name="widthwd"
                            value="<?php echo $row["widthwd"] ?>"><p>Range : 0 - 100</P>
                        </div>
                        <div class="form-group">
                            <label>Programming Python Skill:</label>
                            <input type="range" class="form-range" name="widthpp"
                            value="<?php echo $row["widthpp"] ?>"><p>Range : 0 - 100</P>
                        </div>
                        <div class="form-group">
                            <label>Programming C++ Skill:</label>
                            <input type="range" class="form-range" name="widthpc"
                            value="<?php echo $row["widthpc"] ?>"><p>Range : 0 - 100</P>
                        </div> 
                        <div class="form-group">
                            <label>Analysyt Skill:</label>
                            <input type="range" class="form-range" name="widthaa"
                            value="<?php echo $row["widthaa"] ?>"><p>Range : 0 - 100</P>
                        </div>
                        <div class="form-group">
                            <label>Speak English Skill:</label>
                            <input type="range" class="form-range" name="widthse"
                            value="<?php echo $row["widthse"] ?>"><p>Range : 0 - 100</P>
                        </div>
                        <input class="btn btn-primary" type="button" id="button" value="Submit">
                        <a href="skills-adm.php" class="btn btn-danger">Cancel</a>
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