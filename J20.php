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
        <title>Constructors</title>
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
                <h1>Constructors</h1>
            </div>
    <p>Constructor in java is a special type of method that is used to initialize the object.<br>
Java constructor is invoked at the time of object creation. It constructs the values i.e. provides data for the object therefore it is known as constructor.</p>

    <h2>Rules for creating java constructor</h2>
<p>There are basically two rules defined for the constructor.
<ol>
    <li>Constructor name must be same as its class name</li>
    <li>Constructor must have no explicit return type</li>
</ol></p>

<h2>Types of java constructors</h2>
<p>There are two types of constructors:
<ol>
    <li>Default constructor (no-arg constructor)</li>
    <li>Parameterized constructor</li>
</ol>
</p>

<h3>Java Default Constructor</h3><br>
A constructor that have no parameter is known as default constructor.<br>
Syntax of default constructor:<br>
class_name()<br>{<br> } <br><br>

<b>Example</b><br>
In this example, we are creating the no-arg constructor in the Bike class. It will be invoked at the time of object creation.<br><br>

class Bike1<br>
{ <br>
    Bike1()<br>
    {<br>
        System.out.println("Bike is created");<br>
    } <br>
    public static void main(String args[])<br>
    { <br>
        Bike1 b=new Bike1(); <br>
    } <br>
} <br>

<h3>Java parameterized constructor</h3>
A constructor that have parameters is known as parameterized constructor.<br><br>

<b>Why use parameterized constructor?</b><br>
Parameterized constructor is used to provide different values to the distinct objects.<br><br>

<b>Example</b>
In this example, we have created the constructor of Student class that have two parameters. We can have any number of parameters in the constructor.<br><br>

class Student4<br>
{ <br>
    int id; <br>
    String name; <br>
    Student4(int i,String n)<br>
    { <br>
        id = i; <br>
        name = n; <br>
    } <br><br>

    void display()<br>
    {<br>
        System.out.println(id+" "+name);<br>
    } <br><br>

    public static void main(String args[])<br>
    { <br>
        Student4 s1 = new Student4(111,"Karan");<br> 
        Student4 s2 = new Student4(222,"Aryan"); <br>
        s1.display(); <br>
        s2.display(); <br>
    } <br>
}<br>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
