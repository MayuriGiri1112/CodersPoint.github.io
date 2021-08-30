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
        <title>Enumeration and Typedef</title>
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
                <h1>Enumeration and Typedef</h1>
            </div>
        </div>
<p>C++ allows us to create own own data types. 
enumerated type is the simplest method for doing so.<br>

An enumerated type is a data type where every possible value is defined as a symbolic constant (called an enumerator). enum keyword is used to declare Enumerated types.</p> 


<b>
Example:</b><br>

//define a new enum named Brand<br>

enum Brand<br>

{<br>

//Here are the enumerators<br>

//These define all the possible values this type can hold<br>

Brand_LEE,<br>

Brand_Reebok,<br>

Brand_Cooper,<br>

Brand_Fila<br>

};<br><br>



//Declare a variable of enumerated type Brand<br>

Brand a_Brand = Brand_Fila;<br><br>



<p>Memory is not allocated while defining an enumerated type.<br>

When a variable of the enumerated type is declared (such as a_Brand in the example above), memory is allocated for that variable at that time.</p>


<p>
Enum variables are the same size as an int variable.<br>

This is because each enumerator is automatically assigned an integer value based on it’s position in the enumeration list.<br>

By default, the first enumerator is assigned the integer value 0, and each subsequent enumerator has a value one greater than the previous enumerator:</p>



enum Brand<br>

{<br>

Brand_LEE,&nbsp&nbsp&nbsp // assigned 0
<br>
Brand_Reebok,&nbsp&nbsp&nbsp // assigned 1<br>

Brand_Cooper,&nbsp&nbsp&nbsp // assigned 2<br>

Brand_Fila&nbsp&nbsp&nbsp // assigned 3<br>

};<br><br>



Brand a_Brand= Brand_Fila;<br>

cout << a_Brand;
<br>
The cout statement above prints the value 3.<br><br>



<p>We can explicitly define the value of enumerator. 
Value of enumerator can be positive or negative and can be non-unique.
Any non-defined enumerators are given a value one greater than the previous enumerator.</p>



//define a new enum named Brand<br>

enum Brand<br>

{<br>

Brand_LEE = -3,<br>

Brand_Reebok,&nbsp&nbsp&nbsp // assigned -2<br>

Brand_Cooper,&nbsp&nbsp&nbsp // assigned -1<br>

Brand_Fila = 5,<br>

Brand_Nike&nbsp&nbsp&nbsp // assigned 6<br>

};



<h2>typedef</h2>


<p>
Typedefs allow the programmer to create an alias for a data type, and use the aliased name instead of the actual type name. To declare a typedef, simply use the typedef keyword, followed by the type to alias, followed by the alias name:</p>



typedef long Binary;<br>

//define Binary as an alias for long<br><br>



//The following two statements are equivalent:
long number;<br>

Binary number;<br>

<p>A typedef does not define new type, but is just another name for an existing type. A typedef can be used anywhere a regular type can be used.</p>


<p>
Typedefs are used mainly for documentation and legibility purposes.<br>
Data type names such as char, int, long, double, and bool are good for describing what type of variable something is, but more often we want to know what purpose a variable serves.</p>


<p>
In the above example, long number does not give us any clue what type number is holding. 
Is it Binary, Hexadecimal, Octal or some other type? Binary number makes it clear what the type of number is.</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
