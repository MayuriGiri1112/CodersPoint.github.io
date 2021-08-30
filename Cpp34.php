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
        <title>Data Abstraction</title>
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
                <h1>Data Abstraction</h1>
            </div>
        </div>
<p>Object Oriented Programming has a special feature called data abstraction. Data abstraction allows ignoring the details of how a data type is represented. While defining a class, both member data and member functions are described. However while using an object (that is an instance of a class) the built in data types and the members in the class are ignored. This is known as data abstraction. This can be seen from the above example.</p>

            <h2>Benefits of Data Abstraction</h2>
            <ol>
                <li>Class internals are protected from inadvertent user-level errors, which might corrupt the state of the object.</li>
                <li>The class implementation may evolve over time in response to changing requirements or bug reports without requiring change in user-level code.</li>
            </ol>

            <p>By defining data members only in the private section of the class, the class author is free to make changes in the data. If the implementation changes, only the class code needs to be examined to see what affect the change may have. If data are public, then any function that directly accesses the data members of the old representation might be broken.</p>

            <b>Example</b><br>
#include <iostream.h><br>
#include <conio.h><br>

class base<br>
{<br>
private: int s1,s2;<br>

public: void inp_val()<br>
{<br>
cout <<"input the values of s1 and s2 ";<br>
cin>>sl>>s2;<br>
}<br>

void display()<br>
{<br>
cout <<s1 <<" "<<s2<<"\n ";<br>
}<br>
};<br>

void main()<br>
{<br>
base b;<br>
b.inp_val();<br>
b.display();<br>
} <br>

<p>Above class takes numbers from user, and returns both. The public members inp_val and display are the interfaces to the outside world and a user needs to know them to use the class. The private members s1 & s2 are something that the user doesn't need to know about, but is needed for the class to operate properly.</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
