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
        <title>Constants</title>
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
                <h1>Constants</h1>
            </div>
        </div>
        <p><b>Constants</b> refer to fixed values in the code that you can't change and they are called literals.
Constants can be of any of the basic data types and can be divided into Integer literals, Floating-Point literals, Strings, Characters and Boolean Values.

</p>

<h2>Integer literals</h2>



<p>An Integer literal can be a decimal, octal, or hexadecimal constant.<br>

A prefix specifies the base or radix: 0x or 0X for hexadecimal, 0 for octal, and nothing for decimal.

<br><br>

<b>Example
</b><br>
45&nbsp&nbsp&nbsp&nbsp //decimal<br>

0213&nbsp&nbsp&nbsp&nbsp //octal
<br>
0x4b&nbsp&nbsp&nbsp&nbsp //hexadecimal</p>



<h2>Floating-point literals</h2>



<p>A floating-point literal has an integer part, a decimal point, a fractional part, and an exponent part. You can represent floating point literals either in decimal form or exponential form.

<br><br>

<b>Example</b><br>

3.14159<br>

314159E-5L</p>


<h2>
Boolean literals

</h2>

<p>There are two Boolean literals and they are part of standard C++ keywords:<br>

A value of true representing true.
?<br>
A value of false representing false.<br>

You should not consider the value of true equal to 1 and value of false equal to 0.</p>

<h2>

Character literals</h2>

<p>

A character literal can be a plain character (e.g., 'x'), an escape sequence (e.g., '\t'), or a universal character (e.g., '\u02C0').</p>


<p><b>Escape sequence & Meaning
</b><br>
There are several character escape sequences which can be used in place of a character constant or within a string.<br><br>

 
\a alert (bell)
<br>
\b backspace<br>

\f formfeed
<br>
\n newline
<br>
\r carriage return
<br>
\t tab
<br>
\v vertical tab<br>

\ backslash
<br>
\? question mark
<br>
\' quote<br>

\'' double quote<br>

\ooo character specified as an octal number
<br>
\xhh character specified in hexadecimal</p>



<h2>String literals</h2>



<p>String literals are enclosed in double quotes. A string contains characters that are similar to character literals: plain characters, escape sequences, and universal characters.

</p>

<p>You can break a long line into multiple lines using string literals and separate them using whitespaces.

</p>

<p>Here are some examples of string literals. All the three forms are identical strings.<br><br>


"hello, dear"<br>

"hello, \
dear"<br>

"hello, ""d""ear"</p>



<h2>Defining Constants

</h2>

<p>There are two ways in C++ to define constants:<br>

<ol>
  <li>Using #define preprocessor.
</li>
  <li>Using const keyword.</li>
</ol></p>


<p><b>
The #define Preprocessor:</b><br>

Following is the form to use #define<br>
 preprocessor to define a constant:<br>

#define identifier value

<br><br>

<b>Example:</b>
<br>
#include<iostream>
<br>
using namespace std;<br>

#define WIDTH 5<br>

#define LENGTH 10

<br><br>

<b>The const Keyword:</b><br>

You can use const prefix to declare constants with a specific type as follows:<br>

const type variable = value;

<br><br>

<b>Example:</b><br>

#include&ly;iostream><br>

using namespace std;<br>

int main()<br>

{<br>

const int LENGTH =10;<br>

const int WIDTH =5;<br>

}</p>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
