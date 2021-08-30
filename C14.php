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
        <title>Switch Statement</title>
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
                <h1>Switch Statement</h1>
            </div>

            <p>
                Decision making are needed when, the program encounters the situation to choose a particular statement among many statements. If a programmar has to choose one among many alternatives if...else can be used but, this makes programming logic complex. This type of problem can be handled in C programming using switch...case statement.<br><br>

                <h3>Syntax of switch...case</h3>
                        
switch (expression)<br>
{<br>
case constant1:<br>
   codes to be executed if expression equals to constant1;
   break;<br>
case constant2:<br>
   codes to be executed if expression equals to constant3;<br>
   break;<br>
   .<br>
   .<br>
   . <br>
default:<br>
   codes to be executed if expression doesn't match to any cases;<br>
}<br><br>

In switch...case, expression is either an integer or a character. If the value of switch expression matches any of the constant in case, the relevant codes are executed and control moves out of the switch...case statement. If the expression doesn't matches any of the constant in case, then the default statement is executed.<br><br>

<h3>Example of switch...case statement</h3>

<h4>Write a program that asks user an arithmetic operator('+','-','*' or '/') and two operands and perform the corresponding calculation on the operands.</h4>

/* C program to demonstrate the working of switch...case statement */<br>
/* Program to create a simple calculator for addition, subtraction, multiplication and division */<br>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
     char operator;<br>
     float num1,num2;<br>
     printf("Enter operator +, - , * or / :\n");<br>
     operator=getche();<br>
     printf("\nEnter two operands:\n");<br>
     scanf("%f%f",&num1,&num2);<br>
     switch(operator)v                              
     {<br>
     case '+':<br>
              printf("num1+num2=%.2f",num1+num2);<br>
              break;<br>
     case '-':<br>
              printf("num1-num2=%.2f",num1-num2);<br>
              break;<br>
     case '*':<br>
              printf("num1*num2=%.2f",num1*num2);<br>
              break;<br>
     case '/':<br>
              printf("num2/num1=%.2f",num1/num2);<br>
              break;<br>
     default:<br>                                 
/* if operator is other than +, -, * or /, error message is shown */<br>
              printf("Error! operator is not correct");<br>
              break;<br>
     }<br>
     return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter operator +, -, * or / :<br>
/<br>
Enter two operators:<br>
34<br>
3<br>
num2/num1=11.33<br><br>

Notice break statement at the end of each case, which cause switch...case statement to exit. If break statement are not used, all statements below that case statement are also executed.</p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
