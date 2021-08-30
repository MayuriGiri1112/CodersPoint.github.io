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
        <title>Constructor-Destructor</title>
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
                <h1>Constructor-Destructor</h1>
            </div>
        </div>

            <h2>Constructor</h2>
            
            <p>A constructor is a special kind of class member function that is executed when an object of that class is instantiated. <br>
                Constructors are typically used to initialize member variables of the class to appropriate default values, or to allow the user to easily initialize those member variables to whatever values are desired.</p>

<p>Unlike normal functions, constructors have specific rules for how they must be named:<br>
<ol>
    <li>Constructors should always have the same name as the class (with the same capitalization)</li>
    <li>Constructors have no return type (not even void)</li>
</ol>
</p>

<p>A constructor that takes no parameters (or has all optional parameters) is called a default constructor but if you need, a constructor can have parameters. This helps you to assign initial value to an object at the time of its creation.</p>

<h2>Destructor</h2>

<p>A destructor is another special kind of class member function that is executed when an object of that class is destroyed. They are the counterpart to constructors. When a variable goes out of scope, or a dynamically allocated variable is explicitly deleted using the delete keyword, the class destructor is called (if it exists) to help clean up the class before it is removed from memory.</p> 

<p>For simple classes, a destructor is not needed because C++ will automatically clean up the memory for you. However, if you have dynamically allocated memory, or if you need to do some kind of maintenance before the class is destroyed (eg. closing a file), the destructor is the perfect place to do so.</p>

Like constructors, destructors have specific naming rules:<br>
<ol>
    <li>The destructor must have the same name as the class, preceded by a tilde (~).</li>
    <li>The destructor can not take arguments.</li>
    <li>The destructor has no return type.</li>
</ol>

<p><b>Note:</b> Rule 2 implies that only one destructor may exist per class, as there is no way to overload destructors since they can not be differentiated from each other based on arguments.</p>

<b>Example</b><br>
class abc <br>
{<br>
private :<br>
int a,b;<br><br>

public :<br>
abc()  //default constructor<br>
{<br>
a=0;<br>
b=1;<br>
}<br><br>

abc(int x, int y) //Parametrized constructor<br>
{<br>
a=x;<br>
b=y;<br>
}<br><br>

~abc(); //destructor<br>
.<br>
.<br>
.<br>
};<br>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
