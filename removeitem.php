<?php
session_start();
$con=mysqli_connect("localhost","root","","clone1");
if(!$con){
    die("could not connect to database for the moment sorry for the inconvience".mysqli_connect_error());
};
$uid=$_SESSION['u_id'];
if(isset($_GET['remove_cid'])){
    $remove_cid=$_GET['remove_cid'];
   mysqli_query($con,"DELETE FROM `wishlist` WHERE `wishlist`.`u_id` = $uid  AND `c_id`= $remove_cid");
   header("location:wishlist.php");
}

?>