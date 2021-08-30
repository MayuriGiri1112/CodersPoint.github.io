<?php 
 
if(isset($_POST["submit"]))
{  
    if(!empty($_POST['EMail']) && !empty($_POST['Password'])) 
    {  
        $EMail=$_POST['EMail'];  
        $Password=$_POST['Password'];  

        $con= mysqli_connect('localhost', 'root', '', 'registration'); 


        $query=mysqli_query($con,"SELECT * FROM users WHERE EMail='$EMail' AND Password='$Password'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
            while($row=mysqli_fetch_assoc($query))  
            {  
            $dbemail=$row['EMail'];  
            $dbpassword=$row['Password'];  
            }  

            if($EMail == $dbemail && $Password == $dbpassword)  
            {  
            header("Location: courses.php");  
            }  
        } 
        else 
        {  
            $message = "Invalid Email or Password.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');window.location='login.html';</script>";
        }
    }
}   
?>