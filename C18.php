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
        <title>Types of Functions</title>
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
                <h1>Types of Functions</h1>
            </div>
                        <p>For better understanding of arguments and return in functions, user-defined functions can be categorised as:<br><br>

            <ol>
                <li>Function with no arguments and no return value.</li>
                <li>Function with no arguments and return value.</li>
                <li>Function with arguments but no return value.</li>
                <li>Function with arguments and return value.</li>
            </ol>

Let's take an example to find whether a number is prime or not using above 4 cateogories of user defined functions.

<h3>Function with no arguments and no return value.</h3>

/*C program to check whether a number entered by user is prime or not using function with no arguments and no return value*/<br>
#include<<i>stdio.h</i>><br>
void prime();<br>
int main()<br>
{<br>
    prime();      //No argument is passed to prime().<br>
    return 0;<br>
}<br>
void prime()
{<br>  
/* There is no return value to calling function main(). Hence, return type of prime() is void */}<br>
    int num,i,flag=0;}<br>
    printf("Enter positive integer enter to check:\n");<br>
    scanf("%d",&num);<br>
    for(i=2;i<=num/2;++i)<br>
    {<br>
        if(num%i==0)<br>
        {<br>
             flag=1;<br>
         }<br>
    }<br>
    if (flag==1)<br>
        printf("%d is not prime",num);<br>
    else<br>
       printf("%d is prime",num);  <br>
    }<br><br>
    
    Function <i>prime()</i> is used for asking user a input, check for whether it is prime of not and display it accordingly. No argument is passed and returned form <i>prime()</i> function.

    <h3>Function with no arguments but return value</h3>

/*C program to check whether a number entered by user is prime or not using function with no arguments but having return value */
#include<<i>stdio.h</i>><br>
int input();<br>
int main()<br>
{<br>
    int num,i,flag;<br>
    num=input();     /* No argument is passed to input() */<br>
    for(i=2,flag=i;i<=num/2;++i,flag=i)<br>
    {<br>
    if(num%i==0)<br>
    {<br>
        printf("%d is not prime",num);<br>
        ++flag;<br>
        break;<br>
    }<br>
    }<br>
    if(flag==i)<br>
        printf("%d is prime",num);<br>
    return 0;<br>
}<br>
int input()
{   /* Integer value is returned from input() to calling function */<br>
    int n;<br>
    printf("Enter positive enter to check:\n");<br>
    scanf("%d",&n);<br>
    return n;<br>
}<br><br>

There is no argument passed to <i>input()</i> function But, the value of n is returned from <i>input()</i> to <i>main()</i> function.

<h3>Function with arguments and no return value</h3>

/*Program to check whether a number entered by user is prime or not using function with arguments and no return value */<br>
#include<<i>stdio.h</i>><br>
void check_display(int n);<br>
int main()<br>
{<br>
    int num;<br>
    printf("Enter positive enter to check:\n");<br>
    scanf("%d",&num);<br>
    check_display(num);  /* Argument num is passed to function. */<br>
    return 0;<br>
}<br>
void check_display(int n)
{     
/* There is no return value to calling function. Hence, return type of function is void. */<br>
    int i,flag;<br>
    for(i=2,flag=i;i<=n/2;++i,flag=i)<br>
    {<br>
    if(n%i==0)<br>
    {<br>
        printf("%d is not prime",n);<br>
        ++flag;<br>
        break;<br>
    }<br>
    }<br>
    if(flag==i)<br>
        printf("%d is prime",n);<br>
}<br><br>

Here, check_display() function is used for check whether it is prime or not and display it accordingly. Here, argument is passed to user-defined function but, value is not returned from it to calling function.

<h3>Function with argument and a return value</h3>

/* Program to check whether a number entered by user is prime or not using function with argument and return value */<br>
#include<<i>stdio.h</i>><br>
int check(int n);<br>
int main()<br>
{<br>
    int num,num_check=0;<br>
    printf("Enter positive enter to check:\n");<br>
    scanf("%d",&num);<br>
    num_check=check(num); /* Argument num is passed to check() function. */<br>
    if(num_check==1)<br>
       printf("%d in not prime",num);<br>
    else<br>
       printf("%d is prime",num);<br>
    return 0;<br>
}<br>
int check(int n)<br>
{<br>   
/* Integer value is returned from function check() */ <br>
    int i;<br>
    for(i=2;i<=n/2;++i)<br>
    {<br>
    if(n%i==0)<br>
        return 1;<br>
}<br>
   return 0;<br>
}<br><br>

Here, <i>check()</i> function is used for checking whether a number is prime or not. In this program, input from user is passed to function <i>check()</i> and integer value is returned from it. If input the number is prime, 0 is returned and if number is not prime, 1 is returned.
</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>
</body>
</html>
