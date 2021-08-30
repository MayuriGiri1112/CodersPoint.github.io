<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Variables Storage Classes</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("Cpp_sidenav.php");
?>

<div class="main">
	<br>
<?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Variables Storage Classes</h1>
            </div>
        </div>
            <h2>auto</h2>


<p>The default class. Automatic variables are local to their block. Their storage space is reclaimed on exit from the block.</p>



<h2>register</h2>
<p>
If possible, the variable will be stored in a processor register. May give faster access to the variable. If register storage is not possible, then the variable will be of automatic class.<br>

Use of the register class is not recommended, as the compiler should be able to make better judgement about which variables to hold in registers, in fact injudicious use of register variables may slow down the program.</p>


<h2>
static </h2>


<p>On exit from block, static variables are not reclaimed. They keep their value. On re-entry to the block the variable will have its old value.</p> 

<h2>

extern</h2> 


<p>Allows access to external variables. An external variable is either a global variable or a variable defined in another source file. External variables are defined outside of any function. (Note: Variables passed to a function and modified by way of a pointer are not external variables)

</p>

<h2>static external </h2>


<p>External variables can be accessed by any function in any source file which make up the final program. Static external variables can only be accessed by functions in the same file as the variable declaration.</p>



</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
