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
        <title>Reference</title>
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
                <h1>Reference</h1>
            </div>
        </div>


<p>References are another variable type of C++ that act as an alias or short name to another variable. A reference variable acts just like the original variable it is referencing. References are declared by using an ampersand (&) between the reference type and the variable name.</p>


<h2>
Declaration</h2>


int distance = 5;<br>

// normal integer<br>

int &ref = distance;<br> 

// reference to distance<br>

The ampersand in this context does not mean “address of”, it means “reference to”. 



<h2>Use of reference</h2>


distance = 6;<br>

//distance is now 6<br>

ref = 7;<br>

//distance is now 7<br><br>



cout << distance;<br>
// prints 7
<br>
distance++;<br>

cout << ref;<br>
//prints 8<br><br>


Using the address-of operator on a reference returns the address of the value being referenced:<br>

cout << &distance;<br>
//prints 0012FF7C<br>

cout << &ref;<br>
//prints 0012FF7C



<h2>Const references</h2>


It is possible to declare a const reference. A const reference will not let you change the value it references:<br>
int distance = 5;<br>

const int &ref = distance;<br>


ref = 6; &nbsp&nbsp// illegal -- ref is const

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
