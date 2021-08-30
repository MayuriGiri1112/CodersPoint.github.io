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
        <title>Functions</title>
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
                <h1>Functions</h1>
            </div>
        </div>

            <p>A function is a group of statements that together perform a task. All C programs made up of one or more functions. There must be one and only one main function.<br>
            You can divide up your code into separate functions. How you divide up your code among different functions is up to you, but logically the division usually is so each function performs a specific task.</p>

<p>A program will be executing statements sequentially inside one function when it encounters a function call.<br>
A function call is an expression that tells the CPU to interrupt the current function and execute another function.<br>
The CPU 'puts a bookmark' at the current point of execution, and then calls (executes) the function named in the function call. When the called function terminates, the CPU goes back to the point it bookmarked, and resumes execution.</p>

<h2>Function definition</h2>

return_type function_name( parameter list )<br>
{<br>
//statements<br>
}<br><br>

<ol>
<li>The <b>return_type</b> is the data type of the value the function returns. Some functions perform the desired operations without returning a value.</li>

<li><b>function name</b> is the identifier by which the function can be called.</li>

<li>A <b>parameter</b> is like a placeholder. When a function is invoked, you pass a value to the parameter. This value is referred to as actual parameter or argument. The parameter list refers to the type, order, and number of the parameters of a function. Parameters are optional; that is, a function may contain no parameters.</li>

<li><b>statements</b> is the function's body. It is a block of statements surrounded by braces { } that specify what the function actually does.</li>
</ol><br><br>

<b>Example</b><br>
/* Function returning addition of 2 integers */<br>
int add(int a, int b)<br>
{<br>
int total ;<br>
total= a+b;<br>
return total;<br>
}<br>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
