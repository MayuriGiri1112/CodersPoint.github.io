<?php 
  session_start();

  if (!isset($_SESSION['Name'])) {
  	$_SESSION['msg'] = "You must log in first";
  	//include('server.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['Name']);
	
  }
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
        <script type='text/javascript' src='assets/jquery.js'></script>	 
		<link rel="stylesheet" id="open-sans-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.4.2" type="text/css" media="all">
		<link rel="stylesheet" id="style-css" href="assets/style.css" type="text/css" media="all">
        <script>src="vendor/jquery-2.2.4.min.js" </script>
        <script>src="vendor/modernizr-2.8.3.min.js" </script>
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
        <title>Settings</title>
        <!-- below is code that prevents back button -->
    <?php
    if(!isset($_SESSION['Name'])){
    echo"<script type='text/javascript'>
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>";}
?>
    </head>
    <body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
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
                            <a href="#"><span class="glyphicon glyphicon-user"></span> <?php if(isset($_SESSION['Name'])){echo ($_SESSION['Name']);} else{echo "Guest";}?></a>
                        </li>
                        <li>
                            <a href="courses.php">
                                <span class="glyphicon glyphicon-book"></span>
                                Courses
                            </a>
                        </li>
                        <?php if(isset($_SESSION['Name'])){
                       echo" <li>

                            <a href='logout.php'>

                                <span class='glyphicon glyphicon-log-in'></span>

                                Logout

                            </a>

                        </li>";
                    }
                    else{
                    echo"<li>

                    <a href='login.php'>

                        <span class='glyphicon glyphicon-log-in'></span>

                        Login

                    </a>

                </li>";}
                        ?>
                    </ul>    
                </div>
            </div>
        </nav><br><br><br><br>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                    <h2>Welcome!</h2>
                    <h2>Change Password</h2></div>
                    <div class="panel-body">
                    <form method="post">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Old Password" name="old-password" required="true">
                        </div><br>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password" name="new-password" required="true">
                        </div><br>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="confirm-password" required="true">
                        </div><br>
                        <button type="submit" name="submit" class="btn btn-primary">
                            Change
                        </button>
                    </form>
                    </div></div>
                </div>
            </div>
        </div><br>
<?php
include("footer.php");
?>
    </body>
</html>

<?php
    
    if(isset($_POST['submit']))
    {
        $oldpass=$_POST['old-password'];
        $newpassword=$_POST['new-password'];
        $confirmpassword=$_POST['confirm-password'];
        
        $con=mysqli_connect("localhost","root","","clone1");
        $sql=mysqli_query($con,"SELECT * FROM users WHERE Password = '$oldpass'");

        $data = mysqli_fetch_assoc($sql);
        $pass = $data['Password'];
        $mail = $data['EMail'];
        
        if($oldpass == $pass) 
        {
            if($newpassword == $confirmpassword)
            {
                $update_query = "UPDATE users SET Password='$confirmpassword' WHERE EMail='$mail'"; 
                $update = mysqli_query($con, $update_query);
                if($update)
                {
                    echo "<script>alert('Successfully Changed Password!');</script>";
                }
                else
                {
                    echo "<script>alert('Error while changing password!');</script>";
                }
            }
            else
            {
                echo "<script>alert('NewPassword and ConfirmPassword are different! Please Enter same password!');</script>";
            }
        }
        else
        {
            echo "<script>alert('Old Password is Incorrect!');</script>";
        }
    }
  
?>
