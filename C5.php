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
        <title>Input Output</title>
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
                <h1>Input Output</h1>
            </div>
            <p>
                ANSI standard has defined many library functions for input and output in C language. Functions printf() and scanf() are the most commonly used to display out and take input respectively. Let us consider an example:<br><br>


#include <<i>stdio.h</i>>      //This is needed to run printf() function.<br>
int main()<br>
{<br>
    printf("C Programming");  //displays the content inside quotation<br>
    return 0;<br>
}<br><br>
<b>Output</b><br><br>

C Programming
<h3>Explanation of How this program works</h3>

<ol>
    <li>Every program starts from main() function.</li>
    <li><i>printf()</i> is a library function to display output which only works if <i>#include<<i>stdio.h</i>></i> is included at the beginning.
    <li>Here, <i>stdio.h</i> is a header file (standard input output header file) and <i>#include</i> is command to paste the code from the header file when necessary. When compiler encounters <i>printf()</i> function and doesn't find <i>stdio.h</i> header file, compiler shows error.</li>
    <li>Code <i>return 0</i>; indicates the end of program. You can ignore this statement but, it is good programming practice to use <i>return 0</i>;.</li>
</ol>

<h3>I/O of integers in C</h3>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int c=5;<br>
    printf()("Number=%d",c);<br>
    return 0;<br>
}<br><br>
<b>Output</b><br><br>

Number=5<br><br>
Inside quotation of <i>printf()</i> there, is a conversion format string "%d" (for integer). If this conversion format string matches with remaining argument,i.e, c in this case, value of c is displayed.<br><br>


#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int c;<br>
    printf()("Enter a number\n");<br>
    scanf()("%d",&c);<br>
    printf()("Number=%d",c);<br>
    return 0;<br>
}<br><br>
<b>Output</b><br><br>

Enter a number<br>
4<br>
Number=4<br><br>
The scanf() function is used to take input from user. In this program, the user is asked a input and value is stored in variable c. Note the '&' sign before c. &c denotes the address of c and value is stored in that address.

<h3>I/O of floats in C</h3>

#include <<i>stdio.h</i>><br>
int main()<br>
{<br>
    float a;<br>
    printf("Enter value: ");<br>
    scanf("%f",&a);<br>
    printf("Value=%f",a);    //%f is used for floats instead of %d<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter value: 23.45<br>
Value=23.450000<br><br>
Conversion format string "%f" is used for floats to take input and to display floating value of a variable.

<h3>I/O of characters and ASCII code</h3>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    char var1;<br>
    printf("Enter character: ");<br>
    scanf("%c",&var1);<br>
    printf("You entered %c.",var1); <br> 
    return 0;<br>
}<br>
<b>Output</b><br><br>

Enter character: g<br>
You entered g.<br><br>
Conversion format string "%c" is used in case of characters.

<h3>ASCII code</h3>
When character is typed in the above program, the character itself is not recorded a numeric value(ASCII value) is stored. And when we displayed that value by using "%c", that character is displayed.<br><br>


#include <<i>stdio.h</i>><br>
int main()<br>
{<br>
char var1;<br>
    printf("Enter character: ");<br>
    scanf("%c",&var1);<br>
    printf("You entered %c.\n",var1);<br>  
   /* \n prints the next line(performs work of enter). */<br>
    printf("ASCII value of %d",var1);  <br>
    return 0;<br>
}<br><br>
<b>Output</b><br><br>

Enter character:<br>
g<br>
103<br><br>
When, 'g' is entered, ASCII value 103 is stored instead of g.<br><br>

You can display character if you know ASCII code only. This is shown by following example.<br><br>


#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int var1=69;<br>
    printf("Character of ASCII value 69: %c",var1);<br>
    return 0;<br>
}<br>

<b>Output</b><br><br>

Character of ASCII value 69: E<br><br>
The ASCII value of 'A' is 65, 'B' is 66 and so on to 'Z' is 90. Similarly ASCII value of 'a' is 97, 'b' is 98 and so on to 'z' is 122.

<h3>More about Input/Output of floats and Integer<br>
    Variations in Output for integer an floats</h3>

Integer and floating-points can be displayed in different formats in C programming as:<br><br>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    printf("Case 1:%6d\n",9876); <br>     
   /*  Prints the number right justified within 6 columns  */<br>
    printf("Case 2:%3d\n",9876);<br>
    /* Prints the number to be right justified to 3 columns but, there are 4 digits so number is not right justified  */<br>
    printf("Case 3:%.2f\n",987.6543);<br>
    /* Prints the number rounded to two decimal places */<br>
    printf("Case 4:%.f\n",987.6543);<br>
    /* Prints the number rounded to 0 decimal place, i.e, rounded to integer */<br>
    printf("Case 5:%e\n",987.6543);<br>
    /* Prints the number in exponential notation(scientific notation) */<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

Case 1:  9876<br>
Case 2:9876<br>
Case 3:987.65<br>
Case 4:988<br>
Case 5:9.876543e+002<br><br>

<h3>Variations in Input for integer and floats</h3>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int a,b;<br>
    float c,d;<br>
    printf("Enter two intgers: ");<br>
    /* Two integers can be taken from user at once as below */<br>
    scanf("%d%d",&a,&b);<br>
    printf("Enter intger and floating point numbers: ");<br>
    /* Integer and floating point number can be taken at once from user as below */<br>
    scanf("%d%f",&a,&c);<br>
    return 0;<br>
}<br><br>

Similarly, any number of input can be taken at once from user.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
