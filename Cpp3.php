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
        <title>Variables</title>
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
                <h1>Variables</h1>
            </div>
        </div>

            <p>A variable in C++ is a name for a piece of memory that can be used to store information.
There are many types of variables, which determines the size and layout of the variable's memory;</p>



<h2>Variable Names</h2>



<p>We can use any combination of letters and numbers for Variable and function names but it must start with a letter.<br>

We can use Underscore (_) as a letter in variable name and can begin with an underscore But Identifiers beginning with an underscore are reserved, And identifiers beginning with an underscore followed by a lower case letter are reserved for file scope identifiers Therefore using underscore as starting letter is not desirable.</p>


<p><b>
Akki</b> and <b>akki</b> are different identifiers because upper and lower case letters are treated as different identifiers.</p>



<h2>Variable Types</h2>


There are many 'built-in' data types in C.



<ol>
  <li>short int -128 to 127 (1 byte)

</li>
  <li>unsigned short int 0 to 255 (1 byte)</li>
  <li>

char 0 to 255 or -128 to +127 (1 byte)

</li>
  <li>unsigned char 0 to 255 (1 byte)

</li>
  <li>signed char -128 to 127 (1 byte)

</li>
  <li>int -32,768 to +32,767 (2 bytes)

</li>
  <li>unsigned int 0 to +65,535 (2 bytes)</li>
  <li>

long int -2,147,483,648 to +2,147,483,647 (4 bytes)</li>
  <li>unsigned long int 0 to 4,294,967,295 (4 bytes)</li>
  <li>

float single precision floating point (4 bytes)

</li>
  <li>double double precision floating point (8 bytes)</li>
  <li>

long double extended precision floating point (10 bytes)


</li>
</ol>

<h2>Definition, Declaration & Initialization</h2>



<p><b>Definition</b> is the place where variable is created (allocated storage).</p>



<p><b>Declaration</b> is a place where nature (type) of variable is stated, but no storage is allocated.</p>



<p><b>Initialization</b> means assigning a value to the variable.

</p>

<p>Variables can be declared many times, but defined only once. Memory space is not allocated for a variable while declaration. It happens only on variable definition.

</p>

<p><b>Variable declaration
</b>
Syntax<br>
data_type variable_name;

<br><br>

example<br>

int a, b, c;<br>

char flag;</p>


<p><b>
Variable initialization</b>

syntax
<br>
data_type variable_name = value;<br><br>



example<br>

int a = 50;<br>

char flag = 't';<br><br>



external and static<br>

initialisation done once only.<br><br>



auto and register<br>

initialisation done each time block is entered.</p>


<p>
external and static variables cannot be initialised with a value that is not known until run-time; the initialiser must be a constant expression.</p>


<p>
A variable that has not been assigned a value is called an uninitialized variable. Uninitialized variables are very dangerous because they cause intermittent problems (due to having different values each time you run the program). This can make them very hard to debug.</p>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>