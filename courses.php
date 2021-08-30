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
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Courses</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">

        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script type='text/javascript' src='assets/jquery.js'></script>	 
		<link rel="stylesheet" id="open-sans-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.4.2" type="text/css" media="all">
		<link rel="stylesheet" id="style-css" href="assets/style.css" type="text/css" media="all">
        
                
                <script>src="vendor/jquery-2.2.4.min.js" </script>
                <script>src="vendor/modernizr-2.8.3.min.js" </script>
                
        <style type="text/css">
            body

            {

                background:url(img/bg_img3.jpg) no-repeat center center;

                padding-top:75px;

                padding-bottom:50px;

                color:#000;

                background-size:cover;

            }
        </style>
                
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
            <div class="content">
        
        <!-- logged in user information -->
            </div>
            
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
                            
                            <a href="#"><span class="glyphicon glyphicon-user"></span>    <?php if(isset($_SESSION['Name'])){echo ($_SESSION['Name']);} else{echo "Guest";}?></a>
                            
                        </li>
                        
                        <li>

                            <a href="videos.php">

                                <span class="glyphicon glyphicon-facetime-video"></span>

                                Videos

                            </a>

                        </li>
                        
                        <li>

                            <a href="upload.php">

                                <span class="glyphicon glyphicon-upload"></span>

                                Upload

                            </a>

                        </li>
                        
                        <li>

                            <a href="wishlist.php">

                                <span class="glyphicon glyphicon-heart"></span>

                                Wishlist

                            </a>

                        </li>

                        <li>

                            <a href="setting.php">

                                <span class="glyphicon glyphicon-cog"></span>

                                Setting

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

        </nav>

        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="container">

            <div class="jumbotron">

                <h1>Welcome to Coders Point!</h1>

                <p>We have different coding/programming courses for you.

                   No need to hunt around, we have all in one place.</p>

            </div>

        </div>

            <hr>
           
            <div class="row text-center" id="cameras">
                
<?php
 $con=mysqli_connect("localhost","root","","clone1");
 if(!$con){
     die("could not connect to database for the moment sorry for the inconvience".mysqli_connect_error());
 };
 
  $res=mysqli_query($con, "SELECT * FROM `course`");
  if(mysqli_num_rows($res) > 0){
       while($row1=mysqli_fetch_array($res)){
        
           $cid=$row1['c_id'];
          $downloadresult= mysqli_query($con, "SELECT * FROM `download` WHERE `c_id` =$cid");
          $ratingresult= mysqli_query($con,"SELECT * FROM `rating` WHERE `c_id` = $cid");
          if(mysqli_num_rows($downloadresult) > 0){
             while ($downloadrow = mysqli_fetch_array($downloadresult)) {
                 while($ratingrow=mysqli_fetch_array($ratingresult)){
                 echo" <div class='col-md-3 col-sm-6 home-feature'>
                 <div class='thumbnail'>
                     <div class='caption'>
                         <a href='".$row1['link']."'><h1>".$row1['c_name']."</h1></a>
                         <p><a href='".$downloadrow['link']."' role='button' class='btn btn-primary btn-block'>Download</a></p>
                         <p><a href='wishlist.php?cid=".$cid."' role='button' class='btn btn-primary btn-block'>Add to Wishlist</a></p>
                         <p><a href='rate.php?name=".$row1['c_name']."&user=".$ratingrow['user']."&rating=".$ratingrow['average']."&cid=".$cid."' role='button' class='btn btn-primary btn-block'>Rate Course</a></p>
                     </div>
                 </div>
             </div>";
                
                }
                
            }
        }
    
        }
    }

?>
            
        </div>
		
		<script type='text/javascript' src='assets/script.js'></script>	 
        
        <?php
        include("footer.php");
        ?>
    </body>
</html>
