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
        <title>Basics of Classes</title>
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
                <h1>Basics of Classes</h1>
            </div>
        </div>
<p>Classes are an expanded concept of data structures: like data structures, they can contain data members, but they can also contain functions as members.<br>
    An object is an instantiation of a class. In terms of variables, a class would be the type, and an object would be the variable.</p>

            <p>Classes are defined using either keyword class or keyword struct, with the following syntax:<br>
class class_name<br> 
{<br>
access_specifier_1:<br>
member1;<br>
access_specifier_2:<br>
member2;<br>
...<br>
} object_names;</p>

            <p>Where class_name is a valid identifier for the class, object_names is an optional list of names for objects of this class. The body of the declaration can contain members, which can either be data or function declarations, and optionally access specifiers.</p>

            <p>Classes have the same format as plain data structures, except that they can also include functions and have these new things called access specifiers. An access specifier is one of the following three keywords: private, public or protected. These specifiers modify the access rights for the members that follow them:<br>
                <b>private</b> members of a class are accessible only from within other members of the same class (or from their "friends").<br>
                <b>protected</b> members are accessible from other members of the same class (or from their "friends"), but also from members of their derived classes.<br>
                Finally, <b>public</b> members are accessible from anywhere where the object is visible.</p>

            <p>By default, all members of a class declared with the class keyword have private access for all its members. Therefore, any member that is declared before any other access specifier has private access automatically.</p>

            <h2>Defining C++ Objects</h2>
            
<p>A class provides the blueprints for objects, so basically an object is created from a class. We declare objects of a class with exactly the same sort of declaration that we declare variables of basic types. Following statements declare two objects of class Box:
Box Box1;<br>
//Declare Box1 of type Box<br>
Box Box2;<br>
//Declare Box2 of type Box<br><br>

Both of the objects Box1 and Box2 will have their own copy of data members</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
