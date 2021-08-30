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
        <title>Dynamic Memory</title>
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
                <h1>Dynamic Memory</h1>
            </div>
        </div>
<h2>Allocating memory</h2>

            <p>There are two ways that memory gets allocated for data storage:<br><br>
                
                <b>Compile Time (or static) Allocation</b><br>
            <ol>
                <li>Memory for named variables is allocated by the compiler</li>
                <li>Exact size and type of storage must be known at compile time</li>
                <li>For standard array declarations, this is why the size has to be constant</li>
            </ol></p>

            <b>Dynamic Memory Allocation</b><br>
            <ol>
                <li>Memory allocated "on the fly" during run time</li>
                <li>dynamically allocated space usually placed in a program segment known as the heap or the free store.</li>
                <li>Exact amount of space or number of items does not have to be known by the compiler in advance.</li>
                <li>For dynamic memory allocation, pointers are crucial.</li>
            </ol>

            <h2>Dynamic Memory Allocation</h2>

            <p>We can dynamically allocate storage space while the program is running, but we cannot create new variable names "on the fly"</p>

For this reason, dynamic allocation requires two steps:<br>
<ol>
    <li>Creating the dynamic space.</li>
    <li>Storing its address in a pointer (so that the space can be accesed)</li>
</ol>

<p>To dynamically allocate memory in C++, we use the new operator.</p>

<h4>De-allocation:</h4>
<ol>
    <li>Deallocation is the "clean-up" of space being used for variables or other data storage</li>
    <li>Compile time variables are automatically deallocated based on their known extent (this is the same as scope for "automatic" variables)</li>
    <li>It is the programmer's job to deallocate dynamically created space</li>
    <li>To de-allocate dynamic memory, we use the delete operator</li>
</ol>

<h2>Allocating space with new</h2>

<p>To allocate space dynamically, use the unary operator new, followed by the type being allocated.</p>

new int;<br>
// dynamically allocates an int <br>
new double;<br>
// dynamically allocates a double<br>

<p>If creating an array dynamically, use the same form, but put brackets with a size after the type:<br>
new int[40];<br>
// dynamically allocates an array of 40 ints <br>
new double[size];<br>
// dynamically allocates an array of size doubles</p>

<p>These statements above are not very useful by themselves, because the allocated spaces have no names! BUT, the new operator returns the starting address of the allocated space, and this address can be stored in a pointer:<br>
int * p;<br>
// declare a pointer p <br>
p = new int;<br>
// dynamically allocate an int and load address into p</p>

<h2>Deallocation of dynamic memory</h2>

<p>To deallocate memory that was created with new, we use the unary operator delete. The one operand should be a pointer that stores the address of the space to be deallocated:<br>
int * ptr = new int;<br>
// dynamically created int<br>
...<br>
delete ptr;<br>
// deletes the space that ptr points to</p>

<p><b>Note :</b> The pointer ptr still exists in this example. That's a named variable subject to scope and extent determined at compile time. It can be reused:<br>
ptr = new int[10];<br>
// point p to a brand new array<br><br>

To deallocate a dynamic array, use this form:<br>
delete [] name_of_pointer</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
