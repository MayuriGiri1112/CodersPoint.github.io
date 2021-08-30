<?php include('server.php') ?>

<!DOCTYPE html>
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
        
<title>Sign Up</title>
  
<script> 
function show()                                    
{ 
    var name = document.forms["RegForm"]["Name"];               
    var email = document.forms["RegForm"]["EMail"];    
    var password = document.forms["RegForm"]["Password"];  
    var phone = document.forms["RegForm"]["Telephone"];  
    var address = document.forms["RegForm"]["Address"];  
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } 
   
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return flase; 
    } 
   
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        name.focus(); 
        return false; 
    } 
   
    return true; 
}</script>
   
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
                    
<a class="navbar-brand" href="#">Coders Point</a>
                
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
                            
<a href="login.php">
                                
<span class="glyphicon glyphicon-log-in"></span>
                                
Login
                            
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
        
</nav><br><br><br><br>  
        
        
<div class="container-fluid">
            
    <div class="row">

        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>SIGN UP</h2>
                </div>
                    <div class="panel-body">       
                        <form name="RegForm" action="signup.php" method="post"> 
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="Name" size=65 required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail" name="EMail" size=65 required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="Password" size=65 required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Telephone" name="Telephone" size=65 required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name="Address" size=65 required="true">
                            </div>
                            
                                <input type="submit" name="reg_user" id="reg_user" class="btn btn-primary" value="SignUp"/>
                            
                        </form>                                
                    </div>
            </div>

        </div>

    </div>
        
</div><br><br><br><br><br>
        
        
<nav class="navbar navbar-inverse navbar-fixed-bottom">
        <footer>

            <center>

                <h4>Coders Point. For any doubt or details Contact Us: +91 7441165346 , +91 7974516571
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a></h4>
            </center>

        </footer>
</nav>
    
</body>

</html>



