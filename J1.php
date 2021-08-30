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
        <title>Introduction</title>
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
                <h1>Introduction</h1>
            </div>
        </div>

<p>Java is a simple and yet powerful object oriented programming language and it is in many respects similar to C++.</p>

<p>Java is created by James Gosling from Sun Microsystems (Sun) in 1991. The first publicly available version of Java (Java 1.0) was released in 1995.</p>

<p>Java is defined by a specification and consists of a programming language, a compiler, core libraries and a runtime machine(Java virtual machine).<br>
The Java runtime allows software developers to write program code in other languages than the Java programming language which still runs on the Java virtual machine. <br>
The Java platform is usually associated with the Java virtual machine and the Java core libraries.</p>

<h2>Java virtual machine</h2>
    <p>The Java virtual machine (JVM) is a software implementation of a computer that executes programs like a real machine. </p>

    <h2>Java Runtime Environment vs. Java Development Kit</h2>
<p>A Java distribution typically comes in two flavors, the Java Runtime Environment (JRE) and the Java Development Kit (JDK).<br>
The JRE consists of the JVM and the Java class libraries. Those contain the necessary functionality to start Java programs.<br>
The JDK additionally contains the development tools necessary to create Java programs. The JDK therefore consists of a Java compiler, the Java virtual machine and the Java class libraries.</p>

<h2>Uses of JAVA</h2>
Java is also used as the programming language for many different software programs, games, and add-ons. <br><br>

Some examples of the more widely used programs written in Java or that use Java include the Android apps, Big Data Technologies, Adobe Creative suite, Eclipse, Lotus Notes, Minecraft, OpenOffice, Runescape, and Vuze


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
