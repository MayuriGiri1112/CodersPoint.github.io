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
        <title>Storage Class</title>
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
                <h1>Storage Class</h1>
            </div>
            
            <p>Every variable and function in C programming has two properties: type and storage class. Type refers to the data type of variable whether it is character or integer or floating-point value etc.<br><br>

There are 4 types of storage class:<br>
            <ol>
                <li>automatic</li>
                <li>external</li>
                <li>static</li>
                <li>register</li>
            </ol>

            <h3>Automatic storage class</h3>
            
            <h4>Keyword for automatic variable</h4>
            
            auto<br><br>
            
Variables declared inside the function body are automatic by default. These variable are also known as local variables as they are local to the function and doesn't have meaning outside that function<br><br>

Since, variable inside a function is automatic by default, keyword auto are rarely used.

<h3>External storage class</h3>

External variable can be accessed by any function. They are also known as global variables. Variables declared outside every function are external variables.<br><br>

In case of large program, containing more than one file, if the global variable is declared in file 1 and that variable is used in file 2 then, compiler will show error. To solve this problem, keyword extern is used in file 2 to indicate that, the variable specified is global variable and declared in another file.

<h4>Example to demonstrate working of external variable</h4>

#include<<i>stdio.h</i>><br>   
void Check();<br>
int a=5;    
/* a is global variable because it is outside every function */<br>
int main()<br>
{<br>
    a+=4;<br>
    Check();<br>
    return 0;<br>
}v

void Check()<br>
{<br>
   ++a;<br>
/*  ----- Variable a is not declared in this function but, works in any function as they are global variable -------  */<br>
   printf("a=%d\n",a);<br>
}<br><br>

<b>Output</b><br><br>

a=10<br><br>

<h3>Register Storage Class</h3>

<h4>Keyword to declare register variable</h4>

register<br><br>

<h4>Example of register variable</h4>

register int a;<br><br>

Register variables are similar to automatic variable and exists inside that particular function only.<br><br>

If the compiler encounters register variable, it tries to store variable in microprocessor's register rather than memory. Value stored in register are much faster than that of memory.<br><br>

In case of larger program, variables that are used in loops and function parameters are declared register variables.<br><br>

Since, there are limited number of register in processor and if it couldn't store the variable in register, it will automatically store it in memory.

<h3>Static Storage Class</h3>

The value of static variable persists until the end of the program. A variable can be declared static using keyword: static. For example:<br><br>

static int i;<br><br>

Here, <i>i</i> is a static variable.<br><br>

<b>Example to demonstrate the static variable</b><br><br>

#include<<i>stdio.h</i>><br>
void Check();<br>
int main()<br>
{<br>
   Check();<br>
   Check();<br>
   Check();<br>
}<br>
void Check()<br>
{<br>
    static int c=0;<br>
    printf("%d\t",c);<br>
    c+=5;<br>
}<br><br>

<b>Output</b><br><br>

0      5     10<br>

During first function call, it will display 0. Then, during second function call, variable c will not be initialized to 0 again, as it is static variable. So, 5 is displayed in second function call and 10 in third call.<br><br>

If variable c had been automatic variable, the output would have been:<br>

0     0     0</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
