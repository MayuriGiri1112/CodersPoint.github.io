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
        <title>Variables Scope</title>
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
                <h1>Variables Scope</h1>
            </div>
        </div>
        
            <p><b>Variables Scope</b> refers to where variables is declared.</p>

<p>

It can be Inside a function or a block which is called local variables, In the definition of function parameters which is called formal parameters or Outside of all functions which is called global variables.</p>


<h2>
Global variables</h2>



<p>Global variable are declared outside any functions, usually at top of program. they can be used by later blocks of code:<br><br>

int g;&nbsp&nbsp&nbsp&nbsp   //global<br>

int main(void)<br>

{<br>

g = 0;<br>

}</p>



<h2>Local variables

</h2>

<p>Variables that are declared inside a function or block are local variables. The scope of local variables will be within the function only. These variables are declared within the function and can't be accessed outside the function.
<br><br>

void main()<br>

{<br>

int g;&nbsp&nbsp&nbsp&nbsp //local<br>

g=2;<br>

cout << g;<br>

}</p>



</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
