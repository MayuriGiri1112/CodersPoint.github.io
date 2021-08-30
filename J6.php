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
        <title>Variables</title>
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
                <h1>Variables</h1>
            </div>
    <p>A variable provides us with named storage that our programs can manipulate. <br>
        Each variable in Java has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.</p>

<p>You must declare all variables before they can be used. <br>
The basic form of a variable declaration is shown here:<br>
data_type variable = value;</p>

<p>Here data type is one of Java's datatypes and variable is the name of the variable. To declare more than one variable of the specified type, you can use a comma-separated list.</p>

<p>Following are valid examples of variable declaration and initialization in Java:<br>
int a, b, c;<br>
// Declares three ints, a, b, and c.<br><br>

int a = 10, b = 10;<br>
// Example of initialization<br><br>

double pi = 3.14159;<br>
// declares and assigns a value of PI.<br><br>

char a = 'a';<br>
// the char variable a iis initialized with value 'a'</p>

<p><b>Constant:</b> During the execution of program, value of variable may change. A constant represents permanent data that never changes. </p>

<p>If you want use some value likes p=3.14159; no need to type every time instead you can simply define constant for p, following is the syntax for declaring constant.<br>
    Static final datatype ConstantName = value;</p>

<b>Example:</b> static final float PI=3.14159;
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
