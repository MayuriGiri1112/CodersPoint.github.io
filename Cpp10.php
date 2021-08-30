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
        <title>Pointers</title>
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
                <h1>Pointers</h1>
            </div>
        </div>
<p>Pointer is a variable that stores the address of another variable. They can make some things much easier, help improve your program's efficiency, and even allow you to handle unlimited amounts of data.</p> 


<p>
Pointer is used to allocate memory dynamically i.e. at run time. The variable might be any of the data type such as int, float, char, double, short etc.</p>


<h2>
Syntax :</h2>

<p>To declare a pointer, we use an asterisk between the data type and the variable name
Pointers require a bit of new syntax because when you have a pointer, you need the ability to both request the memory location it stores and the value stored at that memory location.
data_type *ptr_name;</p>



<h2>Example :</h2>

<p>int *a; char *a;<br>
Where, * is used to denote that ''a'' is pointer variable and not a normal variable.
In this context, the asterisk is not a multiplication</p>


<h2>
Key points to remember about pointers:</h2>


<ol>
	<li>Normal variable stores the value whereas pointer variable stores the address of the variable.

</li>
	<li>The content of the pointer always be a whole number i.e. address.

</li>
	<li>Always pointer is initialized to null, i.e. int *p = null.

</li>
	<li>The value of null pointer is 0.

# & symbol is used to get the address of the variable.

</li>
	<li>* symbol is used to get the value of the variable that the pointer is pointing to.

</li>
	<li>If pointer is assigned to NULL, it means it is pointing to nothing.

</li>
	<li>Two pointers can be subtracted to know how many elements are available between these two pointers.

</li>
	<li>But, Pointer addition, multiplication, division are not allowed.

</li>
	<li>The size of any pointer is 2 byte (for 16 bit compiler).</li>

</ol>
<p>Since pointers only hold addresses, when we assign a value to a pointer, the value has to be an address. To get the address of a variable, we can use the address-of operator (&)</p>



<h3>Example program for pointer:</h3>


#include<<i>iostream.h</i>><br>
int main()<br>

{<br>

	int *ptr, q;<br> 
	q = 50;<br> 

  
	/* address of q is assigned to ptr */
<br>  
	ptr = &q;<br> 

  
	// prints address held in ptr, which is &q
<br>  
	cout << ptr;<br> 

  
	/* display q's value using ptr variable */
<br>  
	cout << *ptr;<br> 
  
	return 0;<br>

}<br><br>


<h2>
The null pointer

</h2>

<p>Sometimes we need to make our pointers point to nothing. This is called a null pointer. We assign a pointer a null value by setting it to address 0: int *ptr;<br>

ptr = 0;<br>
// assign address 0 to ptr
or simply<br> 

int *ptr = 0;<br>

// assign address 0 to ptr</p>


<h2>
C++ Pointer Arithmetic</h2>


<p>
As you understood pointer is an address which is a numeric value; therefore, you can perform arithmetic operations on a pointer just as you can a numeric value. There are four arithmetic operators that can be used on pointers: ++, --, +, and -.<br><br>



Example :<br>

ptr++;<br>

ptr--;<br>

ptr+21;<br>

ptr-10;<br><br>



If a char pointer pointing to address 100 is incremented (ptr++) then it will point to memory address 101</p>


<h2>
C++ Pointers vs Arrays</h2>



<p>Pointers and arrays are strongly related. In fact, pointers and arrays are interchangeable in many cases. For example, a pointer that points to the beginning of an array can access that array by using either pointer arithmetic or array-style indexing.

<br><br>

int main()<br>

{
<br>
	int var[3] = {1, 2, 3};<br>
	
int *ptr;<br>
	
cout << *ptr << endl;<br>
	
ptr++;<br>
	
cout << *ptr << endl;<br>
	
return 0;
<br>
}<br><br>


this code will return :<br>

1<br>

2

</p>

<h2>C++ Pointer to Pointer</h2>


<p>
A pointer to a pointer is a form of multiple indirection or a chain of pointers. Normally, a pointer contains the address of a variable. When we define a pointer to a pointer, the first pointer contains the address of the second pointer, which points to the location that contains the actual value.<br><br> 

int main()
<br>
{<br>

int var;<br>

int *ptr;<br>

int **pptr;<br>

var = 3000;<br>

ptr = &var;<br>

pptr = &ptr;
<br>
cout << "Value of var :" << var << endl;
<br>
cout << "Value available at *ptr :" << *ptr << endl;<br>

cout << "Value available at **pptr :" << **pptr << endl;<br>

return 0;
<br>
}<br><br>



this code will return<br> 

Value of var :3000
<br>
Value available at *ptr :3000<br>

Value available at **pptr :3000</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
