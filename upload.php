<!DOCTYPE html>
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
        
<!--Latest compiled and minified CSS-->
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        
<!--jQuery library-->
        
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
        
<!--Latest compiled and minified JavaScript-->
        
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
        
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Upload</title>
     

<script> 
function show()                                    
{ 
    var name = document.forms["UploadForm"]["Subject"];               
    var email = document.forms["UploadForm"]["Branch"];  
    if (Name.value == "")                                   
    { 
        window.alert("Please enter your Name!"); 
        Name.focus(); 
        return false; 
    } 
    if (Subject.value == "")                                  
    { 
        window.alert("Please enter the subject name!"); 
        Subject.focus(); 
        return false; 
    } 
       
    if (Branch.value == "")                                   
    { 
        window.alert("Please enter your Branch!"); 
        Branch.focus(); 
        return false; 
    } 
   
    return true; 
}</script>
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
                    
<a class="navbar-brand" href="#">Coders Point</a>
                
</div>
                
<div class="collapse navbar-collapse" id="myNavbar">
                    
<ul class="nav navbar-nav navbar-right">

<li>
                            
<a href="#"><span class="glyphicon glyphicon-user"></span>    
  <?php if(isset($_SESSION['Name'])){echo ($_SESSION['Name']);} else{echo "Guest";}?></a>
                            
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
                
</div>
            
</div>
        
</nav><br><br><br><br>   
        
        
<div class="container-fluid">
            
    <div class="row">

        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>UPLOAD</h2>
                </div>
                    <div class="panel-body">       
                        <form name="UploadForm" onsubmit="return show()" method="post" enctype="multipart/form-data"> 
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="User name" name="Name" value="<?php echo $_SESSION['Name']; ?>" size=65 required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject" name="Subject" size=65 required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Branch" name="Branch" size=65 required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Filename" name="name" size=65 required="true"> 
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control" placeholder="Select File" name="f" size=65 required="true"> 
                            </div>
                            <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                        </form>                                
                    </div>
            </div>

        </div>

    </div>
        
</div><br>
        
        
<?php
include("footer.php");
?>
    
</body>

</html>

<?php

   $con = mysqli_connect("localhost","root","","clone1");
   if(isset($_POST['submit']))
   {
      $Name = $_POST['Name'];
      $Subject = $_POST['Subject'];
      $Branch = $_POST['Branch'];
      $file_name = $_FILES['f']['name'];
      $file_tmp = $_FILES['f']['tmp_name'];
      $store = "UploadedData/".$file_name;
      move_uploaded_file($file_tmp,$store);
      $query = "insert into upload(Name, Subject, Branch, Path, Filename) values('$Name', '$Subject', '$Branch', '$store', '$file_name')";
      if(mysqli_query($con,$query))
      {
         echo "<script>alert('Successfully uploaded data!');</script>";
      }
      else
      {
         echo "<script>alert('Can't upload your file, there is something wrong!!!');</script>";
      }
    }
?>
