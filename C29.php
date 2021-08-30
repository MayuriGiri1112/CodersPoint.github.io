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
        <title>Structure and Pointers</title>
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
                <h1>Structure and Pointers</h1>
            </div>
            <p>Pointers can be accessed along with structures. A pointer variable of structure can be created as below:<br><br>

struct name <br>
{<br>
    member1;<br>
    member2;<br>
    .<br>
    .<br>
};<br>
-------- Inside function -------<br>
struct name *ptr;<br>
Here, the pointer variable of type struct name is created.<br><br>

Structure's member through pointer can be used in two ways:<br>
            <ul>
                <li>Referencing pointer to another address to access memory</li>
                <li>Using dynamic memory allocation</li>
            </ul><br><br>
            
Consider an example to access structure's member through pointer.<br><br>
            
#include<<i>stdio.h</i>><br>
struct name<br>
{<br>
   int a;<br>
   float b;<br>
};<br>
int main()<br>
{<br>
    struct name *ptr,p;<br>
    ptr=&p;            /* Referencing pointer to memory address of p */<br>
    printf("Enter integer: ");<br>
    scanf("%d",&(*ptr).a);<br>
    printf("Enter number: ");<br>
    scanf("%f",&(*ptr).b);<br>
    printf("Displaying: ");<br>
    printf("%d%f",(*ptr).a,(*ptr).b);<br>
    return 0;<br>
}<br><br>

In this example, the pointer variable of type struct name is referenced to the address of p. Then, only the structure member through pointer can can accessed.<br><br>

Structure pointer member can also be accessed using -> operator.<br><br>

(*ptr).a is same as ptr->a<br>
(*ptr).b is same as ptr->b<br>

<h3>Accessing structure member through pointer using dynamic memory allocation</h3>

To access structure member using pointers, memory can be allocated dynamically using malloc() function defined under "stdlib.h" header file.

<h4>Syntax to use malloc()</h4>

ptr=(cast-type*)malloc(byte-size)

<h4>Example to use structure's member through pointer using malloc() function.</h4>

#include<<i>stdio.h</i>><br>
#include<<i>stdlib.h</i>><br>
struct name <br>
{<br>
   int a;<br>
   float b;<br>
   char c[30];<br>
};<br>
int main()<br>
{<br>
   struct name *ptr;<br>
   int i,n;<br>
   printf("Enter n: ");<br>
   scanf("%d",&n);<br>
   ptr=(struct name*)malloc(n*sizeof(struct name));<br>
/* Above statement allocates the memory for n structures with pointer ptr pointing to base address */<br>
   for(i=0;i<<i>n;++i</i>i>)<br>
       {<br>
       printf("Enter string, integer and floating number  respectively:\n");<br>
       scanf("%s%d%f",&(ptr+i)->c,&(ptr+i)->a,&(ptr+i)->b);<br>
   }<br>
   printf("Displaying Infromation:\n");<br>
   for(i=0;i<<i>n;++i</i>)<br>
       printf("%s\t%d\t%.2f\n",(ptr+i)->c,(ptr+i)->a,(ptr+i)->b);<br>
   return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter n: 2<br>
Enter string, integer and floating number  respectively:<br>
Programming<br>
2<br>
3.2<br>
Enter string, integer and floating number  respectively:<br>
Structure<br>
6<br>
2.3<br>
Displaying Information<br>
Programming                2            3.20<br>
Structure                  6            2.30</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
