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
        <title>Friend Function</title>
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
                <h1>Friend Function</h1>
            </div>
        </div>
<p>A friend function of a class is defined outside that class' scope but it has the right to access all private and protected members of the class. Even though the prototypes for friend functions appear in the class definition, friends are not member functions.</p>

            <p>A friend can be a function, function template, or member function, or a class or class template, in which case the entire class and all of its members are friends.</p>

            <p>To declare a function as a friend of a class, precede the function prototype in the class definition with keyword friend as follows:<br>
class ABC<br>
{<br>
double a;<br>
public:<br>
double b;<br>
friend void printWidth( ABC abc );<br>
void setWidth( double c );<br>
};</p>

<p>To declare all member functions of class XYZ as friends of class ABC, place a following declaration in the definition of class ABC:<br>
    friend class XYZ;</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
