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
        <title>Exception Handling</title>
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
                <h1>Exception Handling</h1>
            </div>
        </div>
<p>Exceptions provide a way to react to exceptional circumstances (like runtime errors) in our program by transferring control to special functions called handlers.<br>
    C++ exception handling is built upon three keywords: try, catch, and throw.</p>

            <b>throw:</b> A program throws an exception when a problem shows up. This is done using a throw keyword.<br>
            <b>catch:</b> A program catches an exception with an exception handler at the place in a program where you want to handle the problem. The catch keyword indicates the catching of an exception.<br>
            <b>try:</b> A try block identifies a block of code for which particular exceptions will be activated. It's followed by one or more catch blocks.

            <p>Assuming a block will raise an exception, a method catches an exception using a combination of the try and catch keywords. A try/catch block is placed around the code that might generate an exception. Code within a try/catch block is referred to as protected code, and the syntax for using try/catch looks like the following:</p>

try<br>
{<br>
// protected code<br>
}<br>
catch( ExceptionName e1 )<br>
{<br>
// catch block<br>
}<br>
catch( ExceptionName e2 )<br>
{<br>
// catch block<br>
}<br>
catch( ExceptionName eN )<br>
{<br>
// catch block<br>
}<br>

<p>You can list down multiple catch statements to catch different type of exceptions in case your try block raises more than one exception in different situations.</p>

<h2>Throwing Exceptions</h2>
<p>Exceptions can be thrown anywhere within a code block using throw statements. The operand of the throw statements determines a type for the exception and can be any expression and the type of the result of the expression determines the type of exception thrown.</p>

Following is an example of throwing an exception when dividing by zero condition occurs:<br>
double division(int a, int b)<br>
{<br>
if( b == 0 )<br>
{<br>
throw "Division by zero condition!";<br>
}<br>
return (a/b);<br>
}<br>

<h2>Catching Exceptions</h2>
<p>The catch block following the try block catches any exception. You can specify what type of exception you want to catch and this is determined by the exception declaration that appears in parentheses following the keyword catch.</p>

try<br>
{<br>
// protected code<br>
}catch( ExceptionName e )<br>
{<br>
// code to handle ExceptionName exception<br>
}<br>

<h2>C++ Standard Exceptions</h2>
<b>std::exception -</b><br> An exception and parent class of all the standard C++ exceptions.<br>
<b>std::bad_alloc -</b><br> This can be thrown by new.<br>
<b>std::bad_cast -</b><br> This can be thrown by dynamic_cast.<br>
<b>std::bad_exception -</b><br> This is useful device to handle unexpected exceptions in a C++ program<br>
<b>std::bad_typeid -</b><br> This can be thrown by typeid.<br>
<b>std::logic_error -</b><br> An exception that theoretically can be detected by reading the code.<br>
<b>std::domain_error -</b><br> This is an exception thrown when a mathematically invalid domain is used<br>
<b>std::invalid_argument -</b><br> This is thrown due to invalid arguments.<br>
<b>std::length_error -</b><br> This is thrown when a too big std::string is created<br>
<b>std::out_of_range -</b><br> This can be thrown by the at method from for example a std::vector and std::bitset < >::operator[]().<br>
<b>std::runtime_error -</b><br> An exception that theoretically can not be detected by reading the code.<br>
<b>std::overflow_error -</b><br> This is thrown if a mathematical overflow occurs.<br>
<b>std::range_error -</b><br> This is occured when you try to store a value which is out of range.<br>
<b>std::underflow_error -</b><br> This is thrown if a mathematical underflow occurs.<br>

<h2>Define your own exceptions</h2>
You can define your own exceptions by inheriting and overriding exception class functionality.<br>
<b>Example :</b><br>
struct MyException : public exception<br>
{<br>
const char * display() const throw ()<br>
{<br>
return "This is Exception";<br>
}<br>
};<br>

<p>Here, what() is a public method provided by exception class and it has been overridden by all the child exception classes. This returns the cause of an exception</p>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
