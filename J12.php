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
        <title>Operator Precedence</title>
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
                <h1>Operator Precedence</h1>
            </div>
    <p>Certain operators have higher priorities than others. Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. for example, the dot operator has higher precedence than the any other operator.</p>

    <h2>Precedence 15</h2>
    <p>
    <li>() Parentheses</li>
    <li>[] Array subscript</li>
    <li>· Member selection</li>
</p>


<h2>Precedence 14</h2>
<p>
<li>++ Unary post-increment</li>
<li>-- Unary post-decrement</li>
</p>


<h2>Precedence 13</h2>
<p>
<li>+ Unary plus</li>
<li>- Unary minus</li>
<li>++ Unary pre-increment</li>
<li>-- Unary pre-decrement</li>
<li>! Unary logical negation</li>
<li>~ Unary bitwise complement</li>
<li>(type) Unary type cast </li>
</p>

<h2>Precedence 12</h2>
<p>
<li>* Multiplication</li>
<li>/ Division</li>
<li>% Modulus</li>
</p>

<h2>Precedence 11</h2>
<p>
<li>+ Addition</li>
<li>- Subtraction</li>
</p>

<h2>Precedence 10</h2>
<p>
<li><< Bitwise left shift</li>
<li>>> Bitwise right shift with sign extension</li>
<li>>>> Bitwise right shift with zero extension</li>
</p>

<h2>Precedence 9</h2>
<p>
<li>< Relational less than</li>
<li>> Relational greater than</li>
<li><= Relational less than or equal</li>
<li>>= Relational greater than or equal</li>
<li>instanceof Type comparison (objects only)</li>
</p>

<h2>Precedence 8</h2>
<p>
<li>== Relational is equal to</li>
<li>!= Relational is not equal to</li>
</p>

<h2>Precedence 7</h2>
<li>& Bitwise AND</li>

<h2>Precedence 6</h2>
<li>^ Bitwise exclusive OR </li>

<h2>Precedence 5</h2>
<li>| Bitwise inclusive OR </li>

<h2>Precedence 4</h2>
<li>&& Logical AND</li>

<h2>Precedence 3</h2>
<li>|| Logical OR </li>

<h2>Precedence 2</h2>
<li>? : Ternary conditional</li>

<h2>Precedence 1</h2>
<p>
<li>= Assignment</li>
<li>+= Addition assignment</li>
<li>-= Subtraction assignment</li>
<li>*= Multiplication assignment</li>
<li>/= Division assignment</li>
<li>%= Modulus assignment</li>
</p>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
