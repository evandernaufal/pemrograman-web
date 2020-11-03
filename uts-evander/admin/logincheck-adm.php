<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
    session_start();
    if (isset($_POST['loginbutton'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "admin" && $password == "admin123"){
            $_SESSION["sessionUsername"] = $username;
            header("Location: account-adm.php");
        }
        else{
?>
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    "Your username or password wrong! This Page will return back on 3 secons." 
</div>
<?php
       header("refresh:3; url=login-adm.php");  }
    }
    else{
        header("Location: login-adm.php");
    } 
?>