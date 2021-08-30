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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Videos</title>
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

                background:url(img/bg_img4.jpg) repeat center center;

                padding-top:75px;

                padding-bottom:50px;

                color:#000;

                background-size:100%;

            }

            @media screen and (max-width: 600px) {
              .col-md-3, .col-sm-6, .home-feature 
              {
                width: 100%;
                display: block;
                margin-bottom: 20px;
              }
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

                            <a href="videos.php">

                                <span class="glyphicon glyphicon-facetime-video"></span>

                                Videos

                            </a>

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

    </nav>

    <div class="container" id="content">
        <!-- Jumbotron Header -->
        <div class="container">
            
            <div class="jumbotron">

                <h1>C Video Tutorial!</h1>

            </div>
           
            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/si-KFFOW2gw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Introduction to C</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/nZnMH5x6PfQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Platform Dependency</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/rFnWoTnoC50" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Variables</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/TxWKGhF9KdM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Functions</p>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/j1u3V6pzwEI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>DataTypes</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/ou2ZYkol4NI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Control Statements</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/-8XjFA0EyJQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Modify Operators</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/uZ5FvTeJtmI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Printing Patterns</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/SUfe1UX1m4M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Recursion</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/SPuS9UJF1lo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Arrays</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/Zs6eQaqMsgk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Strings</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/Ranc3VvjI88" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Structures</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/3LQTxwKZAOY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Array of Structures</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/T976YpsV62w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Unions</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/sY-s7O0FiYE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Pointers</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/v49bwqQ4ouM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Dynamic Memory Allocation</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><br><br><br>

    <?php
        include("footer.php");
    ?>

    </body>
</html>