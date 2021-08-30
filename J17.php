<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       Latest compiled and minified CSS

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css">
        jQuery library

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        Latest compiled and minified JavaScript

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FOR Loop</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("Java_sidenav.php");
?>

<div class="main">
	<br>
        <?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>FOR Loop</h1>
            </div>
    <p>Java for loop used to repeat execution of statement(s) until a certain condition holds true. <br>
The general form of the for statement can be expressed as follows:<br><br>

for (initialization; termination; increment)<br>
{<br>
    statement(s)...<br>
    }</p>

<p>You can initialize multiple variables, test many conditions and perform increments or decrements on many variables according to requirement. <br>
    All three components of for loop are optional.</p> 

<p><b>For example,</b> to execute a statement 5 times:<br>
for (i = 0; i < 5; i++)<br>
    statements...;<br><br>


Another way of doing this is: i = 4;<br>
while (i>=0)<br>
statements...;</p>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
