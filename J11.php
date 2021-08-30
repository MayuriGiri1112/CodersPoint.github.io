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
        <title>Expression</title>
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
                <h1>Expression</h1>
            </div>
    <p>    Expressions perform operations on data and move data around. Some expressions will be evaluated for their results, some for their side effects, some for both.</p>

    <p>An assignment expression has the following form.
    <ol>
        <li>variable-expression</li> <li>assignment-operator expression</li>
    </ol></p>

    <p><b>The variable expression</b> can be just the name of a variable, or it can be an expression that selects a variable using array indices. The value type of the right-hand-side expression must be compatible with the variable type.</p>

    <p><b>An assignment expression</b> is most often used for its side effect: it changes the value of the variable selected by the variable expression to the value of the expression on the right-hand side. The value of the assignment expression is the value that is assigned to the selected variable. </p>

<p>An expression can have three kinds of result:
<ol>
<li>a value, such as the result of: (4 * i)</li>
<li>a variable, such as the result of: i = 4</li>
<li>nothing (in the case of an invocation of a method declared as void)</li>
</ol>
</p>

<p>In most common assignment expressions, the assignment operator is =. Then the assignment expression has the following form.<br>
    variable-expression = expression</p>

<p>The Java arithmetic and bitwise operators can be combined with = to form assignment operators. <br>
    For example, the += assignment operator indicates that the right-hand side should be added to the variable, and the *= assignment operator indicates that the right-hand side should be multiplied into the variable.</p>
        </div>
</div><br><br><br><br>
<?php
include("footer.php");
?>

</body>
</html>
