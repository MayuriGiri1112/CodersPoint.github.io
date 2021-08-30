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
        <title>IF-statement</title>
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
                <h1>IF-statement</h1>
            </div>
        </div>
<h2>if statement</h2>
            <p>An if statement contains a Boolean expression and block of statements enclosed within braces.</p>

            <h4>Structure of if statement</h4>
            <p>if (boolean expression ) <br>
/* if expression is true */<br>
statements... ; /* Execute statements */</p>

            <p>If the Boolean expression is true then statement block is executed otherwise (if false) program directly goes to next statement without executing Statement block.</p>

            <h2>if...else statement</h2>
            <p>If statement block with else statement is known as as if...else statement. Else portion is non-compulsory.</p>

            <h4>Structure of if...else</h4>

if(condition)<br>
{<br>
  statements...<br>
}<br>
else<br>
{<br>
  statements...<br>
}<br>

<p>If the condition is true, then compiler will execute the if block of statements, if false then else block of statements will be executed.</p>

<h2>Nested if...else statement</h2>

<p>We can use multiple if-else for one inside other this is called as Nested if-else.</p>

<h4>Structure of Nested if...else</h4>

if(condition)<br>
{<br>
  statements...<br>
}<br>
else if<br>
{<br>
  statements...<br>
}<br>
else<br>
{<br>
  statements...<br>
}<br>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
