<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Falevan | Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
<body>
    <nav class="navbar navbar-inverse" style="background-color: #212529;">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" style="color:white;" href="login-adm.php">FALEVAN</a>
        </div>
    </nav>
    <div class="container"><br>
        <h2>Login Admin</h2>
        <form method="post" action="logincheck-adm.php">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="password" required>
            </div>
            <button type="submit" name="loginbutton" value="login" class="btn btn-primary">Login</button>
        </form>
    </div>
    <footer>
        <style>
            .footer {
                position:fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: #212529; 
                color: white;
                text-align: center;
            }
        </style>
        <div class="footer">
            <p>Copyright © FALEVAN</p>
        </div>
    </footer>
</body>
</html>