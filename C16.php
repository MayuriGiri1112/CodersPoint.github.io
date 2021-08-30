<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->
       <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">

        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Function</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("C_sidenav.php");
?>

<div class="main">
	<br>
        <?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Function</h1>
            </div>
<p>Function in programming is a segment that groups a number of program statements to perform specific task.<br><br>

A C program has at least one function main( ). Without main() function, there is technically no C program.<br><br>

            <h3>Types of C functions</h3>
Basically, there are two types of functions in C on basis of whether it is defined by user or not.<br>
<ol>
<li>Library function</li>
<li>User defined function</li>
</ol>

<h4>Library function</h4>

Library functions are the in-built function in C programming system. For example:<br><br>

main()<br>
- The execution of every C program starts from this main() function.<br><br>

printf()<br>
- prinf() is used for displaying output in C.<br><br>

scanf()<br>
- scanf() is used for taking input in C.<br><br>

<h4>User defined function</h4>

C provides programmer to define their own function according to their requirement known as user defined functions. Suppose, a programmer wants to find factorial of a number and check whether it is prime or not in same program. Then, he/she can create two separate user-defined functions in that program: one for finding factorial and other for checking whether it is prime or not.<br><br>

<h3>How user-defined function works in C Programming?</h3>

#include<<i>stdio.h</i>><br>
void function_name()<br>
{<br>
................<br>
................<br>
}<br>
int main()<br>
{<br>
...........<br>
...........<br>
function_name();<br>
...........<br>
...........<br>
}<br><br>

As mentioned earlier, every C program begins from main() and program starts executing the codes inside main() function. When the control of program reaches to function_name() inside main() function. The control of program jumps to void function_name() and executes the codes inside it. When, all the codes inside that user-defined function are executed, control of the program jumps to the statement just after function_name() from where it is called. Analyze the figure below for understanding the concept of function in C programming. .<br><br>

Remember, the function name is an identifier and should be unique.

<h3>Advantages of user defined functions</h3>

<ol>
<li>User defined functions helps to decompose the large program into small segments which makes programmar easy to understand, maintain and debug.</li>
<li>If repeated code occurs in a program. Function can be used to include those codes and execute when needed by calling that function.</li>
<li>Programmar working on large project can divide the workload by making different functions.</li>
</ol>

        </p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
