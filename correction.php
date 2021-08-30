<?php
    $con=mysqli_connect("localhost","root","","registration");
    //$errors = array(); 

    $Name= mysqli_real_escape_string($con,$_POST['Name']);
    $EMail= mysqli_real_escape_string($con, $_POST['EMail']);
    $Password=mysqli_real_escape_string($con,$_POST['Password']);
    $Telephone=$_POST['Telephone'];
    $Address=mysqli_real_escape_string($con,$_POST['Address']);

    $sql_u = "SELECT * FROM users WHERE Name='$Name'";
    $sql_e = "SELECT * FROM users WHERE EMail='$EMail'";
    $sql_t = "SELECT * FROM users WHERE Telephone='$Telephone'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);
    $res_t = mysqli_query($con, $sql_t);

    if (mysqli_num_rows($res_u) > 0) 
    {
        $message = "Sorry... Name already taken\\nTry again.";
        echo "<script type='text/javascript'>alert('$message');window.location='signup.html';</script>";
    }
    else if(mysqli_num_rows($res_e) > 0)
    {
        $message1 = "Sorry... EMail already taken\\nTry again.";
        echo "<script type='text/javascript'>alert('$message1');window.location='signup.html';</script>";
    }
    else if(mysqli_num_rows($res_t) > 0)
    {
        $message2 = "Sorry... Telephone number already taken\\nTry again.";
        echo "<script type='text/javascript'>alert('$message2');window.location='signup.html';</script>";
    }
    else
    {
        $query="insert into users(Name, EMail, Password, Telephone, Address) values('$Name','$EMail','$Password','$Telephone','$Address')";

        $result= mysqli_query($con, $query) or die(mysqli_error($con));    
        header("location: courses.php");
    }		

?>    

