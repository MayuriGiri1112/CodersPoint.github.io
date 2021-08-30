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
        <title>Variable Scope</title>
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
                <h1>Variable Scope</h1>
            </div>
There are three kinds of variables in Java:

<h2>Local Variable</h2>
<ol>
<li>variable that is declared inside the method is called local variable.</li>
<li>Local variables are created when the method, constructor or block is entered and the variable will be destroyed once it exits the method, constructor or block.</li>
<li>Access modifiers cannot be used for local variables.</li>
<li>Local variables are visible only within the declared method, constructor or block.</li>
<li>There is no default value for local variables so local variables should be declared and an initial value should be assigned before the first use.</li>
</ol>

<h2>Instance Variable</h2>
<ol>
    <li>A variable that is declared inside the class but outside the method is called instance variable . It is not declared as static.</li>
    <li>Instance variables are created when an object is created with the use of the keyword 'new' and destroyed when the object is destroyed.</li>
    <li>Instance variables hold values that must be referenced by more than one method, constructor or block, or essential parts of an object's state that must be present throughout the class.</li>
    <li>Instance variables can be declared in class level before or after use.</li>
    <li>Access modifiers can be given for instance variables.</li>
    <li>Instance variables have default values. For numbers the default value is 0, for Booleans it is false and for object references it is null. Values can be assigned during the declaration or within the constructor.</li>
    <li>Instance variables can be accessed directly by calling the variable name inside the class. However within static methods and different class ( when instance variables are given accessibility) should be called using the fully qualified name . ObjectReference.VariableName.</li>
</ol>

<h2>Class/static variables</h2>
<ol>
    <li>A variable that is declared as static is called static variable. It cannot be local.</li>
<li>Class variables also known as static variables are declared with the static keyword in a class, but outside a method, constructor or a block.</li>
<li>There would only be one copy of each class variable per class, regardless of how many objects are created from it.</li>
<li>Static variables are stored in static memory.</li>
<li>Static variables are created when the program starts and destroyed when the program stops.</li>
<li>Visibility is similar to instance variables.</li>
<li>Static variables can be accessed by calling with the class name ClassName.VariableName.</li>
</ol>

<h3>Example</h3>
class A<br>
{ <br>
    int data=50;<br>
    //instance variable <br><br>

    static int m=100;<br>
    //static variable <br><br>

    void method()<br>
    { <br>
        int n=90;<br>
        //local variable <br>
    } <br>
}//end of class A<br>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
