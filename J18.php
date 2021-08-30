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
        <title>Basics of Classes</title>
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
                <h1>Basics of Classes</h1>
            </div>
    <h2>Classes</h2>
    <p>Java is a true object-oriented language and therefore the underlying structure of all Java programs is classes.<br>
    A class is nothing but a blueprint or a template for creating different objects which defines its properties and behaviours. Java class objects exhibit the properties and behaviours defined by its class. A class can contain fields and methods to describe the behaviour of an object.</p>

<b>Defining a class</b><br>
<p>Once the class type has been defined, we can create ''variables'' of that type using declaration that are similar to the basic type declarations. In Java, these variables are termed as instances of classes, which are the actual objects.<br>
The basic form of a class definition is :<br><br>

class classname [extends superclassname]<br>
{<br>
 [ filelds declaration; ]<br>
 [ methods declaration; ]<br>
 }</p>

<h2>Fields</h2>
<p>A Java field is a variable inside a class. For instance, in a class representing an employee, the Employee class might contain the following fields:
<ul>
<li>name</li>
<li>position</li>
<li>salary</li>
<li>hiredDate</li>
</ul></p>

<b>Field Declaration Syntax</b><br>
A Java field is declared using the following syntax:<br><br>

[access_modifier] [static] [final] type name [= initial value] ;<br>
The square brackets [ ] around some of the keywords mean that this option is optional. Only type and name are required.

<h2>Methods</h2>
<p>Methods are nothing but members of a class that provide a service for an object or perform some business logic. Java fields and member functions names are case sensitive. Current states of a class's corresponding object are stored in the object's instance variables. Methods define the operations that can be performed in Java programming.</p>

<b>Method Declaration Syntax</b><br>
type methodname (parameter-list)<br>
{<br>
  method body;<br>
}<br><br>

Below is an example showing the Objects and Classes of the Cube class that defines 3 fields namely length, breadth and height. Also the class contains a member function getVolume().<br><br>

public class Cube <br>
{<br>
    int length;<br>
    int breadth;<br>
    int height;<br>
    public int getVolume()<br> 
    {<br>
        return (length * breadth * height);<br>
    }<br>
}<br>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
