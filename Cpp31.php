<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Function Overloading</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("Cpp_sidenav.php");
?>

<div class="main">
<br>
<?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Function Overloading</h1>
            </div>
        </div>
<p>You can have multiple definitions for the same function name in the same scope. The definition of the function must differ from each other by the types and/or the number of arguments in the argument list. You can not overload function declarations that differ only by return type.</p>

            // overloading functions<br>
#include <iostream.h><br>
using namespace std;<br><br>

int add (int a, int b)<br>
{<br>
return (a+b);<br>
}<br><br>

double add (double a, double b)<br>
{<br>
return (a+b);<br>
}<br><br>

int main ()<br>
{<br>
int x=5,y=2;<br>
double n=5.0,m=2.5;<br><br>

cout << add(x,y) << '\n';<br>
cout << add(n,m) << '\n';<br>
return 0;<br>
}<br><br>

<b>o/p:</b><br>
7<br>
7.5<br>

<p>In this example, there are two functions called add, but one of them has two parameters of type int, while the other has them of type double. The compiler knows which one to call in each case by examining the types passed as arguments when the function is called. If it is called with two int arguments, it calls to the function that has two int parameters, and if it is called with two doubles, it calls the one with two doubles.</p>

<b>Note :</b> A function cannot be overloaded only by its return type. At least one of its parameters must have a different type.

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
