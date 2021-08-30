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
        <title>IF-Statement</title>
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
                <h1>IF-Statement</h1>
            </div>
<h2>if statement</h2>
An if statement contains a Boolean expression and block of statements enclosed within braces.

<h2>if(conditional expression)</h2>
//statement or compound statement;<br>
else <br>
//optional<br>
//statement or compound statement;<br> 
//optional<br>

<p>If the Boolean expression is true then statement block is executed otherwise (if false) program directly goes to next statement without executing Statement block.</p>

<h2>if....else</h2>
<p>If statement block with else statement is known as as if...else statement. Else portion is non-compulsory.</p>

if ( condition_one ) <br>
{<br>
    //statements<br>
}<br>
else if ( condition_two )<br>
{<br>
    //statements<br>
}<br>
else<br>
{<br>
    //statements<br>
}<br>

<p>If the condition is true, then compiler will execute the if block of statements, if false then else block of statements will be executed.</p>

<h2>nested if...else</h2>
when a series of decisions are involved, we may have to use more than one if...else statement in nested form as follows:<br><br>

if(test condition1)<br>
{<br>
    if(test condition2)<br>
    {<br>
        //statement1;<br>
    }<br>
    else<br>
    {<br>
        //statement2;<br>
    }<br>
}<br>
else<br>
{<br>
    //statement3;<br>
}<br>
//statement x;<br>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
