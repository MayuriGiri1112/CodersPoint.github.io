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
        <title>DO-WHILE Loop</title>
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
                <h1>DO-WHILE Loop</h1>
            </div>
<p>
                Loops causes program to execute the certain block of code repeatedly until some conditions are satisfied, i.e., loops are used in performing repetitive work in programming.<br><br>

Suppose you want to execute some code/s 10 times. You can perform it by writing that code/s only one time and repeat the execution 10 times using loop.<br><br>

            <h1>do...while loop</h1>
            
In C, do...while loop is very similar to while loop. Only difference between these two loops is that, in while loops, test expression is checked at first but, in do...while loop code is executed at first then the condition is checked. So, the code are executed at least once in do...while loops.<br><br>

<h3>Syntax of do...while loops</h3>

do<br>
{<br>
   some code/s;<br>
}<br>
while (test expression);<br><br>

At first codes inside body of do is executed. Then, the test expression is checked. If it is true, code/s inside body of do are executed again and the process continues until test expression becomes false(zero).<br><br>

Notice, there is semicolon in the end of while (); in do...while loop.<br><br>

<h3>Example of do...while loop</h3>

<h4>Write a C program to add all the numbers entered by a user until user enters 0.</h4>


/*C program to demonstrate the working of do...while statement*/<br>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
   int sum=0,num;<br>
   do             /* Codes inside the body of do...while loops are at least executed once. */<br>
   {<br>                                    
        printf("Enter a number\n");<br>
        scanf("%d",&num);<br>
        sum+=num;<br>      
   }<br>
   while(num!=0);<br>
   printf("sum=%d",sum);<br>
return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter a number<br>
3<br>
Enter a number<br>
-2<br>
Enter a number<br>
0<br>
sum=1<br><br>

In this C program, user is asked a number and it is added with sum. Then, only the test condition in the do...while loop is checked. If the test condition is true,i.e, num is not equal to 0, the body of do...while loop is again executed until num equals to zero</p>
        </div>


</div<br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
