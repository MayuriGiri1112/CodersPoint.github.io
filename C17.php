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
        <title>User-Defined Functions</title>
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
                <h1>User-Defined Functions</h1>
            </div>
            <p>This chapter is the continuation to the function Introduction chapter.<br><br>

            <h3>Example of user-defined function</h3>
            
            <h4>Write a C program to add two integers. Make a function add to add integers and display sum in main() function.</h4>

/*Program to demonstrate the working of user defined function*/<br>
#include<<i>stdio.h</i>><br>
int add(int a, int b);           //function prototype(declaration)<br>
int main()<br>
{<br>
     int num1,num2,sum;<br>
     printf("Enters two number to add\n");<br>
     scanf("%d %d",&num1,&num2);<br>
     sum=add(num1,num2);         //function call <br>
     printf("sum=%d",sum); <br>
     return 0;<br>
}<br>
int add(int a,int b)            //function declarator<br>
{<br>             
/* Start of function definition. */<br>
     int add;<br>
     add=a+b;<br>
     return add;                  //return statement of function <br>
/* End of function definition. */   <br>
}<br><br>                                  

<h3>Function prototype(declaration):</h3>

Every function in C programming should be declared before they are used. These type of declaration are also called function prototype. Function prototype gives compiler information about function name, type of arguments to be passed and return type.<br><br>

<h3>Syntax of function prototype</h3>

return_type function_name(type(1) argument(1),....,type(n) argument(n));<br><br>

In the above example,int add(int a, int b); is a function prototype which provides following information to the compiler:<br><br>
<ol>
<li>name of the function is add()</li>
<li>return type of the function is int.</li>
<li>two arguments of type int are passed to function.</li>
</ol><br><br>
Function prototype are not needed if user-definition function is written before main() function.

<h3>Function call</h3>

Control of the program cannot be transferred to user-defined function unless it is called invoked).

<h3>Syntax of function call</h3>

function_name(argument(1),....argument(n));<br><br>

In the above example, function call is made using statement add(num1,num2); from main(). This make the control of program jump from that statement to function definition and executes the codes inside that function.

<h3>Function definition</h3>

Function definition contains programming codes to perform specific task.

<h4>Syntax of function definition</h4>

return_type function_name(type(1) argument(1),..,type(n) argument(n))<br>
{<br>
                //body of function<br>
}<br><br>

Function definition has two major components:<br><br>
<ol>
    <li>Function declarator</li>
    <li>Function body</li>
</ol>

<h4>1. Function declarator</h4>

Function declarator is the first line of function definition. When a function is invoked from calling function, control of the program is transferred to function declarator or called function.

<h5>Syntax of function declarator</h5>

return_type function_name(type(1) argument(1),....,type(n) argument(n))<br><br>

Syntax of function declaration and declarator are almost same except, there is no semicolon at the end of declarator and function declarator is followed by function body.<br><br>

In above example, int add(int a,int b) in line 12 is a function declarator.

<h4>2. Function body</h4>

Function declarator is followed by body of function which is composed of statements.

<h3>Passing arguments to functions</h3>

In programming, argument/parameter is a piece of data(constant or  variable) passed from a program to the function.<br><br>

In above example two variable, num1 and num2 are passed to function during function call and these arguments are accepted by arguments a and b in function definition. <br><br>

Arguments that are passed in function call and arguments that are accepted in function definition should have same data type. For example:<br><br>

If argument <i>num1</i> was of int type and <i>num2</i> was of float type then, argument variable a should be of type int and b should be of type float,i.e., type of argument during function call and function definition should be same.<br><br>

A function can be called with or without an argument.

<h4>Return Statement</h4>

Return statement is used for returning a value from function definition to calling function.

<h5>Syntax of return statement</h5>

return (expression);<br>
          OR<br>
     return;<br><br>   
     
     <b>For example:</b><br><br>

return;<br>
return a;<br>
return (a+b);<br><br>

In above example, value of variable add in add() function is returned and that value is stored in variable sum in main() function. The data type of expression in return statement should also match the return type of function</p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
