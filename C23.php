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
        <title>Pointers</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("C_sidenav.php");
?>

<div class="main">
	<br<?php
include("search.php");
?>
            <br><div class="container">
            <div class="jumbotron">
                <h1>Pointers</h1>
            </div>
            
            <p>Pointers are the powerful feature of C and (C++) programming, which differs it from other popular programming languages like: java and Visual Basic.<br><br>

Pointers are used in C program to access the memory and manipulate the address.

            <h3>Reference operator(&)</h3>
            
If var is a variable then, &var is the address in memory.<br><br>


/* Example to demonstrate use of reference operator in C programming. */<br>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
  int var=5;<br>
  printf("Value: %d\n",var);<br>
  printf("Address: %d",&var);  //Notice, the ampersand(&) before var.<br>
  return 0;<br>
}<br><br>

<b>Output</b><br><br>

Value: 5 <br>
Address: 2686778<br><br>

<b>Note:</b> You may obtain different value of address while using this code.<br><br>

In above source code, value 5 is stored in the memory location 2686778. var is just the name given to that location.<br><br>

You, have already used reference operator in C program while using scanf() function.<br><br>

scanf("%d",&var);

<h3>Reference operator(*) and Pointer variables</h3>

Pointers variables are used for taking addresses as values, i.e., a variable that holds address value is called a pointer variable or simply a pointer.

<h3>Declaration of Pointer</h3>

Dereference operator(*) are used to identify an operator as a pointer.<br><br>

data_type * pointer_variable_name;v
int *p;<br><br>

Above statement defines, p as pointer variable of type int.

<h3>Example To Demonstrate Working of Pointers</h3>

/* Source code to demonstrate, handling of pointers in C program */<br>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
   int *pc,c;<br>
   c=22;<br>
   printf("Address of c:%d\n",&c);<br>
   printf("Value of c:%d\n\n",c);<br>
   pc=&c;<br>
   printf("Address of pointer pc:%d\n",pc);<br>
   printf("Content of pointer pc:%d\n\n",*pc);<br>
   c=11;<br>
   printf("Address of pointer pc:%d\n",pc);<br>
   printf("Content of pointer pc:%d\n\n",*pc);<br>
   *pc=2;<br>
   printf("Address of c:%d\n",&c);<br>
   printf("Value of c:%d\n\n",c);<br>
   return 0;<br>
}<br><br>

<b>Output</b><br><br>

Address of c: 2686784<br>
Value of c: 22<br><br>

Address of pointer pc: 2686784<br>
Content of pointer pc: 22<br><br>

Address of pointer pc: 2686784<br>
Content of pointer pc: 11<br><br>

Address of c: 2686784<br>
Value of c: 2<br><br>

<h4>Explanation of program and figure</h4>

<ol>
<li>Code int *pc, p; creates a pointer pc and a variable c. Pointer pc points to some address and that address has garbage value. Similarly, variable c also has garbage value at this point.</li>
<li>Code c=22; makes the value of c equal to 22, i.e.,22 is stored in the memory location of variable c.</li>
<li>Code pc=&c; makes pointer, point to address of c. Note that, &c is the address of variable c (because c is normal variable) and pc is the address of pc (because pc is the pointer variable). Since the address of pc and address of c is same, *pc (value of pointer pc) will be equal to the value of c.</li>
<li>Code c=11; makes the value of c, 11. Since, pointer pc is pointing to address of c. Value of *pc will also be 11.</li>
<li>Code *pc=2; change the address pointed by pointer pc to change to 2. Since, address of pointer pc is same as address of c, value of c also changes to 2.</li>
</ol> 

<h4>Commonly done mistakes in pointers</h4>

Suppose, the programmar want pointer pc to point to the address of c. Then,<br><br>

int c, *pc;<br>
pc=c;  /* pc is address whereas, c is not an address. */<br>
pc=&c; / &c is address whereas, *pc is not an address. */<br>
In both cases, pointer pc is not pointing to the address of c.</p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
