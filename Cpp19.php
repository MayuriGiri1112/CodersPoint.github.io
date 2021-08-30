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
        <title>Switch Statement</title>
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
                <h1>Switch Statement</h1>
            </div>
        </div>
<p>A switch statement is used instead of nested if...else statements. It is multiple branch decision statement of C++. A switch statement tests a variable with list of values for equivalence. Each value is called a case.
    The case value must be a constant integer. </p>

<h2>Structure of switch() statement</h2>
switch (expression)<br>
{<br>
  case value: statements...<br>
  case value: statements...<br>
  default : statements...<br>
}

<p>Individual case keyword and a semi-colon (:) is used for each constant. Switch tool is used for skipping to particular case, after jumping to that case it will execute all statements from cases beneath that case this is called as ''Fall Through''.</p> 

<p>In the example below, for example, if the value 2 is entered, then the program will print <b>two one something else!</b></p>

int main()<br>
{<br>
  int i;<br>
  cout << ''Enter an integer: '';<br>
  cin>>i;<br>
  switch(i)<br>
  {<br>
    case 4: cout << ''four''; break;<br>
    case 3: cout << ''three''; break;<br>
    case 2: cout << ''two '';<br>
    case 1: cout << ''one '';<br>
    default: cout << ''something else!'';<br>
  }<br>
  return 0;<br>
}

<p>To avoid fall through, the break statements are necessary to exit the switch. If value 4 is entered, then in case 4 it will just print four and ends the switch.</p>

The default label is non-compulsory, It is used for cases that are not present.

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
