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
        <title>WHILE Loop</title>
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
                <h1>WHILE Loop</h1>
            </div>
<p>
                Loops causes program to execute the certain block of code repeatedly until some conditions are satisfied, i.e., loops are used in performing repetitive work in programming.<br><br>

Suppose you want to execute some code/s 10 times. You can perform it by writing that code/s only one time and repeat the execution 10 times using loop.<br><br>

<h3>Syntax of while loop</h3>

while (test expression)<br>
{<br>
     statements to be executed. <br> 
}<br><br>

In the beginning of while loop, test expression is checked. If it is true, codes inside the body of while loop,i.e, code/s inside parentheses are executed and again the test expression is checked and process continues until the test expression becomes false.<br><br>

<h3>Example of while loop</h3>

<h4>Write a C program to find the factorial of a number, where the number is entered by user.<br> (Hints: factorial of n = 1*2*3*...*n</h4>

/*C program to demonstrate the working of while loop*/<br>
#include<<i>stdio.h</i>><br>
     int main()<br>
     {<br>
     int number,factorial;<br>
     printf("Enter a number.\n");<br>
     scanf("%d",&number);<br>
     factorial=1;<br>
     while (number>0)<br>
     {<br>
        /* while loop continues util test condition number>0 is true */<br>
           factorial=factorial*number;<br>
           --number;<br>
    }<br>       
}<br>
printf("Factorial=%d",factorial);<br>
return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter a number.<br>
5<br>
Factorial=120</p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
