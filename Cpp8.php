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
        <title>Arrays</title>
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
                <h1>Arrays</h1>
            </div>
        </div>

            <p><b>Array</b> is a fixed size collection of similar data type items. Arrays are used to store and access group of data of same data type.<br>

Arrays can of any data type.Arrays must have constant size. Continuous memory locations are used to store array.<br>

It is an aggregate data type that lets you access multiple variables through a single name by use of an index. Array index always starts with 0.</p>



<p><b>Example for Arrays:</b><br>
int a[5]; // integer array
char<br> 
a[5]; // character(string) array<br>

In the above example, we declare an array named a. When used in an array definition, the subscript operator ([]) is used to tell the compiler how many variables to allocate. In this case, we’re allocating 5 integers/character. Each of these variables in an array is called an element.</p>



<h2>Types of Arrays:</h2>

<ol>
<li>One Dimensional Array</li>

<li>Two Dimensional Array
</li>
<li>Multi Dimensional Array</li>
</ol> 



<h3>One Dimensional Array</h3>



<b>Array declaration</b><br>

int age [5];<br><br>



<b>Array initialization</b><br>
int age[5]={0, 1, 2, 3, 4, 5};<br><br>



<b>Accessing array</b><br>

age[0];&nbsp /0_is_accessed/<br>

age[1];&nbsp/1_is_accessed/<br>

age[2];&nbsp /2_is_accessed/

2<br>

<h3>Two Dimensional Array</h3>



<p>Two dimensional array is combination of rows n columns.<br>
<b>
Array declaration</b><br>

int arr[2][2];<br><br>



<b>Array initialization</b><br>

int arr[2][2] = {{1,2}, {3,4}};<br><br>


<b>
Accessing array
</b><br>
arr [0][0] = 1; <br>

arr [0][1] = 2;
<br>
arr [1][0] = 3;
<br>
arr [1][1] = 4;<br></p>



<h3>Multi Dimensional Array
</h3>


<p>C++ programming language allows programmer to create arrays of arrays known as multidimensional arrays.<br>

<b>For example:</b><br>
float a[2][4][3];</p>


<h2>
Pointer to an array

</h2>

<p>Please go through pointers chapter first to understand this<br>

An array name is a constant pointer to the first element of the array. Therefore, in the declaration:<br> 
double balance[50];</p>



<p>balance is a pointer to &balance[0], which is the address of the first element of the array balance. Thus, the following program fragment assigns p the address of the first element of balance:<br>

double *p;<br>

double balance[10];<br>

p = balance;</p>


<p>
It is legal to use array names as constant pointers, and vice versa. Therefore, *(balance + 4) is a legitimate way of accessing the data at balance[4].

</p>

<h2>Passing Array To Function</h2>



<p>We can pass entire Arrays to functions as an argument.
<br>
<b>For eg.</b><br>

#include 
void display(int a)<br>

{<br>
 
  int i;<br>

  for(i=0;i < 4;i++)<br>
 {
<br>
    cout << a[i];<br>

  }<br>

}
<br>
int main()<br>
{<br>

  int c[]={1,2,3,4};<br>

  display(c); 
  //Passing array to display.<br>

  return 0;
<br>
}<br></p>



<h2>Return array from functions

</h2>

<p>C++ does not allow to return an entire array as an argument to a function. However, You can return a pointer to an array by specifying the array's name without an index.<br>

If you want to return a single-dimension array from a function, you would have to declare a function returning a pointer as in the following <b>example:</b><br><br>

int * myFunction()
<br>
{<br>

int c[]={1,2,3}
<br>
.<br>

.<br>

.
<br>
return c
<br>
}<br><br>



<b>See Programs section of this app for example of Arrays</b></p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
