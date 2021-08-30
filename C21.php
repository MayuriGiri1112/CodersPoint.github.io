<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->
       <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
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
include("C_sidenav.php");
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

            <p>In C programming, one of the frequently arising problem is to handle similar types of data. For example: If the user want to store marks of 100 students. This can be done by creating 100 variable individually but, this process is rather tedious and impracticable. These type of problem can be handled in C programming using arrays.<br><br>

An array is a sequence of data item of homogeneous value(same type).<br><br>

Arrays are of two types:
            <ol>
                <li>One-dimensional arrays</li>
                <li>Multidimensional arrays</li>
            </ol>
            
            <h3>Declaration of one-dimensional array</h3>
            
data_type array_name[array_size];<br><br>

<b>For example:</b><br><br>

int age[5];<br><br>

Here, the name of array is age. The size of array is 5,i.e., there are 5 items(elements) of array age. All element in an array are of the same type (int, in this case).

<h3>Array elements</h3>

Size of array defines the number of elements in an array. Each element of array can be accessed and used by user according to the need of program. For example:<br><br>

int age[5];<br><br>

Note that, the first element is numbered 0 and so  on.<br><br>

Here, the size of array age is 5 times the size of int because there are 5 elements.<br><br>

Suppose, the starting addres of age[0] is 2120d and the size of int be 4 bytes. Then, the next address (address of a[1]) will be 2124d, address of a[2] will be 2128d and so on.

<h3>Initialization of one-dimensional array:</h3>

Arrays can be initialized at declaration time in  this source code as:<br><br>

int age[5]={2,4,34,3,4};<br><br>

It is not necessary to define the size of arrays during initialization.<br><br>

int age[]={2,4,34,3,4};<br><br>

In this case, the compiler determines the size of array by calculating the number of elements of an array.

<h3>Accessing array elements</h3>

In C programming, arrays can be accessed and treated like variables in C.<br><br>

<b>For example:</b><br><br>

scanf("%d",&age[2]);<br>
/* statement to insert value in the third element of array age[]. */<br><br>

scanf("%d",&age[i]);<br>
/* Statement to insert value in (i+1)th element of array age[]. */<br>
/* Because, the first element of array is age[0], second is age[1], ith is age[i-1] and (i+1)th is age[i]. */<br><br>

printf("%d",age[0]);<br>
/* statement to print first element of an array. */<br><br>

printf("%d",age[i]);<br>
/* statement to print (i+1)th element of an array. */

<h3>Example of array in C programming</h3>

/* C program to find the sum marks of n students using arrays */<br><br>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
     int marks[10],i,n,sum=0;<br>
     printf("Enter number of students: ");<br>
     scanf("%d",&n);<br>
     for(i=0;i<<i>n;++i</i>)<br>
         {<br>
          printf("Enter marks of student%d: ",i+1);<br>
          scanf("%d",&marks[i]);<br>
          sum+=marks[i];<br>
     }<br>
     printf("Sum= %d",sum);<br>
return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter number of students: 3<br>
Enter marks of student1: 12<br>
Enter marks of student2: 31<br>
Enter marks of student3: 2<br>
sum=45<br><br>

<h3>Important thing to remember in C arrays</h3>

Suppose, you declared the array of 10 students. For example: arr[10]. You can use array members from arr[0] to arr[9]. But, what if you want to use element arr[10], arr[13] etc. Compiler may not show error using these elements but, may cause fatal error during program execution.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>
</body>
</html>
