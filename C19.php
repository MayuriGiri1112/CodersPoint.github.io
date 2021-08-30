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
        <title>Recursion</title>
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
                <h1>Recursion</h1>
            </div>
<p>A function that calls itself is known as recursive function and the process of calling function itself is known as recursion in C programming.

            <h3>Example of recursion in C programming</h3>
            
<h4>Write a C program to find sum of first n natural numbers using recursion. Note: Positive integers are known as natural number i.e. 1, 2, 3....n</h4>

#include<<i>stdio.h</i>><br>
int sum(int n);<br>
int main()<br>
{<br>
    int num,add;<br>
    printf("Enter a positive integer:\n");<br>
    scanf("%d",&num);<br>
    add=sum(num);<br>
    printf("sum=%d",add);<br>
}<br>
int sum(int n)<br>
{<br>
    if(n==0)<br>
       return n;<br>
    else<br>
       return n+sum(n-1);    /*self call  to function sum() */<br>
}<br><br>

<b>Output</b><br><br>

Enter a positive integer:<br>
5<br>
15<br><br>

In, this simple C program, sum() function is invoked from the same function. If n is not equal to 0 then, the function calls itself passing argument 1 less than the previous argument it was called with. Suppose, n is 5 initially. Then, during next function calls, 4 is passed to function and the value of argument decreases by 1 in each recursive call. When, n becomes equal to 0, the value of n is returned which is the sum numbers from 5 to 1.<br><br>

For better visualization of recursion in this example:<br><br>

sum(5)<br>
=5+sum(4)<br>
=5+4+sum(3)<br>
=5+4+3+sum(2)<br>
=5+4+3+2+sum(1)<br>
=5+4+3+2+1+sum(0)<br>
=5+4+3+2+1+0<br>
=5+4+3+2+1<br>
=5+4+3+3<br>
=5+4+6<br>
=5+10<br>
=15<br>
Every recursive function must be provided with a way to end the recursion. In this example when, n is equal to 0, there is no recursive call and recursion ends.

<h3>Advantages and Disadvantages of Recursion</h3>

Recursion is more elegant and requires few variables which make program clean. Recursion can be used to replace complex nesting code by dividing the problem into same problem of its sub-type.<br><br>

In other hand, it is hard to think the logic of a recursive function. It is also difficult to debug the code containing recursion.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
