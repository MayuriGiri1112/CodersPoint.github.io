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
        <title>Data Types</title>
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
                <h1>Data Types</h1>
            </div>
    <p>Every variable in Java has a data type. Data types specify the size and type of values that can be stored.<br>
Data types in Java divided primarily in two types: <br>
    <ol><li>Primitive(intrinsic)</li> <li>Non-primitive.</li></ol></p>

<p><b>Primitive types</b> contains Integer, Floating points, Characters, Booleans And Non-primitive types contains Classes, Interface and Arrays.</p>

<p>
    <b>Integer:</b> This group includes byte, short, int and long, which are whole signed numbers.<br><br>
<b>Floating-point Numbers:</b> This group includes float and double, which represent number with fraction precision.<br><br>
<b>Characters:</b> This group includes char, which represents character set like letters and number.<br><br>
<b>Boolean:</b> This group includes Boolean, which is special type of representation of true or false value.
</p>

<p>Some data types with their range and size:<br>
    <b>byte :</b> -128 to 127 (1 byte)<br><br>

    <b>short :</b> -32,768 to +32,767 (2 bytes)<br><br>

    <b>int :</b> -2,147,483,648 to +2,147,483,647 (4 bytes)<br><br>

    <b>float :</b> 3.4e-038 to 1.7e+0.38 (4 bytes)<br><br>

    <b>double :</b> 3.4e-038 to 1.7e+308 (8 bytes)<br><br>

    <b>char :</b> holds only a single character(2 bytes)<br><br>

    <b>boolean :</b> can take only true or false (1 bytes)</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
