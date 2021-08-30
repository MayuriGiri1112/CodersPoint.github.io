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
        <title>Abstraction</title>
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
                <h1>Abstraction</h1>
            </div>
    Abstraction is a process of hiding the implementation details and showing only functionality to the user.<br><br>

Another way, it shows only important things to the user and hides the internal details for example sending sms, you just type the text and send the message. You don't know the internal processing about the message delivery.<br><br>

Abstraction lets you focus on what the object does instead of how it does it.<br><br>

There are two ways to achieve abstraction in java<br>
<ol>
    <li>Abstract class (0 to 100%)</li>
    <li>Interface (100%)</li>
</ol>

<h2>Abstract class</h2>
A class that is declared as abstract is known as abstract class. It needs to be extended and its method implemented. It cannot be instantiated.<br><br>

<b>Example abstract class</b><br>
abstract class A<br>
{<br>
<br>
}

<h2>Abstract method</h2>
A method that is declared as abstract and does not have implementation is known as abstract method.<br><br>

<b>Example abstract method</b><br>

abstract void printStatus();<br>
//no body and abstract    
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
