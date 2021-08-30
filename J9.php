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
        <title>TypeCasting</title>
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
                <h1>TypeCasting</h1>
            </div>
    <p>Casting is an operation that converts a value of one data type into a value of another data type. <br>
    The syntax for type casting is to give the target type in parenthesis followed by the variable name.</p>

    <p><b>Example:</b><br>
float f = (float) 10.1;<br>
Int i = (int)f; <br>
in this case, value of i is 10, the fractional part is discarded, while using type casting there is a chance of lost information that might lead to inaccurate result.</p>

    <p><b>Example:</b><br>
int i = 10000;<br>
byte s = (short) i;<br>
In this example value of s becomes 10, which is totally distorted, to ensure correctness; you can test if the value is in the correct target type range before using type casting. </p>

<p>Casts that results in no loss of information<br>
byte => short, char, int, long, float, double<br><br>

short => int, long, float, double<br><br>

char => int, long, float, double<br><br>

int => long, float, double<br><br>

long => float, double<br><br>

float => double</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
