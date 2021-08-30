<?php
session_start();

$Name = "";
$EMail    = "";
$Password = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'clone1');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Name=mysqli_real_escape_string($db, $_POST['Name']);
  $EMail = mysqli_real_escape_string($db, $_POST['EMail']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);
  $Telephone= mysqli_real_escape_string($db, $_POST['Telephone']);
  $Address = mysqli_real_escape_string($db, $_POST['Address']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Name)) { array_push($errors, "Name is required"); }
  if (empty($EMail)) { array_push($errors, "Email is required"); }
  if (empty($Password)) { array_push($errors, "Password is required"); }
  if (empty($Telephone)) { array_push($errors, "Mobile number is required"); }
  if (empty($Address)) { array_push($errors, "Address is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE Name='$Name' OR EMail='$EMail' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Name'] === $Name) {
      array_push($errors, "Name already exists");
    }

    if ($user['EMail'] === $EMail) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO `users` (`Name`, `EMail`, `Password`, `Telephone`, `Address`) VALUES ('$Name', '$EMail', '$Password', '$Telephone', '$Address');";
    
    mysqli_query($db, $query);
  	$_SESSION['Name'] = $Name;
	$_SESSION['EMail'] =$EMail;
        $_SESSION['Password'] = $Password;
  	header('location:sregister.php');
  }
}

// LOGIN USER
if(isset($_POST['submit']))

{
  $EMail = $_POST['EMail'];
  $Password = $_POST['Password'];
  
    $sql = mysqli_query($db,"SELECT * FROM `users` where EMail='$EMail' AND Password='$Password'"); 
    $row = mysqli_fetch_array($sql);
    $count = mysqli_num_rows($sql);
    if($count==1)
    {
      $_SESSION['Name'] = $row['Name'];
      $_SESSION['u_id']=$row['u_id'];
      $_SESSION['Password'] = $row['Password'];
      //$_SESSION['lname'] = $row['last_name'];
      $_SESSION['page'] = 1;
      header("Location:courses.php");
    }
    else
    {
    array_push($errors, "Wrong username/password combination");
    }
}
  
  ?>
  