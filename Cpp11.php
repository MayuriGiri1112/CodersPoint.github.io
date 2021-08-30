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
        <title>Structure</title>
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
                <h1>Structure</h1>
            </div>
        </div>
<p>In Array we can store data of one type only, but structure is a variable that gives facility of storing data of different data type in one variable.</p>


<p>
Structures are variables that have several parts; each part of the object can have different types.
Each part of the structure is called a member of the structure.</p>


<h2>
Declaration
</h2>

Consider basic data of student :
roll_no, class, name, age, address.<br><br>



A structure data type called student can hold all this information:<br>

struct student<br>
{<br>

int roll_no;<br>

char class
;<br>
char name[25];<br>

int age;<br>

char address[50];<br>

};<br><br>



before the final semicolon, At the end of the structure's definition, we can specify one or more structure variables.<br><br>



There is also another way of declaring variables given below,<br>

struct student s1;



<h2>Initialization</h2>


Structure members can be initialized at declaration. This is same as the initialization of arrays; the values are listed inside braces. The structure declaration is preceded by the keyword static.<br><br>



static struct student akki ={1234,''comp'',''akki'',20,''mumbai''};



<h2>Accessing structure data</h2>


To access a given member the dot notation is use. The ''dot'' is called the member access operator

<br><br>

struct student s1;<br>

s1.name = ''Akki'';<br>

s1.roll_no = 1234

;

<h2>scope</h2>


A structure type declaration can be local or global, depending upon where the declaration is made.



<h2>Structures as Function Arguments</h2>


You can pass a structure as a function argument in very similar way as you pass any other variable or pointer. You would access structure variables in the similar way as you have accessed in the above example



<h2>Pointers to Structures</h2>


You can define pointers to structures in very similar way as you define pointer to any other variable as follows:<br>

struct student *struct_pointer; 

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
