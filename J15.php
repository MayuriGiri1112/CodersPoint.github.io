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
        <title>WHILE Loop</title>
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
                <h1>WHILE Loop</h1>
            </div>
    <p>Java while loop is used to execute statement(s) until a condition holds true.</p>
    
    <h2>SYNTAX</h2>
    while (condition(s)) <br>
{<br>
    // statements<br>
}<br><br>

<p>If the condition holds true then the body of loop is executed, after execution of loop body condition is tested again and if the condition is true then body of loop is executed again and the process repeats until condition becomes false. </p>
<ol>
    <li>Condition is always evaluated to true or false and if it is a constant, For example while (c) { …} where c is a constant then any non zero value of c is considered true and zero is considered false.</li>

    <li>You can test multiple conditions such as</li>

while ( a > b && c != 0) <br>
{<br>
    // statements<br>
}<br>

Loop body is executed till value of a is greater than value of b and c is not equal to zero.<br>

<li>Body of loop can contain more than one statement.</li>
For multiple statements you need to place them in a block using {} and if body of loop contain only single statement you can optionally use {}. <br><br>

It is recommended to use braces always to make your program easily readable and understandable.
</ol>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
