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
        <title>Pros and Cons of JAVA</title>
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
                <h1>Pros and Cons of JAVA</h1>
            </div>
    <h2>Pros :</h2>
    <ol>
        <li>Java is Simple</li>
<li>Java is object-oriented because programming in Java is centered on creating objects, manipulating objects, and making objects work together. This allows you to create modular programs and reusable code.</li>
<li>One of the most significant advantages of Java is Platform indenpendence.</li>
<li>Java is Secure: Java is one of the first programming languages to consider security as part of its design. </li>
<li>Java is Multithreaded: Multithreaded is the capability for a program to perform several tasks simultaneously within a program.</li>
<li>Java is Robust: Robust means reliable and no programming language can really assure reliability.</li>
    </ol>

    <h2>Cons:</h2>
    <ol>
<li>Java can be perceived as significantly slower and more memory-consuming than natively compiled languages such as C or C++.</li>
<li>No local constants. In Java, variables that belong to a class can be made constant by declaring them to be final. Variables that are local to a method cannot be declared final, however.</li>
<li>Java is predominantly a single-paradigm language. However, with the addition of static imports in Java 5.0 the procedural paradigm is better accommodated than in earlier versions of Java</li>
    </ol>	
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
