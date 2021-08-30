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
        <title>Templates</title>
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
                <h1>Templates</h1>
            </div>
        </div>
<p>Templates in C++ programming allows function or class to work on more than one data type at once without writing different codes for different data types. Templates are often used in larger programs for the purpose of code reusability and flexibility of program. The concept of templetes can be used in two different ways:<br>
<ol>
    <li>Function Template</li>
    <li>Class Template</li>
</ol>
</p>

<h2>Function Template</h2>
<p>A function templates work in similar manner as function but with one key difference. A single function template can work on different types at once but, different functions are needed to perform identical task on different data types.</p>

<p>The general form of a template function definition is shown here:<br>
template <class type> ret-type func-name(parameter list)<br>
{<br>
// body of function<br>
}</p>

<p>Here, type is a placeholder name for a data type used by the function. This name can be used within the function definition.</p>

<h2>Class Template</h2>
<p>Just as we can define function templates, we can also define class templates. The general form of a generic class declaration is shown here:</p>

template <class type> class class-name<br>
{<br>
. <br>
. <br>
.<br>
}<br>

<p>Here, type is the placeholder type name, which will be specified when a class is instantiated. You can define more than one generic data type by using a comma-separated list. </p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
