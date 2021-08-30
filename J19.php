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
        <title>Class Objects</title>
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
                <h1>Class Objects</h1>
            </div>
    <p>As pointed out earlier, an object in java is essentially a block of memory that contains space to store all the instance variables. Creating an object is also referred to as instantiating an object.</p>

    <p>In Java, the new keyword is used to create new objects. <br>
There are three steps when creating an object from a class:<br>
<b>Declaration:</b> A variable declaration with a variable name with an object type.<br>
<b>Instantiation:</b> The 'new' key word is used to create the object.<br>
<b>Initialization:</b> The 'new' keyword is followed by a call to a constructor. This call initializes the new object.</p>

    <p><b>Example</b> of creating an object is given below:<br>
Rectangle rect;<br>
rect = new Rectangle();</p>

<p>In the first statement we declared the object rect. it declares a variable to hold the object reference and in second we instantiated the object which actually assigns the object reference to the variable.<br>
    variable rect is now an object of the Rectangle class.</p>

<h2>Accessing class members</h2>
<p>Now that we have created objects, each containing its own set of variables, we should assign values to those variables in order to use them in our program. <br>
Remember, all variables must be assigned values before they are used. <br>
Since we are outside the class, we cannot access the instance variables and the methods directly. To do this, we must use the concerned object and the dot operator as shown below: <br>
objectname.variablename = value; objectname.methodname(parameter-list); </p>

<p>Here objectname is the name of the object, variablename is the name of the instance variable inside the object that we wish to access, methodname is the method that we wish to call, and parameter-list is a comma separated list of "actual values" (or expressions) that must match in type and number with the Parameter list of the methodname declared in the class. </p>

<p>The instance variables & method of the Rectangle class may be accessed and assigned values as follows: <br>
rect1.width=15<br>
rect1.length=20;<br>
rect2.width=24;<br>
rect2.length=34;<br>
rect1.area();</p>
        </div></div><br><br><br><br>
<nav class="navbar navbar-inverse navbar-fixed-bottom">

<?php
include("footer.php");
?>

</body>
</html>
