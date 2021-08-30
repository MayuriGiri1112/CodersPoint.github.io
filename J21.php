<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       Latest compiled and minified CSS

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css">
        jQuery library

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        Latest compiled and minified JavaScript

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Method Overloading</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("Java_sidenav.php");
?>

<div class="main">
	<br>
<?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Method Overloading</h1>
            </div>
    <p>If a class have multiple methods by same name but different parameters, it is known as Method Overloading.<br>
        If we have to perform only one operation, having same name of the methods increases the readability of the program.</b>

    <p>Suppose you have to perform addition of the given numbers but there can be any number of arguments, if you write the method such as a(int,int) for two parameters, and b(int,int,int) for three parameters then it may be difficult for you as well as other programmers to understand the behaviour of the method because its name differs. </p>

    <p>So, we perform method overloading to figure out the program quickly. </p>

<p>Argument lists could differ in:
<ol>
    <li>Number of parameters.</li>
    <li>Data type of parameters.</li>
    <li>Sequence of Data type of parameters.</li>
</ol></p>

<p>Method overloading is also known as Static Polymorphism.</p>

<b>Points to Note:</b><br>
<ol>
    <li>Static Polymorphism is also known as compile time binding or early binding.</li>
    <li>Static binding happens at compile time. Method overloading is an example of static binding where binding of method call to its definition happens at Compile time.</li>
</ol>

<p>There are two ways to overload the method in java
<ol>
    <li>By changing number of arguments</li>
    <li>By changing the data type</li>
</ol>
</p>

<h2>1. By changing number of arguments</h2>

class DisplayOverloading<br>
{<br>
    public void disp(char c)<br>
    {<br>
        System.out.println(c);<br>
    }<br>
    public void disp(char c, int num)<br> 
    {<br>
        System.out.println(c + " "+num);<br>
    }<br>
}<br><br>

class Sample<br>
{<br>
    public static void main(String args[])<br>
    {<br>
        DisplayOverloading obj = new DisplayOverloading();<br>
        obj.disp('a');<br>
        obj.disp('a',10);<br>
    }<br>
}<br><br>

<b>Output:</b><br>
a<br>
a 10<br>

<h2>2. By changing the data type</h2>

class DisplayOverloading<br>
{<br>
    public void disp(char c)<br>
    {<br>
        System.out.println(c);<br>
    }<br>
    public void disp(int c)<br>
    {<br>
        System.out.println(c );<br>
    }<br>
}<br><br>

class Sample2<br>
{<br>
    public static void main(String args[])<br>
    {<br>
        DisplayOverloading obj = new DisplayOverloading();<br>
        obj.disp('a');  <br>
        obj.disp(5);<br>
    }<br>
}<br><br>

<b>Output:</b><br>
a<br>
5<br>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
