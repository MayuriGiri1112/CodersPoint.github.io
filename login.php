<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <!--Latest compiled and minified CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <!--jQuery library-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <style>
            footer
            {
                padding:10px 0;
                background-color:#101010;
                color:#9d9d9d;
                bottom:0;
                width:100%;
            }
            body
            {
                background:url(img/bg_img1.jpg) no-repeat center center;

                padding-top:75px;

                padding-bottom:50px;

                color:#000;

                background-size:cover;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navabar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Coders Point</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="signup.php">
                                <span class="glyphicon glyphicon-user"></span>
                                Sign Up
                            </a>
                        </li>
                        <li>
                            <a href="index.php">
                                <span class="glyphicon glyphicon-home"></span>
                                Home
                            </a>
                        </li>
                </div>
            </div>
        </nav><br><br><br><br><br><br><br>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="E-mail" name="EMail" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="Password" required="true">
                                </div>
                                
                                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Log in"/>
                                
                            </form>
                        </div>
                        <div>
                            <div class="panel-footer">
                                <p>
                                    Don't have an account?
                                    <a href='signup.php'>
                                        Register
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br><br><br><br>
        
<?php 
include("footer.php");
?>
    </body>
</html>
