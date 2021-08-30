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
        <title>Unions</title>
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
                <h1>Unions</h1>
            </div>
            <p>Unions are quite similar to the . Union is also a derived type as structure. Union can be defined in same manner as structures just the keyword used in defining union in union where keyword used in defining structure was struct.<br><br>

union car<br>
{<br>
  char name[50];<br>
  int price;<br>
};<br><br>

Union variables can be created in similar manner as structure variable.<br><br>

union car<br>
{<br>
  char name[50];<br>
  int price;<br>
}c1, c2, *c3;<br><br>

OR;<br><br>

union car<br>
{<br>
  char name[50];<br>
  int price;<br>
};<br>
-------Inside Function-----------<br>
union car c1, c2, *c3;<br><br>

In both cases, union variables c1, c2 and union pointer variable c3 of type union car is created.

            <h3>Accessing members of an union</h3>
            
The member of unions can be accessed in similar manner as that structure. Suppose, we you want to access price for union variable c1 in above example, it can be accessed as c1.price. If you want to access price for union pointer variable c3, it can be accessed as (*c3).price or as c3->price.

<h3>Difference between union and structure</h3>

Though unions are similar to structure in so many ways, the difference between them is crucial to understand. This can be demonstrated by this example:<br><br>

#include<<i>stdio.h</i>><br>
union job<br>
{         //defining a union<br>
   char name[32];<br>
   float salary;<br>
   int worker_no;<br>
}u;<br>
struct job1 <br>
{<br>
   char name[32];<br>
   float salary;<br>
   int worker_no;<br>
}s;<br>
int main()<br>
{<br>
   printf("size of union = %d",sizeof(u));<br>
   printf("\nsize of structure = %d", sizeof(s));<br>
   return 0;<br>
}<br><br>

<b>Output</b><br><br>

size of union = 32<br>
size of structure = 40<br><br>

There is difference in memory allocation between union and structure as suggested in above example. The amount of memory required to store a structure variables is the sum of memory size of all members.<br><br>

But, the memory required to store a union variable is the memory required for largest element of an union.

<h4>What difference does it make between structure and union?</h4>

As you know, all members of structure can be accessed at any time. But, only one member of union can be accessed at a time in case of union and other members will contain garbage value.<br><br>

#include<<i>stdio.h</i>><br>
union job <br>
{<br>
   char name[32];<br>
   float salary;<br>
   int worker_no;<br>
}u;<br>
int main()<br>
{<br>
   printf("Enter name:\n");<br>
   scanf("%s",&u.name);<br>
   printf("Enter salary: \n");<br>
   scanf("%f",&u.salary);<br>
   printf("Displaying\nName :%s\n",u.name);<br>
   printf("Salary: %.1f",u.salary);<br>
   return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter name <br>
Hillary<br>
Enter salary<br>
1234.23<br>
Displaying<br>
Name: f%Bary   <br>
Salary: 1234.2<br><br>

<b>Note:</b> You may get different garbage value of name.<br><br>

<h4>Why this output?</h4>

Initially,  Hillary will be stored in u.name and other members of union will contain garbage value. But when user enters value of salary, 1234.23 will be stored in u.salary and other members will contain garbage value. Thus in output, salary is printed accurately but, name displays some random string.

<h3>Passing Union To a Function</h3>

Union can be passed in similar manner as structures in C programming.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
