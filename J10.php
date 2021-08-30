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
include("Java_sidenav.php");
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
    <p>Java provides a rich set of operators to manipulate variables. We can divide all the Java operators into the following groups:
    <ol>
        <li>Arithmetic Operators</li>
<li>Relational Operators</li>
<li>Bitwise Operators</li>
<li>Logical Operators</li>
<li>Assignment Operators</li>
<li>Misc Operators</li>
    </ol>
    </p>

    <h2>Arithmetic Operators:</h2>
<p>Arithmetic operators are used in mathematical expressions in the same way that they are used in algebra.
arithmetic operators:
<ul>
<li>+ Additive operator (also used for String concatenation)</li>
<li>- Subtraction operator</li>
<li>* Multiplication operator</li>
<li>/ Division operator</li>
<li>% Remainder operator</li>
</ul>
</p>

<h2>Relational Operators:</h2>
<p>There are following relational operators supported by Java language
<ul>
<li>> Greater than</li>
<li>< Less than</li>
<li>== Equal to</li>
<li>!= Not equal to</li>
<li>>= Greater than or equal to</li>
<li><= Less than or equal to</li>
</ul>
</p>

<h2>Bitwise Operators:</h2>
<p>Java defines several bitwise operators, which can be applied to the integer types, long, int, short, char, and byte.
Bitwise operator works on bits and performs bit-by-bit operation. 
<ul>
<li>~ Unary bitwise complement
<li><< Signed left shift</li>
<li>>> Signed right shift</li>
<li>>>> Unsigned right shift & Bitwise AND</li>
<li>^ Bitwise exclusive OR</li>
<li>| Bitwise inclusive OR</li>
</ul>
</p>

<h2>Logical Operators:</h2>
<p>The following table lists the logical operators:
<ul>
<li>&& Conditional-AND</li>
<li>|| Conditional-OR</li>
<li>?: Ternary (shorthand for if-then-else statement)</li>
</ul>
</p>

<h2>Assignment Operators:</h2>
<p>
There are following assignment operators supported by Java language:
<ul>
<li>= Simple assignment operator</li>
<li>+= Add AND assignment operator</li>
<li>-= Subtract AND assignment operator</li>
<li>*= Multiply AND assignment operator</li>
<li>/= Divide AND assignment operator</li>
<li>%= Modulus AND assignment operator</li>
<li><<= Left shift AND assignment operator.</li>
<li>>>= Right shift AND assignment operator</li>
<li>&= Bitwise AND assignment operator.</li>
<li>^= bitwise exclusive OR and assignment operator.</li>
<li>|= bitwise inclusive OR and assignment operator.</li>
</ul>
</p>

<h2>Increment and Decrement Operators</h2>
<p>
Increment and decrement operators are used to add or subtract 1 from the current value of oprand.
<ul>
<li>++ increment</li>
<li>-- decrement</li>
</ul>
</p>

<p>Increment and Decrement operators can be prefix or postfix. <br>
In the prefix style the value of oprand is changed before the result of expression and in the postfix style the variable is modified after result. <br> <br>

<b>For eg.</b><br>
a = 9;<br>
b = a++ + 5;<br>
/* a=10 b=14 */ <br> <br>

a = 9;<br>
b = ++a + 5;<br>
/* a=10 b=15 */
</p>

<h2>Miscellaneous Operators</h2>
<p>
There are few other operators supported by Java Language.
<ul>
    <li><b>Conditional Operator ( ? : )</b></li>
Conditional operator is also known as the ternary operator.
The operator is written as:
variable x = (expression) ? value if true : value if false

<li><b>Instance of Operator:</b></li>
This operator is used only for object reference variables.
instanceof operator is wriiten as:
( Object reference variable ) instanceof (class/interface type)
</ul>
</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
