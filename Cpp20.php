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
        <title>Loops</title>
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
                <h1>Loops</h1>
            </div>
        </div>
<h2>while loop</h2>

            <p>The while loop calculates the expression before every loop. If the expression is true then block of statements is executed, so it will not execute If the condition is initially false. It needs the parenthesis like the if statement.</p>

            while(expression) <br>
/* while expression is true do following*/<br>
  statements... ;<br>

  <h2>do While loop</h2>
  
  <p>This is equivalent to a while loop, but it have test condition at the end of the loop. The Do while loop will always execute at least once.</p>

do<br>
  statements ;<br>
while ( expression );<br>
/* while expression is true do...*/

<h2>for loop</h2>

<p>This is very widely held loop.<br>
    For loops work like the corresponding while loop shown in the above example. The first expression is treated as a statement and executed, then the second expression is test or condition which is evaluated to see if the body of the loop should be executed. The third expression is increment or decrement which is performed at the end of every iteration/repetition of the loop.</p>

for (expr1; expr2; expr3)<br>
  statements...;

  <p>In while loop it can happen that the statement will never execute But In the do-while loop, test condition is based at the end of loop therefore the block of statement will always execute at least once. This is the main difference between the while and the do-while loop.</p>

  <b>For example,</b> to execute a statement 5 times: <br>

for (i = 0; i < 5; i++)<br>
{<br>
  cout << i << endl;<br>
}<br><br>

Another way of doing this is:<br>
i = 5;<br>
while (i--)<br>
  statements;

  <p>While using this method, make sure that value of i is greater than zero, or make the test i-->0.</p>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
