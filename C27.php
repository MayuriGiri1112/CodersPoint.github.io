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
        <title>Strings Functions</title>
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
                <h1>Strings Functions</h1>
            </div>
            
            <p>Strings are often needed to be manipulated by programmer according to the need of a problem. All string manipulation can be done manually by the programmer but, this makes programming complex and large. To solve this, the C supports a large number of string handling functions.<br><br>

                There are numerous functions defined in <i>"string.h"</i> header file. Few commonly used string handling functions are discussed below:<br><br>

            <table>            
                <tbody>
                    <tr><th class="f">Function</th> <th class="f">Work of Function</th></tr>
                    <tr><td class="f">strlen()</td> <td class="f">Calculates the length of string</td></tr>
                    <tr><td class="f">strcpy()</td> <td class="f">Copies a string to another string</td></tr>
                    <tr><td class="f">strcat()</td> <td class="f">Concatenates(joins) two strings</td></tr>
                    <tr><td class="f">strcmp()</td> <td class="f">Compares two string</td></tr>
                    <tr><td class="f">strlwr()</td> <td class="f">Converts string to lowercase</td></tr>
                    <tr><td class="f">strupr()</td> <td class="f">Converts string to uppercase</td></tr>
                </tbody>
            </table><br><br>

            Strings handling functions are defined under "string.h" header file, i.e, you have to include the code below to run string handling functions.<br><br>

            #include<<i>string.h</i>><br><br>
            
            <h3>gets() and puts()</h3>
            
Functions gets() and puts() are two string functions to take string input from user and display string respectively as mentioned in previous chapter.<br><br>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    char name[30];<br>
    printf("Enter name: ");<br>
    gets(name);     //Function to read string from user.<br>
    printf("Name: ");<br>
    puts(name);    //Function to display string.<br>
    return 0;<br>
}<br><br>

Though, gets() and puts() function handle string, both these functions are defined in "stdio.h" header file.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
