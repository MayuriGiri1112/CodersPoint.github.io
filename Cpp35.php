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
        <title>Data Encapsulation</title>
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
                <h1>Data Encapsulation</h1>
            </div>
        </div>
<p>Encapsulation is the method of combining the data and functions inside a class. This hides the data from being accessed from outside a class directly, only through the functions inside the class is able to access the information.</p>

            <p>This is also known as "Data Abstraction", as it gives a clear separation between properties of data type and the associated implementation details. There are two types, they are "function abstraction" and "data abstraction". Functions that can be used without knowing how its implemented is function abstraction. Data abstraction is using data without knowing how the data is stored.</p>

            <p>C++ supports the properties of encapsulation and data hiding through the creation of user-defined types, called classes. We know that class can have private, protected and public members. By default, all items defined in a class are private. <br>
                <b>For example:</b><br>
                        class add<br>
                        {<br>
                        public:<br>
                        double getadd(void)<br>
                        {<br>
                        return no1 + no2;<br>
                        }<br>
                        private:<br>
                        double no1; double no2;<br>
                        };<br>
                        The variables no1 & no2 are private. This means that they can be accessed only by other members of the add class, and not by any other part of your program. This is one way encapsulation is achieved.</p>

            <p>To make parts of a class public (i.e., accessible to other parts of your program), you must declare them after the public keyword. All variables or functions defined after the public specifier are accessible by all other functions in your program.</p>

            <p>Making one class a friend of another exposes the implementation details and reduces encapsulation. The ideal is to keep as many of the details of each class hidden from all other classes as possible. </p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
