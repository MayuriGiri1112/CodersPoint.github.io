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
        <title>Environment Setup</title>
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
                <h1>Environment Setup</h1>
            </div>
    <p>We need to install the Java Development Toolkit aka JDK, which is bundled with the Java Runtime Environment.<br>
At this moment, the latest JDK versions is JDK 8.<br>
All you have to do is head to the main download page provided by Oracle , and download the latest version that you will find.</p>

    <p>Follow the instructions to download java and run the .exe to install Java on your machine. Once you installed Java on your machine, you would need to set environment variables to point to correct installation directories.</p>

<p>Assuming you have installed Java in c:\Program Files\java\jdk<br>
<ol>
<li>Right-click on 'My Computer' and select 'Properties'.</li>
<li>Click on the 'Environment variables' button under the 'Advanced' tab.</li>
<li>Now, alter the 'Path' variable so that it also contains the path to the Java executable.</li>
</ol></p>

<p><b>Example,</b> if the path is currently set to <br>
'C:\WINDOWS\SYSTEM32',<br>
then change your path to read <br>
'C:\WINDOWS\SYSTEM32; c:\Program Files\java\jdk\bin'.</p>

<p>Setting up the path for Linux, Ubuntu, UNIX, Solaris<br>
Environment variable PATH should be set to point to where the Java binaries have been installed.<br>
Refer to your shell documentation if you have trouble doing this.</p>

<p><b>Example,</b> if you use bash as your shell, then you would add the following line to the end of your <br>
    '.bashrc: export PATH=/path/to/java:$PATH'</p>

<p>Up until now we have installed a variety of tools towards setting up our Java Development environment. </p>

<p>Since the JDK is already installed (from step one) we could actually jump to coding just by using our text editor of choice (NotePad++, TextPad, NotePad, Ultra Edit etc) and invoking the javac and java commands from the command line.</p>

<h2>Free IDE for Java</h2>
<b>Netbeans:</b> NetBeans IDE provides Java developers with all the tools needed to create professional desktop, mobile and enterprise applications.<br><br>

<b>Eclipse:</b> Eclipse is another free Java IDE for developers and programmers and it is mostly written in Java. Eclipse lets you create various cross platform Java applications for use on mobile, web, desktop and enterprise domains
        </div>
</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
