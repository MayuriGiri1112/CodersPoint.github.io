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
        <title>IF-ELSE</title>
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
                <h1>IF-ELSE</h1>
            </div>

            <p>
            <h1>if, if..else and Nested if...else Statement</h1>
Decision making are needed when, the program encounters the situation to choose a particular statement among many statements. In C, decision making can be performed with following two statements.<br><br>

<ol>
    <li>if...else statement</li>
    <li>switch statement</li>
</ol>

<h1>if statement syntax</h1>

if (test expression0)<br>
{<br>
       statement/s to be executed if test expression is true;<br>
}<br><br>

If the test expression is true then, statements for the body if, i.e, statements inside parenthesis are executed. But, if the test expression is false, the execution of the statements for the body of if statements are skipped.<br><br>

<h3>Example of if statement</h3>

<h4>Write a C program to print the number entered by user only if the number entered is negative.</h4>

#include<<i>stdio.h</i>><br>
      int main()<br>
      {<br>
      int num;<br>
      printf("Enter a number to check.\n");<br>
      scanf("%d",&num);<br>
      if(num<0)       /* checking whether number is less than 0 or not. */<br> 
            printf("Number=%d\n",num);   <br>
/*If test condition is true, statement above will be executed, otherwise it will not be executed */<br>
      printf("The if statement in C programming is easy.");<br>
return 0;<br>
}<br><br>

<b>Output 1</b><br><br>

Enter a number to check.<br>
-2<br>
Number=-2<br>
The if statement in C programming is easy.<br><br>

When user enters -2 then, the test expression (num<0) becomes true. Hence, Number=-2 is displayed in the screen.<br><br>

<b>Output 2</b><br><br>

Enter a number to check.<br>
5<br>
The if statement in C programming is easy.<br><br>

When the user enters 5 then, the test expression (num<0) becomes false. So, the statement for body of if is skipped and only the statement below it is executed.<br><br>

<h1>if...else statement</h1>

The if...else statement is used, if the programmer wants to execute some code, if the test expression is true and execute some other code if the test expression is false.<br><br>

<h3>Syntax of if...else</h3>

if (test expression)<br>
{<br>
     statements to be executed if test expression is true;<br>
}<br>
else<br>
{<br>
     statements to be executed if test expression is false;<br>
}<br>     

<h3>Example of if...else statement</h3>

<h4>Write a C program to check whether a number entered by user is even or odd</h4>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
      int num;<br>
      printf("Enter a number you want to check.\n");<br>
      scanf("%d",&num);<br>
      if((num%2)==0)          //checking whether remainder is 0 or not.<br>
           printf("%d is even.",num);<br>
      else<br>
           printf("%d is odd.",num);<br>
      return 0;<br>
}<br><br>

<b>Output 1</b><br><br>

Enter a number you want to check.<br>
25<br>
25 is odd.<br><br>

<b>Output 2</b><br><br>

Enter a number you want to check.<br>
2<br>
2 is even.<br><br>

<h1>Nested if...else statement (if...elseif....else Statement)</h1>

The if...else statement can be used in nested form when a serious decision are involved.

<h3>Syntax of nested if...else statement.</h3>

if (test expression)<br>
{<br>
     statements to be executed if test expression is true;<br>
}<br>     
else<br>
{<br>
     if(test expression 1)<br>
          statements to be executed if test expressions 1 is true;<br>
       else <br>
          if (test expression 2)<br>
           .<br>
           .<br>
           .<br>
            else<br>
              statements to be executed if all test expressions are false;<br>
              
              <h4>How nested if...else works?</h4>

If the test expression is true, it will execute the code before else part but, if it is false, the control of the program jumps to the else part and check test expression 1 and the process continues. If all the test expression are false then, the last statement is executed.<br><br>

The ANSI standard specifies that 15 levels of nesting may be continued.

<h3>Example of nested if else statement</h3>

<h4>Write a C program to relate two integers entered by user using = or > or < sign.</h4>

#include<<i>stdio.h</i>><br>
int main()<br>
{ <br>
     int numb1, numb2;<br>
     printf("Enter two integers to check".\n);<br>
     scanf("%d %d",&numb1,&numb2); <br>
     if(numb1==numb2) //checking whether two integers are equal.<br>
          printf("Result: %d=%d",numb1,numb2); <br>
     else <br>
        if(numb1>numb2) //checking whether numb1 is greater than numb2. <br>
          printf("Result: %d>%d",numb1,numb2); <br>
        else <br>
          printf("Result: %d>%d",numb2,numb1); <br>
return 0; <br>
} <br><br>

<b>Output 1</b><br><br>

Enter two integers to check.<br>
5<br>
3<br>
Result: 5>3<br><br>

<b>Output 2</b><br><br>

Enter two integers to check.<br>
-4<br>
-4<br>
Result: -4=-4</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
