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
        <title>Strings</title>
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
                <h1>Strings</h1>
            </div>
        </div>
<p>A string is simply an array of characters which is terminated by a null character '\0' which shows the end of the string.<br>

Strings are always enclosed by double quotes. Whereas, character is enclosed by single quotes in C.</p>
<p>

This declaration and initialization create a string with the word "AKKI".</p><p>
To hold the \0 (null character) at the end of the array, the size of array is one more than the number of characters in the word "AKKI".</p>



char my_name[5] = {'A', 'K', 'K', 'I','\0'};<br>

<p>

we can also write the above statement as follows:<br>

char my_name[] = "AKKI";

</p>

<h2>C String functions</h2>



<p>To use string functions programmer must import String.h header file.<br> 

String.h header file supports all the string functions in C language.</p> 



All the string functions are given below.<br>

<ol>
	<li><b>strcat( )</b><br> Concatenates str2 at the end of str1.

</li>
	<li><b>strcat( )</b><br> Appends a portion of string to another

.</li> 
	<li><b>strcpy( )</b><br> Copies str2 into str1

.</li>
	<li><b>strncpy( )</b><br> Copies given number of characters of one string to another

.</li>
	<li><b>strlen( )</b><br> Gives the length of str1.

</li>
	<li><b>strcmp( )</b> 
		<ul>
			<li>Returns 0 if str1 is same as str2. </li>
			<li>Returns <0 if strl < str2.</li> 
			<li>Returns >0 if str1 > str2.</li>
		</ul>
	
</li>
	<li><b>strcmpi( )</b><br> Same as strcmp() function. But, this function negotiates case. ''A'' and ''a'' are treated as same.

</li>
	<li><b>strchr( )</b><br> Returns pointer to first occurrence of char in str1.

</li>
	<li><b>strrchr( )</b><br> Last occurrence of given character in a string is found

.</li>
	<li><b>strstr( )</b><br> Returns pointer to first occurrence of str2 in str1.

</li>
	<li><b>strrstr( )</b><br> Returns pointer to last occurrence of str2 in str1.

</li>
	<li><b>strdup( )</b><br> Duplicates the string

.</li>
	<li><b>strlwr( )</b><br> Converts string to lowercase

.</li>
	<li><b>strupr( )</b><br> Converts string to uppercase

.</li>
	<li><b>strrev( )</b><br> Reverses the given string

.</li>
	<li><b>strset( )</b><br> Sets all character in a string to given character

.</li>
	<li><b>strnset( )</b><br> It sets the portion of characters in a string to given character

.</li>
	<li><b>strtok( )</b><br> Tokenizing given string using delimiter.</li>
</ol>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
