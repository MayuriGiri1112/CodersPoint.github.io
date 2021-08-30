<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->
       <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">

        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Variables and Constants</title>
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
                <h1>Variables and Constants</h1>
            </div>
        </div>
<p>

                <h1>Variables</h1>

                Variables are memory location in computer's memory to store data. To indicate the memory location, each variable should be given a unique name called identifier. Variable names are just the symbolic representation of a memory location. Examples of variable name: sum, car_no, count etc.<br><br>

 

int num;<br><br>
Here, num is a variable of integer type.

<h3>Rules for writing variable name in C</h3>
<ol>
    <li>Variable name can be composed of letters (both uppercase and lowercase letters), digits and underscore '_' only.</li>
    <li>The first letter of a variable should be either a letter or an underscore. But, it is discouraged to start variable name with an underscore though it is legal. It is because, variable name that starts with underscore can conflict with system names and compiler may complain.</li>
    <li>There is no rule for the length of length of a variable. However, the first 31 characters of  a variable are discriminated by the compiler. So, the first 31 letters of two variables in a program should be different.</li>
</ol><br>
In C programming, you have to declare variable before using it in the program.

<h1>Constants</h1>
Constants are the terms that can't be changed during the execution of a program. For example: 1, 2.5, "Programming is easy." etc. In C, constants can be classified as:

<h3>Integer constants</h3>
Integer constants are the numeric constants(constant associated with number) without any fractional part or exponential part. There are three types of integer constants in C language: decimal constant(base 10), octal constant(base 8) and hexadecimal constant(base 16) .<br><br>

Decimal digits: 0 1 2 3 4 5 6 7 8 9<br><br>

Octal digits: 0 1 2 3 4 5 6 7<br><br>

Hexadecimal digits: 0 1 2 3 4 5 6 7 8 9 A B C D E F.<br><br>

For example:<br><br>

Decimal constants: 0, -9, 22 etc<br>
Octal constants: 021, 077, 033 etc<br>
Hexadecimal constants: 0x7f, 0x2a, 0x521 etc<br>
<b>Notes:</b>
<ol>
<li>You can use small caps a, b, c, d, e, f instead of uppercase letters while writing a hexadecimal constant.</li>
<li>Every octal constant starts with 0 and hexadecimal constant starts with 0x in C programming.</li>
</ol>

<h3>Floating-point constants</h3>
Floating point constants are the numeric constants that has either fractional form or exponent form. For example:<br><br>

-2.0<br>
0.0000234<br>
-0.22E-5<br>
<b>Note:</b>Here, E-5 represents 10-5. Thus, -0.22E-5 = -0.0000022.<br><br>

<h3>Character constants</h3>
Character constants are the constant which use single quotation around characters. For example: 'a', 'l', 'm', 'F' etc.

<h3>Escape Sequences</h3>
Sometimes, it is necessary to use newline(enter), tab, quotation mark etc. in the program which either cannot be typed or has special meaning in C programming. In such cases, escape sequence are used. For example: \n is used for newline. The backslash( \ ) causes "escape" from the normal way the characters are interpreted by the compiler.<br><br>

<table class="e">
    <tbody>
        <tr class="f">
            <th class="f">Escape Sequences</th> 
            <th class="f">Character</th>
        </tr>    
        <tr class="f"><td class="f">\b</td> <td class="f">Backspace</td></tr>
        <tr class="f"><td class="f">\f</td> <td class="f">Form feed</td></tr>
        <tr class="f"><td class="f">\n</td> <td class="f">Newline</td></tr>
        <tr class="f"><td class="f">\r</td> <td class="f">Return</td></tr>
        <tr class="f"><td class="f">\t</td> <td class="f">Horizontal tab</td></tr>
        <tr class="f"><td class="f">\v</td> <td class="f">Vertical tab</td></tr>
        <tr class="f"><td class="f">\\</td> <td class="f">Backslash</td></tr>
        <tr class="f"><td class="f">\'</td> <td class="f">Single quotation mark</td></tr>
        <tr class="f"><td class="f">\"</td> <td class="f">Double quotation mark</td></tr>
        <tr class="f"><td class="f">\?</td> <td class="f">Question mark</td></tr>
        <tr class="f"><td class="f">\0</td> <td class="f">Null character</td></tr>
    </tbody>
</table>

<h3>String constants</h3>
String constants are the constants which are enclosed in a pair of double-quote marks. For example:<br><br>

<table>
    <tbody>
        <tr class="f"><td class="f">"good"</td>               <td class="f">//string constant</td></tr>
        <tr class="f"><td class="f">""</td>                   <td class="f">//null string constant</td></tr>
        <tr class="f"><td class="f">"      "</td>             <td class="f">//string constant of six white space</td></tr>
        <tr class="f"><td class="f">"x"</td>                  <td class="f">//string constant having single character.</td></tr>
        <tr class="f"><td class="f">"Earth is round\n"</td>   <td class="f">//prints string with newline</td></tr>
    </tbody>
</table>

<h3>Enumeration constants</h3>
Keyword enum is used to declare enumeration types. For example:<br><br>

enum color {yellow, green, black, white};<br><br>
Here, the variable name is color and yellow, green, black and white are the enumeration constants having value 0, 1, 2 and 3 respectively by default.</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>
</body>
</html>
