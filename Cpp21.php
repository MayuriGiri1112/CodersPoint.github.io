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
        <title>Break and Continue</title>
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
                <h1>Break and Continue</h1>
            </div>
        </div>

            <h2>Break statement</h2>

            <p>Break statement is usually used to terminate a case in the switch statement. <br>
    Break statement in loops to instantly terminates the loop and program control goes to the next statement after the loop.</p>

            <p>If break statement is used in nested loops (i.e., loop within another loop), the break statement will end the execution of the inner loop and Program control goes back to outer loop.</p>

            Syntax :<br>
break;<br>

<h2>Continue statement</h2>

<p>In C++ programming language the continue statement works slightly similar to the break statement. The continue restarts the loop with the next value of item. All the line code below continue statement is skips.</p>

<b>Syntax :</b>
continue; 

<p>In the for loop, continue statement skips the test condition and increment value of the variable to execute again and In the while and do...while loops, continue skips all the statements and program control goes to at the end of loop for tests condition   </p>        

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
