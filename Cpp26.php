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
        <title>Recursion</title>
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
                <h1>Recursion</h1>
            </div>
        </div>

            <p>Recursion is a programming technique that allows the programmer to express operations in terms of themselves.</p>

<p>In C++, this takes the form of a function that calls itself. A useful way to think of recursive functions is to imagine them as a process being performed where one of the instructions is to "repeat the process". This makes it sound very similar to a loop because it repeats the same code, and in some ways it is similar to looping. On the other hand, recursion makes it easier to express ideas in which the result of the recursive call is necessary to complete the task. Of course, it must be possible for the "process" to sometimes be completed without the recursive call.</p>

<p>void CountDown(int nValue)<br>
{<br>
using namespace std;<br>
cout << nValue << endl;<br>
CountDown(nValue-1);<br>
}<br><br>

int main(void)<br>
{<br>
CountDown(10);<br>
return 0;<br>
}</p>

<p>When CountDown(10) is called, the number 10 is printed, and CountDown(9) is called. CountDown(9) prints 9 and calls CountDown(8). CountDown(8) prints 8 and calls CountDown(7). The sequence of CountDown(n) calling CountDown(n-1) is continually repeated, effectively forming the recursive equivalent of an infinite loop.</p>

<p>This program illustrates the most important point about recursive functions: you must include a termination condition, or they will run “forever” (or until the call stack runs out of memory).<br>
    Stopping a recursive function generally involves using an if statement. Here is our function redesigned with a termination condition:</p>

void CountDown(int nValue)<br>
{<br>
using namespace std;<br>
cout << nValue << endl;<br><br>

// termination condition<br>
if (nValue > 0)<br>
CountDown(nValue-1);<br>
}<br><br>

int main(void)<br>
{<br>
CountDown(10);<br>
return 0;<br>
}<br><br>

Now when we run our program, CountDown() will count down to 0 and then stop!


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
