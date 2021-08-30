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
        <title>DO-WHILE Loop</title>
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
                <h1>DO-WHILE Loop</h1>
            </div>
    <p>The while loop makes a test condition before the loop is executed.Therefore, the body of the loop may not be executed at all if the condition is not satisfied at the very first attempt. </p>

    <p>On some occasions it might be necessary to execute the body of the loop before the test is performed.<br>
    Such situations can be handled with the help of the do statement.</p>

    <h2>SYNTAX</h2>
do <br>
{<br>
    //statement(s)...<br>
} while (condition);<br>
<br>
<p>On reaching the do statement, program evaluate the body of loop first. <br>
    At the end of the loop, the condition in the while statement is evaluated. If the condition is true, the program continues to evaluate the body of loop again and again till condition becomes false.</p>

int i =0;<br>
do<br>
{<br>
    System.out.println("i is : " + i);<br>
    i++;<br>
}while(i < 5);<br><br>


<b>Output would be</b>
i is : 0<br>
i is : 1<br>
i is : 2<br>
i is : 3<br>
i is : 4<br>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
