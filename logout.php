<?php
session_start();
if(isset($_SESSION['Name'])){
session_destroy();
header("location:index.php");
}
?>