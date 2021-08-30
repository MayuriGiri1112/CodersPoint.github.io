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
        <title>Structure of a Program</title>
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
                <h1>Structure of a Program.....</h1>
            </div>
        </div>
        <p>/* This Program prints Hello World on screen */<br><br>

#include<<i>iostream.h</i>><br>

using namespace std;<br>

int main ()<br>

{<br>

cout << "Hello World!";
return 0;<br>

}<br><br>


<ol>
  <li><b>/* This program ... */</b>
<br>
The symbols/* and*/ used for comment. This Comments are ignored by the compiler, and are used to provide useful information about program to humans who use it.
</li><br>

  <li><b>#include<<i>iostream.h</i>></b>
<br>
   This is a preprocessor command which tells compiler to include iostream.h file.

</li><br>

  <li><b>using namespace std;</b> <br>

    All the elements of the standard C++ library are declared within what is called a namespace, the namespace with the name std. So in order to access its functionality we declare with this expression that we will be using these entities. This line is very frequent in C++ programs that use the standard library.

</li><br>

   <li><b>main()</b><br>

C++ programs consist of one or more functions. There must be one and only one function called main. The brackets following the word main indicate that it is a function and not a variable.

</li><br>

  <li><b>{ }
</b><br>
braces surround the body of the function, which may have one or more instructions/statements.

</li><br>

  <li><b>Cout<<</b><br>

   it is a library function that is used to print data on the user screen.

</li><br>

  <li><b>''Hello World''</b> is a string that will be displayed on user screen.</li><br>

  <li><b>;</b> a semicolon ends a statement.

</li><br>

  <li><b>return 0;</b> return the value zero to the Operating system.</p>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
