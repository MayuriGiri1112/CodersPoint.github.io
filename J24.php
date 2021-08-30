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
        <title>Inheritance</title>
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
                <h1>Inheritance</h1>
            </div>

        </div>
<p>Inheritance is one of the key features of Object Oriented Programming. <br>
Inheritance provided mechanism that allowed a class to inherit property of another class. When a Class extends another class it inherits all non-private members including fields and methods.</p>

<p>The class which inherits the properties of other is known as subclass (derived class, child class) and the class whose properties are inherited is known as superclass (base class, parent class). </p>

<p>Inheritance defines is-a relationship between a Super class and its Sub class. extends and implements keywords are used to describe inheritance in Java.</p>

<h3>Why use inheritance in java</h3>
<li>
    <ol>For Method Overriding (so runtime polymorphism can be achieved).</ol>
    <ol>For Code Reusability.</ol>
</li>

<h3>Syntax of Java Inheritance</h3>

class Subclass-name extends Superclass-name<br>
{ <br>
    //methods and fields<br>
}<br><br>

extends is the keyword used to inherit the properties of a class.<br>

<h3>super keyword</h3>
<p>In Java, super keyword is used to refer to immediate parent class of a class. In other words super keyword is used by a subclass whenever it need to refer to its immediate super class.</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
