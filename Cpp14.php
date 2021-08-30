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
        <title>OUTPUT STREAM(cout)</title>
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
                <h1>OUTPUT STREAM(cout)</h1>
            </div>
        </div>
<p>On most program environments, the standard output by default is the screen, and the C++ stream object defined to access it is cout. cout is an instance of iostream class.</p>


<p>
For formatted output operations, cout is used together with the insertion operator, which is written as << (i.e., two "less than" signs).</p>



cout << "this is Output";<br>

//prints this is Output sentence on screen<br>

cout << 50;<br>

//prints number 50 on screen<br>

cout << x;
<br>
//prints the value of x on screen


<p>
The << operator inserts the data that follows it into the stream that precedes it. In the examples above, it inserted the literal string Output sentence, the number 120, and the value of variable x into the standard output stream cout. Notice that the sentence in the first statement is enclosed in double quotes (") because it is a string literal, while in the last one, x is not. The double quoting is what makes the difference; when the text is enclosed between them, the text is printed literally; when they are not, the text is interpreted as the identifier of a variable, and its value is printed instead.</p>


<b>
For example,</b><br> 
These two sentences have very different results:<br>

cout << "Hello";<br>
//prints Hello<br>

cout << Hello;<br>
//prints the content of variable Hello



<p>Multiple insertion operations (<<) may be chained in a single statement:<br>

cout << "This " << " is a " << "single C++ statement";</p>


<p>
This last statement would print the text This is a single C++ statement. Chaining insertions is especially useful to mix literals and variables in a single statement:<br>

cout << "I am " << age << " years old and my zipcode is " << zipcode;</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
