<?php 
  session_start(); 
?>
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
        
        <style>

            #banner_image

            {

                background:url(img/bg_img2.jpg) no-repeat center center;

                padding-top:75px;

                padding-bottom:50px;

                text-align:center;

                color:#f8f8f8;

                background-size:cover;

            }

            #banner_content

            {

                position:relative;

                padding-top:6%;

                padding-bottom:6%;

                margin-top:12%;

                margin-bottom:12%;

                background-color:rgba(0,0,0,0.7);

                max-width:660px;

            }

            .btn

            {

                border:1px solid white;

                padding:10px 30px;

                color:#fff;

                text-decoration:none;

                margin-right:5px;

                font-size:13px;

                margin-top:30px;

                margin-left:30px;

            }


            .container1

            {

                width:90%;

                margin:auto;

                overflow:hidden;

                padding-top:40px;

            }


            footer

            {

                padding:10px 0;

                background-color:#101010;

                color:#9d9d9d;

                bottom:0;

                width:100%;

            }

        </style>

        <title>Coders Point</title>

    </head>
<body>

<div class="content">
  	<!-- notification message -->
  	  	</h3>
      </div>

    <!-- logged in user information -->
   
</div>

             <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navabar-toggle" data-toggle="collapse" data-target="#myNavbar">
 
                       <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand" href="#">Coders Point</a>

                </div>

                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav navbar-right">

                        <li>

                            <a href="reference.php">

                                <span class="glyphicon glyphicon-tasks"></span>

                                Reference

                            </a>

                        </li>

                        <li>

                            <a href="signup.php">

                                <span class="glyphicon glyphicon-user"></span>

                                Sign Up

                            </a>

                        </li>

                        <li>

                            <a href="login.php">

                                <span class="glyphicon glyphicon-log-in"></span>

                                Login

                            </a>

                        </li>

                    </ul>
    
                </div>

            </div>

        </nav>

        
        <div id="banner_image">

            <div class="container">

                <center>

                    <div id="banner_content">

                        <h2>We provides you a number of computer languages</h2>

                        <p>You will learn coding/programming here</p>

                        <a href="login.php">

                            <button type="submit" name="submit" class="btn btn-danger btn-lg active">Start Learning</button>

                        </a>

                    </div>

                </center>

            </div>

        </div>

        

<?php 
include("footer.php");
?>

    </body>

</html>