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
        <title>Polymorphism and Virtual Functions</title>
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
                <h1>Polymorphism and Virtual Functions</h1>
            </div>
        </div>
<h2>Polymorphism</h2>
            <p>"Poly" means "many" and "morph" means "form". Polymorphism is the ability of an object (or reference) to assume (be replaced by) or become many different forms of object. Typically, polymorphism occurs when there is a hierarchy of classes and they are related by inheritance.</p>

            <p>C++ polymorphism means that a call to a member function will cause a different function to be executed depending on the type of object that invokes the function.<br>
                <b>Example:</b> Function overloading, virtual functions. Another example can be a plus + sign, used for adding two integers or for using it to concatenate two strings. </p>

            <h2>Virtual Function:</h2>
            <p>A virtual function is a function in a base class that is declared using the keyword virtual. Defining in a base class a virtual function, with another version in a derived class, signals to the compiler that we don't want static linkage for this function.</p>
            <p>What we do want is the selection of the function to be called at any given point in the program to be based on the kind of object for which it is called. This sort of operation is referred to as dynamic linkage, or late binding.</p>

            class Shape <br>
{<br>
protected:<br>
int width, height;<br><br>

public:<br>
Shape( int a=0, int b=0)<br>
{<br>
width = a;<br>
height = b;<br>
}<br><br>

// pure virtual function<br>
virtual int area() = 0;<br>
};<br>

<h3>Important Points to Remember</h3>
<ol>
    <li>Only the Base class Method's declaration needs the Virtual Keyword, not the definition.</li>
    <li>If a function is declared as virtual in the base class, it will be virtual in all its derived classes.</li>
    <li>The address of the virtual Function is placed in the VTABLE and the copiler uses VPTR(vpointer) to point to the Virtual Function.</li>
</ol>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
