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

                    <h1>C++ Video Tutorial!</h1>

            </div>
           
            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/l0qvxPPISuY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Introduction to C++</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/5Y74odV3IAI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Features of OOP</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/2DirmQuogsY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>History</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/ALXaZ3A5rNs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Input Output in C++</p>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/l6rZ2YSQrh0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Manipulators</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/-0Wo4v0g_pY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Dynamic Memory Allocation</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/jyAyzvOvL-I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Reference DataTypes</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/GOYEMyCoHCE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Introduction to Classes</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/QmZuerApkOk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Class Declaration</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/cLd1IwWCXZc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Class Member Functions</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/PVrnazUTMm4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Constructor</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/OmqTPFCdC-w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Constructor Overloading</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/FDnvm5QAo1A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Destructors</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/V-uIlFcTGdg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Friend Functions</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/0ToUv0Mu3Qs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Static Member Functions</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/vx-zQv6t8UY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    <div class="caption">
                            <p>Operator Overloading</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/8fDao3MBbwk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Introduction to Inheritance</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/rWT1TBYTwpc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Single Level Inheritance</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/9koINmwq6a8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Multiple Inheritance</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/R7uJLNq4Zls" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    <div class="caption">
                            <p>Multi-level Inheritance</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="videos">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <iframe width="250" height="190" src="https://www.youtube.com/embed/NIrWSggUUds" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Hierarchical Inheritance</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/TnC2iDaHnTE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Hybrid Inheritance</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/p-yMXd7q8p8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="caption">
                            <p>Exceptional Handling</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                    <iframe width="250" height="190" src="https://www.youtube.com/embed/CXxggQQez6k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    <div class="caption">
                            <p>File Handling</p>
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