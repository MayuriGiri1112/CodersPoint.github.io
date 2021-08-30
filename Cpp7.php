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
        <title>Operators</title>
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
                <h1>Operators</h1>
            </div>
        </div>

            <p>An operator is a symbol. Compiler identifies Operator and performs specific mathematical or logical operation. C provides following operators :<br><br>

<ol>
<li>Arithmetic Operators</li>

<li>Logical Operators</li>

<li>Increment and Decrement Operators</li>

<li>Relational Operators
</li>
<li>Cast Operators</li>

<li>Bitwise Operators</li>

<li>Assignment Operators
</li>
<li>Misc</li>
</ol></p>



<h2>Arithmetic Operators</h2>

<ol>


<li><b>*</b>&nbsp multiplication
</li>
<li><b>/</b>&nbsp division
</li>
<li><b>%</b>&nbsp remainder after division (modulo arithmetic)</li>
<li><b>+</b>&nbsp addition
</li>
<li><b>-</b>&nbsp subtraction and unary minus</li>
</ol>

<h2>Logical Operators</h2>


<p><b>&&</b> Called Logical AND operator. If both the operands are non-zero, then condition becomes true.</p>


<p><b>
||</b> Called Logical OR Operator. If any of the two operands is non-zero, then condition becomes true.</p>


<p><b>
!</b> Called Logical NOT Operator. Use to reverses the logical state of its operand. If a condition is true, then Logical NOT operator will make false.</b>



<h2>Increment and Decrement Operators</h2>


<p>Increment and decrement operators are used to add or subtract 1 from the current value of oprand.</p>

<ol>



<li><b>++</b>&nbsp increment</li>

<li><b>--</b>&nbsp decrement</li>
</ol>



<p>Increment and Decrement operators can be prefix or postfix. In the prefix style the value of oprand is changed before the result of expression and in the postfix style the variable is modified after result.</p>



<b>For eg.</b><br>

a = 9;<br>

b = a++ + 5; /* a=10 b=14 */
<br>
a = 9;<br>

b = ++a + 5; /* a=10 b=15 */<br>



<h2>Relational Operators</h2>

<ol>

<li><b>==</b>&nbsp&nbsp equal.</li>

<li><b>!=</b>&nbsp&nbsp Not equal.</li>
<li><b>> <</b>&nbsp Greater than/less than
</li>
<li><b>>=</b>&nbsp greater than or equal to</li> 
<li><b>
<=</b>&nbsp less than or equal to</li>
</ol> 



<h2>Cast Operators</h2>


<p>Cast operators are used to convert a value from one to another type.<br>

(float) sum; &nbsp&nbsp  converts type to float<br>

(int) fred; &nbsp&nbsp  converts type to int

</p>

<h2>Bitwise Operators </h2>


<p>Bitwise operators performs operation on actual bits present in each byte of a variable. Each byte contain 8 bits, each bit can store the value 0 or 1</p>

<ol>
<li><b>

~</b> one's complement</li>
<li><b>&</b> bitwise AND
</li>
<li><b>^</b> bitwise XOR</li>
<li><b>
|</b> bitwise OR</li>
<li><b>
<<</b> left shift (binary multiply by 2)
</li>
<li><b>>></b> right shift (binary divide by 2)</li>
</ol>



<h2>Assignment Operators</h2>

<ol>

<li><b>=</b> assign
</li>
<li><b>+=</b> assign with add</li>

<li><b>-=</b> assign with subtract</li>

<li><b>*=</b> assign with multiply</li>

<li><b>/=</b> assign with divide
</li>
<li><b>%=</b> assign with remainder</li>

<li><b>>>=</b> assign with right shift</li>

<li><b><<=</b> assign with left shift</li>

<li><b>&=</b> assign with bitwise AND </li>

<li><b>^=</b> assign with bitwise XOR</li>

<li><b>|=</b> assign with bitwise OR</li>
</ol>


<p><b>
For example,</b><br>
a = a + 64; is same<br>
as 
a += 64;</p>



<h2>Misc</h2>


<b>sizeof</b><br>

The sizeof operator returns the size, in bytes, of a type or a variable.<br>

You can compile and run the following program to find out how large your data types are:
cout << "bool:\t\t" << sizeof(bool) << " bytes";
bool: 1 bytes<br><br>



<b>Condition ? X : Y
</b><br>
Condition operator: If Condition is true ? then it returns value X : otherwise value Y<br><br>



<b>,
</b><br>
Comma operator causes a sequence of operations to be performed. The value of the entire comma expression is the value of the last expression of the comma-separated list

.<br><br>

<b> (dot) and -> (arrow)</b><br>

Member operators are used to reference individual members of classes, structures, and unions.<br><br>



<b>&</b><br>
Pointer operator: & returns the address of an variable. <b>For example</b> &a; will give actual address of the variable.

<br><br>

<b>*</b><br>
Pointer operator: * is pointer to a variable. For example *var; will pointer to a variable var.</p>



</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
