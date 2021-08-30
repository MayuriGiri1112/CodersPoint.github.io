<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Types</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("C_sidenav.php");
?>

<div class="main">
	<br>
        <?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Data Types</h1>
            </div>
            <p>
In C, variable(data) should be declared before it can be used in program. Data types are the keywords, which are used for assigning a type to a variable.

<h3>Data types in C</h3>
<ol>
    <li>Fundamental Data Types</li>
        <ul type="circle"> 
            <li>Integer types</li>
            <li>Floating Type</li>
            <li>Character types</li>
        </ul>
    <li>Derived Data Types</li>
        <ul type="circle">
            <li>Arrays</li>
            <li>Pointers</li>
            <li>Structures</li>
            <li>Enumeration</li>
        </ul>
</ol>
<h3>Syntax for declaration of a variable</h3>
data_type variable_name;

<h3>Integer data types</h3>
Keyword int is used for declaring the variable with integer type. For example:<br><br>

int var1;<br><br>

Here, var1 is a variable of type integer.<br><br>

The size of int is either 2 bytes(In older PC's) or 4 bytes. If you consider an integer having size of 4 byte( equal to 32 bits), it can take 2<sup>32</sup> distinct states as: -2<sup>31</sup>,-2<sup>31</sup>+1, ...,-2, -1, 0, 1, 2, ..., 2<sup>31</sup>-2, 2<sup>31</sup>-1<br><br>

Similarly, int of 2 bytes, it can take 216 distinct states from -2<sup>15</sup> to 2<sup>15</sup>-1. If you try to store larger number than 2<sup>31</sup>-1, i.e,+2147483647 and smaller number than -2<sup>31</sup>, i.e, -2147483648,  program will not run correctly.

<h3>Floating types</h3>
Variables of floating types can hold real values(numbers) such as: 2.34, -9.382 etc. Keywords either float or double is used for declaring floating type variable. For example:<br><br>

float var2;<br>
double var3;<br><br>
Here, both var2 and var3 are floating type variables.<br><br>

In C, floating values can be represented in exponential form as well. For example:<br><br>

float var3=22.442e2

<h3>Difference between float and double</h3>
Generally the size of float(Single precision float data type) is 4 bytes and that of double(Double precision float data type) is 8 bytes. Floating point variables has a precision of 6 digits whereas the the precision of double is 14 digits.<br><br>

<b>Note:</b> Precision describes the number of significant decimal places that a floating values carries.

<h3>Character types</h3>
Keyword char is used for declaring the variable of character type. For example:<br><br>

char var4='h';<br><br>

Here, var4 is a variable of type character which is storing a character 'h'.<br><br>

The size of char is 1 byte. The character data type consists of ASCII characters. Each character is given a specific value. For example:<br><br>

For, 'a', value =97<br>
For, 'b', value=98<br>
For, 'A', value=65<br>
For, '&', value=33<br>
For, '2', value=49<br>
<h3>Qualifiers</h3>
Qualifiers alters the meaning of base data types to yield a new data type.

<h3>Size qualifiers:</h3>

Size qualifiers alters the size of basic data type. The keywords long and short are two size qualifiers. For example:<br><br>

long int i;<br><br>

The size of int is either 2 bytes or 4 bytes but, when long keyword is used, that variable will be either 4 bytes of 8 bytes. If the larger size of  variable is not needed then, short keyword can be used in similar manner as long keyword.

<h3>Sign qualifiers:</h3>

Whether a variable can hold only positive value or both values is specified by sign qualifiers. Keywords signed and unsigned are used for sign qualifiers.<br><br>

unsigned int a;<br>
// unsigned variable can hold zero and positive values only <br><br>
It is not necessary to define variable using keyword signed because, a variable is signed by default. Sign qualifiers can be applied to only int and char data types. For a int variable of size 4 bytes it can hold data from -2<sup>31</sup> to 2<sup>31</sup>-1 but, if that variable is defined unsigned, it can hold data from 0 to 2<sup>32</sup> -1.

<h3>Constant qualifiers</h3>

Constant qualifiers can be declared with keyword const. An object declared by const cannot be modified.<br><br>

const int p=20;<br><br>
The value of p cannot be changed in the program.

<h3>Volatile qualifiers:</h3>

A variable should be declared volatile whenever its value can be changed by some external sources outside program. Keyword volatile is used to indicate volatile variable</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
