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
        <title>Loop</title>
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
                <h1>Loop</h1>
            </div>
<p>
                Loops causes program to execute the certain block of code repeatedly until some conditions are satisfied, i.e.,loops are used in performing repetitive work in programming.<br><br>

Suppose you want to execute some code/s 100 times. You can perform it by writing that code/s only one time and repeat the execution 100 times using loop.<br><br>

There are 3 types of loops in C programming:<br>
            <ol>
                <li>for loop</li>
                <li>while loop</li>
                <li>do...while loop</li>
            </ol>
            
            <h1>for Loop Syntax</h1>
            for(initial expression; test expression; update expression)<br>
{<br>
       code/s to be executed; <br>
}<br><br>

<h3>How for loop works in C programming?</h3>

The initial expression is initialized only once at the beginning of the for loop. Then, the test expression is checked by the program. If the test expression is false, for loop is terminated. But, if test expression is true then, the codes are executed and update expression is updated. Again, the test expression is checked. If it is false, loop is terminated and if it is true, the same process repeats until test expression is false.<br><br>

This flowchart describes the working of for loop in C programming.<br><br>

<h3>for loop example</h3>

<h4>Write a program to find the sum of first n natural numbers where n is entered by user. Note: 1,2,3... are called natural numbers.</h4>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int n, count, sum=0;<br>
    printf("Enter the value of n.\n");<br>
    scanf("%d",&n);<br>
    for(count=1;count<=n;++count)  //for loop terminates if count>n<br>
    {<br>
        sum+=count;    /* this statement is equivalent to sum=sum+count */<br>
    }<br>
    printf("Sum=%d",sum);<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter the value of n.<br>
19<br>
Sum=190<br><br>

In this program, the user is asked to enter the value of n. Suppose you entered 19 then,  count is inatialized to 1 at first. Then, the test expression in the for loop,i.e.,  (count<= n) becomes true. So, the code in the body of for loop is executed which makes sum to 1. Then, the expression ++count is executed and again the test expression is checked, which becomes true. Again, the body of for loop is executed which makes sum to 3 and this process continues. When count is 20, the test condition becomes false and the for loop is terminated.<br><br>

<b>Note:</b> Initial, test and update expression are separated by semicolon(;).</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
