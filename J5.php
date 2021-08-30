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
        <title>Executing First Program</title>
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
                <h1>Executing First Program</h1>
            </div>
    class Simple<br>
{<br>
    public static void main(String args[])<br>
    {<br>
        System.out.println("Hello Java");<br>
    }<br>
}<br><br>

<p>save this file as Simple.java<br>
    <b>To compile:</b> javac Simple.java<br>
<b>To execute:</b> java Simple<br>
It will give output as Hello Java</p>

<p>Lets see what this is :<br>
    class keyword is used to declare a class in java.</p>

<p><b>public</b> keyword is an access modifier which represents visibility, it means it is visible to all.</p>

<p><b>static</b> is a keyword, if we declare any method as static, it is known as static method. The main method is executed by the JVM, it doesn't require to create object to invoke the main method. So it saves memory.</p>

<p><b>void</b> is the return type of method, it means it doesn't return any value.</p>

<p><b>main</b> is a entry point of the program. Execution of programs starts from main. It is called by Runtime System</p>

<p><b>String[] args</b> is used for command line argument. We will learn it later.</p>

<p><b>System.out.println() is used print statement.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
