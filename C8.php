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
        <title>Precedence and Associtivity of Operators</title>
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
                <h1>Precedence and Associtivity of Operators</h1>
            </div>
<p>
            <h1>Precedence of operators</h1>
            
            If more than one operators are involved in an expression then, C language has predefined rule of priority of operators. This rule of priority of operators is called operator precedence.<br><br>

In C, precedence of arithmetic operators(*,%,/,+,-) is higher than relational operators(==,!=,>,<,>=,<=) and precedence of relational operator is higher than logical operators(&&, || and !). Suppose an expression:<br><br>

(a>b+c&&d)<br><br>

This expression is equivalent to:<br>
((a>(b+c))&&d)<br>
i.e, (b+c) executes first<br>
then, (a>(b+c)) executes<br>
then, (a>(b+c))&&d) executes<br>

<h1>Associativity of operators</h1>

Associativity indicates in which order two operators of same precedence(priority) executes. Let us suppose an expression:<br><br>

a==b!=c<br><br>

Here, operators == and != have same precedence. The associativity of both == and != is left to right, i.e, the expression in left is executed first and execution take pale towards right. Thus, a==b!=c equivalent to :<br><br>

(a==b)!=c<br><br>

The table below shows all the operators in C with precedence and associativity.<br><br>

<b>Note:</b> Precedence of operators decreases from top to bottom in the given table.<br><br>

<center>Summary of C operators with precedence and associativity</center><br>

<table class="e">
    <tbody>
        <tr class="f">
            <th class="f">Operator</th>                  
            <th class="f">Meaning of operator</th>                                                                                  
            <th class="f">Associativity</th>
        </tr>
        <tr class="f"><td class="f">()<br>[]<br>-><br>.</td>  <td class="f">Functional call<br>Array element reference<br>Indirect member selection<br>Direct member selection</td> <td class="f">Left to right</td></tr>
        <tr class="f">
            <td class="f">!<br>
                ~<br>
                +<br>
                -<br>
                ++<br>
                --<br>
                &<br>
                *<br>
                sizeof<br>
                (type)
            </td> 
            <td class="f"> 
                Logical negation<br>
                Bitwise(1 's) complement<br>
                Unary plus<br>
                Unary minus<br>
                Increment<br>
                Decrement<br>
                Dereference Operator(Address)<br>
                Pointer reference<br>
                Returns the size of an object<br>
                Type cast(conversion)
            </td> 
            <td class="f">
                Right to left
            </td>
        </tr>
<tr class="f">
    <td class="f">
        *<br>
        /<br>
        %
    </td>
    <td class="f">
        Multiply<br>
        Divide<br>
        Remainder
    </td>
    <td class="f">
        Left to right
    </td>
</tr>
<tr class="f">
    <td class="f">+<br>
        -
    </td>
    <td class="f">
        Binary plus(Addition)<br>
        Binary minus(subtraction)
    </td>
    <td class="f">
        Left to right
    </td>
</tr>
<tr class="f">
    <td class="f"><<<br>
        >>
    </td>
    <td class="f">
        Left shift<br>
        Right shift
    </td>
    <td class="f">
        Left to right
    </td>
</tr>
<tr class="f">
    <td class="f">
        <<br>
        <=<br>
        ><br>
        >=
    </td>
    <td class="f">
        Less than<br>
        Less than or equal<br>
        Greater than<br>
        Greater than or equal
    </td>
    <td class="f">
        Left to right
    </td>
</tr>
<tr class="f">
    <td class="f">
        ==<br>
        !=
    </td>
    <td class="f">
        Equal to<br>
        Not equal to
    </td>
    <td class="f">
        Left to right
    </td>
</tr>
<tr class="f"><td class="f">&</td>  <td class="f">Bitwise AND</td>            <td class="f">Left to right</td></tr>
<tr class="f"><td class="f">^</td>  <td class="f">Bitwise exclusive OR</td> <td class="f">Left to right</td></tr>
<tr class="f"><td class="f">|</td>  <td class="f">Bitwise OR</td>             <td class="f">Left to right</td></tr>
<tr class="f"><td class="f">&&</td> <td class="f">Logical AND</td>            <td class="f">Left to right</td></tr>
<tr class="f"><td class="f">||</td> <td class="f">Logical OR</td>             <td class="f">Left to right</td></tr>
<tr class="f"><td class="f">?:</td> <td class="f">Conditional Operator</td> <td class="f">Left to right</td></tr>
<tr class="f">
    <td class="f">
        =<br>
        *=<br>
        /=<br>
        %=<br>
        -=<br>
        &=<br>
        ^=<br>
        |=<br>
        <<=<br>
        >>=
    </td> 
    <td class="f">
        Simple assignment<br>
        Assign product<br>
        Assign quotient<br>
        Assign remainder<br>
        Assign sum<br>
        Assign difference<br>
        Assign bitwise AND<br>
        Assign bitwise XOR<br>
        Assign bitwise OR<br>
        Assign left shift<br>
        Assign right shift
    </td> 
    <td class="f">
        Right to left
    </td>
</tr>
<tr class="f">
    <td class="f">,</td>  
    <td class="f">Separator of expressions</td> 
    <td class="f">Left to right</td>
</tr>
    </tbody>
</table>
</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
