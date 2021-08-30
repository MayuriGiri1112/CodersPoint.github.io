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
        <title>Operator Overloading</title>
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
                <h1>Operator Overloading</h1>
            </div>
        </div>
<p>Operator overloading is an important concept in C++. It is a type of polymorphism in which an operator is overloaded to give user defined meaning to it. Overloaded operator is used to perform operation on user-defined data type.</p>

            <p>Overloaded operators are functions with special names the keyword operator followed by the symbol for the operator being defined. Like any other function, an overloaded operator has a return type and a parameter list.</p>

<p>Almost any operator can be overloaded in C++. However there are few operator which can not be overloaded. Operator that are not overloaded are follows
<ol><li>scope operator - ::</li>
<li>sizeof</li>
<li>member selector - .</li>
<li>member pointer selector - *</li>
<li>ternary operator - ?:</li><ul></p>

<h3>Syntax?</h3>
Return_type class_name :: operator operator_symbol(argument_list)<br>
{<br>
//function body<br>
}<br><br>

here operator is keyword and operator_symbol is operator to be overloaded.

<h2>Implementing Operator Overloading</h2>

<p>Operator overloading can be done by implementing a function which can be :
<ol><li>Member Function</li>
<li>Non-Member Function</li>
<li>Friend Function/</li></ol></p>

<p>Operator overloading function can be a member function if the Left operand is an Object of that class, but if the Left operand is different, then Operator overloading function must be a non-member function.<br>
    Operator overloading function can be made friend function if it needs access to the private and protected members of class.</p>

<h3>Restrictions on Operator Overloading</h3>

<p>Following are some restrictions to be kept in mind while implementing operator overloading.<br>

<ol><li>Precedence and Associativity of an operator cannot be changed.</li>
    <li>Arity (numbers of Operands) cannot be changed. Unary operator remains unary, binary remains binary etc.</li>
    <li>No new operators can be created, only existing operators can be overloaded.</li>
<li>Cannot redefine the meaning of a procedure. You cannot change how integers are added.</li></ol> </p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
