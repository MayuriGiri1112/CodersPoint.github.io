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
        <title>Types of Inheritance</title>
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
                <h1>Types of Inheritance</h1>
            </div>
    
        </div>
<h2>Syntax of Java Inheritance</h2>
Single inheritance is damn easy to understand. When a class extends another one class only then we call it a single inheritance. The below example shows that class B extends only one class which is A. Here A is a parent class of B and B would be a child class of A.<br><br>

class A<br>
{<br>
<br>
}<br>
class B extends A<br>
{<br>
<br>
} <br><br>

<h2>2) Multiple Inheritance</h2>
''Multiple Inheritance'' refers to the concept of one class extending (Or inherits) more than one base class. The inheritance we learnt earlier had the concept of one base class or parent. The problem with ''multiple inheritance'' is that the derived class will have to manage the dependency on two base classes.<br><br>

Most of the new OO languages like Small Talk, Java, C# do not support Multiple inheritance. Multiple Inheritance is supported in C++.<br><br>

class A<br>
{<br>
<br>
}<br>
class B<br>
{<br>
<br>
}<br>
class C extends A,B<br>
{<br>
<br>
}

<h2>3) Multilevel Inheritance</h2>
Multilevel inheritance refers to a mechanism in OO technology where one can inherit from a derived class, thereby making this derived class the base class for the new class. As you can see in below example C is subclass or child class of B and B is a child class of A.<br><br>
class A<br>
{<br>
<br>
}<br>
class B extends A<br>
{<br>
<br>
}<br>
class C extends B<br>
{<br>
<br>
}

<h2>4) Hierarchical Inheritance</h2>
In such kind of inheritance one class is inherited by many sub classes. In below example class B,C and D inherits the same class A. A is parent class (or base class) of B,C & D.<br><br>

class A<br>
{<br>
<br>
}<br>
class B extends A<br>
{<br>
<br>
}<br>
class C extends A<br>
{<br>
<br>
}<br>
class D extends A<br>
{<br>
<br>
}

<h2>5) Hybrid Inheritance</h2>
In simple terms you can say that Hybrid inheritance is a combination of Single and Multiple inheritance. <br><br>

A hybrid inheritance can be achieved in the java in a same way as multiple inheritance can be!! Using interfaces. yes you heard it right. By using interfaces you can have multiple as well as hybrid inheritance in Java.

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
