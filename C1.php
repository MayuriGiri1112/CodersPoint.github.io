<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="style.css" type="text/css">
        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Overview to C</title>
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
                <h1>Overview to C</h1>
            </div>
        </div>

            <p><h2>Why use C?</h2>
            C has been used successfully for every type of programming problem imaginable from operating systems to spreadsheets to expert systems - and efficient compilers are available for machines ranging in power from the Apple Macintosh to the Cray supercomputers. The largest measure of C's success seems to be based on purely practical considerations:<br><br>
            <ol>
                <li>the portability of the compiler;</li>

                <li>the standard library concept;</li>

                <li>a powerful and varied repertoire of operators;</li>

                <li>an elegant syntax;</li>

                <li>ready access to the hardware when needed;</li>

                <li>and the ease with which applications can be optimized by hand-coding isolated procedures</li>
            </ol>

C is often called a "Middle Level" programming language. This is not a reflection on its lack of programming power but more a reflection on its capability to access the system's low level functions. Most high-level languages (e.g. FORTRAN) provide everything the programmer might want to do already build into the language. A low level language (e.g. assembler) provides nothing other than access to the machines basic instruction set. A middle level language, such as C, probably doesn't supply all the constructs found in high-languages - but it provides you with all the building blocks that you will need to produce the results you want!


<h2>Uses of C</h2>

C was initially used for system development work, in particular the programs that make-up the operating system. Why use C? Mainly because it produces code that runs nearly as fast as code written in assembly language. Some examples of the use of C might be:<br><br>
<ol>
    <li>Operating Systems</li>

    <li>Language Compilers</li>

    <li>Assemblers</li>

    <li>Text Editors</li>

    <li>Print Spoolers</li>

    <li>Network Drivers</li>

    <li>Modern Programs</li>

    <li>Data Bases</li>

    <li>Language Interpreters</li>

    <li>Utilities</li>
</ol>
In recent years C has been used as a general-purpose language because of its popularity with programmers. It is not the world's easiest language to learn and you will certainly benefit if you are not learning C as your first programming language! C is trendy - many well established programmers are switching to C for all sorts of reasons, but mainly because of the portability that writing standard C programs can offer.

<h2>A Brief History of C</h2>

C is a general-purpose language which has been closely associated with the <b>UNIX</b> operating system for which it was developed - since the system and most of the programs that run it are written in C.

Many of the important ideas of C stem from the language <b>BCPL</b>, developed by Martin Richards. The influence of BCPL on C proceeded indirectly through the language <b>B</b>, which was written by Ken Thompson in 1970 at Bell Labs, for the first UNIX system on a <b>DEC</b> PDP-7. <b>BCPL</b> and <b>B</b> are "type less" languages whereas C provides a variety of data types.

In 1972 Dennis Ritchie at Bell Labs writes C and in 1978 the publication of The C Programming Language by Kernighan & Ritchie caused a revolution in the computing world.

In 1983, the American National Standards Institute (ANSI) established a committee to provide a modern, comprehensive definition of C. The resulting definition, the ANSI standard, or "ANSI C", was completed late 1988.</p>
</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>