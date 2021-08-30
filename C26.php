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
        <title>Strings</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("C_sidenav.php");
?>

<div class="main">
	<br><?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Strings</h1>
            </div>
            
            <p>In C programming, array of character are called strings. A string is terminated by null character /0. For example:<br><br>

"c string tutorial"<br><br>

Here, "c string tutorial" is a string. When, compiler encounters strings, it appends null character at the end of string.

            <h3>Declaration of strings</h3>
            
Strings are declared in C in similar manner as arrays. Only difference is that, strings are of char type.<br><br>

char s[5];<br><br>

Strings can also be declared using pointer.<br><br>

char *p

<h3>Initialization of strings</h3>

In C, string can be initialized in different number of ways.<br><br>

char c[]="abcd";<br>
     OR,<br>
char c[5]="abcd";<br>
     OR,<br>
char c[]={'a','b','c','d','\0'};<br>
     OR;<br>
char c[5]={'a','b','c','d','\0'};<br><br>

String can also be initialized using pointers<br><br>

char *c="abcd";<br>
Reading Strings from user.
Reading words from user.
char c[20];
scanf("%s",c);<br><br>

String variable c can only take a word. It is beacause when white space is encountered, the scanf() function terminates.

<h4>Write a C program to illustrate how to read string from terminal.</h4>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    char name[20];<br>
    printf("Enter name: ");<br>
    scanf("%s",name);<br>
    printf("Your name is %s.",name);<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter name: Dennis Ritchie<br>
Your name is Dennis.<br><br>

Here, program will ignore Ritchie because, scanf() function takes only string before the white space.<br><br>

Reading a line of text

<h4>C program to read line of text manually.</h4>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    char name[30],ch;<br>
    int i=0;<br>
    printf("Enter name: ");<br>
    while(ch!='\n')    // terminates if user hit enter<br>
    {<br>
        ch=getchar();<br>
        name[i]=ch;<br>
        i++;<br>
    }<br>
    name[i]='\0';       // inserting null character at end<br>
    printf("Name: %s",name);<br>
    return 0;<br>
}<br><br>

This process to take string is tedious. There are predefined functions gets() and puts in C language to read and display string respectively.<br><br>

int main()<br>
{<br>
    char name[30];<br>
    printf("Enter name: ");<br>
    gets(name);     //Function to read string from user.<br>
    printf("Name: ");<br>
    puts(name);    //Function to display string.<br>
    return 0;<br>
}<br><br>

Both, the above program has same output below:<br><br>

<b>Output</b><br><br>

Enter name: Tom Hanks<br>
Name: Tom Hanks<br><br>

<h4>Passing Strings to Functions</h4>

String can be passed to function in similar manner as arrays as, string is also an array.<br><br>

#include<<i>stdio.h</i>><br>
void Display(char ch[]);<br>
int main()<br>
{<br>
    char c[50];<br>
    printf("Enter string: ");<br>
    gets(c);<br>             
    Display(c);     // Passing string c to function. <br>   
    return 0;<br>
}<br>
void Display(char ch[])<br>
{<br>
    printf("String Output: ");<br>
    puts(ch);<br>
}<br><br>

Here, string c is passed from main() function to user-defined function Display(). In function declaration, ch[] is the formal argument. 

<h4>String handling functions</h4>

You can perform different type of string operations manually like: finding length of string, concatenating(joining) two strings etc. But, for programmers ease, many library function are defined under header file <string.h> to handle these commonly used talk in C programming. You will learn more about string hadling function in next chapter.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
