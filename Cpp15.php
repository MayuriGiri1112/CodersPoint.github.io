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
        <title>INPUT STREAM(cin)</title>
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
                <h1>INPUT STREAM(cin)</h1>
            </div>
        </div>
<p>In most program environments, the standard input by default is the keyboard, and the C++ stream object defined to access it is cin. cin is an instance of iostream class</p>



<p>For formatted input operations, cin is used together with the extraction operator, which is written as >> (i.e., two "greater than" signs). This operator is then followed by the variable where the extracted data is stored.<br>
<b>For example:
</b><br>
int age;<br>

//declares a variable of type int called age<br>

cin >> age;<br>

//extracts a value to be stored in it</p>


<p>
This operation makes the program wait for input from cin; generally, this means that the program will wait for the user to enter some sequence with the keyboard.</p>


<p>
Extractions on cin can also be chained to request more than one datum in a single statement:<br>

cin >> a >> b;<br><br>



This is equivalent to:<br>

cin >> a;<br>

cin >> b;<br>

In both cases, the user is expected to introduce two values, one for variable a, and another for variable b. Any kind of space is used to separate two consecutive input operations; this may either be a space, a tab, or a new-line character.</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
