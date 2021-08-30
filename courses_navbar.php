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
<html>
<head>
<script type='text/javascript' src='assets/jquery.js'></script>  
    <link rel="stylesheet" id="open-sans-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.4.2" type="text/css" media="all">
    <link rel="stylesheet" id="style-css" href="assets/style.css" type="text/css" media="all">
<script>src="vendor/jquery-2.2.4.min.js" </script>
<script>src="vendor/modernizr-2.8.3.min.js" </script>
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
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload=""onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
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
                            
                            <a href="#"><span class="glyphicon glyphicon-user"></span>    
                              <?php if(isset($_SESSION['Name'])){echo ($_SESSION['Name']);} else{echo "Guest";}?>
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

        </nav><br><br>
</body>
</html>

