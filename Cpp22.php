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
        <title>Random Numbers</title>
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
                <h1>Random Numbers</h1>
            </div>
        </div>
<p>C (and by extension C++) comes with a built-in pseudo-random number generator. It is implemented as two separate functions that live in the cstdlib header:<br>
srand() sets the initial seed value. srand() should only be called once.<br>
rand() generates the next random number in the sequence (starting from the seed set by srand()).</p>

<p>Here’s a sample program using these functions:<br>
int main()<br>
{<br>
int count;<br>
srand(5323);<br>
// set initial seed value to 5323<br><br>

// Print 10 random numbers<br>
for (i=0; i < 10; i++)<br>
{<br>
cout << rand() << "\t";<br>
}<br>
}</p>

The output of this program will be any 10 numbers.

<h2>The range of rand()</h2>

<p>rand() generates pseudo-random integers between 0 and RAND_MAX, a constant in stdlib that is typically set to 32767.</p>

<p>Generally, we do not want random numbers between 0 and RAND_MAX — we want numbers between two other values, which we’ll call Low and High.
    <b>For example,</b> if we’re trying to simulate the user rolling a dice, we want random numbers between 1 and 6.</p>

<p>It turns out it’s quite easy to take the result of rand() can convert it into whatever range we want:<br>
// Generate a random number between Low and High (inclusive)<br>
unsigned int GetRandomNumber(int Low, int High)<br>
{<br>
return (rand() % (High - Low + 1)) + Low;<br>
}  </p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
