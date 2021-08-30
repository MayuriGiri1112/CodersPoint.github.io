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
        <title>Dynamic Memory Allocation</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("C_sidenav.php");
?>

<div class="main">
	<br><?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Dynamic Memory Allocation</h1>
            </div>
            <p>The exact size of array is unknown untill the compile time,i.e., time when a compier compiles code written in a programming language into a executable form. The size of array you have declared initially can be sometimes insufficient and sometimes more than required. Dynamic memory allocation allows a program to obtain more memory space, while running or to release space when no space is required.<br><br>

Although, C language inherently does not has any technique to allocated memory dynamically, there are 4 library functions under "stdlib.h" for dynamic memory allocation.<br><br>

            <table class="e">
                <tbody>
                    <tr class="f"><th class="f">Function</th> <th class="f">Use of Function</th></tr>
                    <tr class="f"><td class="f">malloc()</td> <td class="f">Allocates requested size of bytes and returns a pointer first byte of allocated space</td></tr>
                    <tr class="f"><td class="f">calloc()</td> <td class="f">Allocates space for an array elements, initializes to zero and then returns a pointer to memory</td></tr>
                    <tr class="f"><td class="f">free()</td>          <td class="f">dellocate the previously allocated space</td></tr>
                    <tr class="f"><td class="f">realloc()</td>  <td class="f">Change the size of previously allocated space</td></tr>
                </tbody>
            </table>

            <h3>malloc()</h3>
            
The name malloc stands for "memory allocation". The function malloc() reserves a block of memory of specified size and return a pointer of type void which can be casted into pointer of any form.

<h4>Syntax of malloc()</h4>

ptr=(cast-type*)malloc(byte-size)<br><br>

Here, ptr is pointer of cast-type. The malloc() function returns a pointer to an area of memory with size of byte size. If the space is insufficient, allocation fails and returns NULL pointer.<br><br>

ptr=(int*)malloc(100*sizeof(int));<br><br>

This statement will allocate either 200 or 400 according to size of int 2 or 4 bytes respectively and the pointer points to the address of first byte of memory.

<h3>calloc()</h3>

The name calloc stands for "contiguous allocation". The only difference between malloc() and calloc() is that, malloc() allocates single block of memory whereas calloc() allocates multiple blocks of memory each of same size and sets all bytes to zero.<br><br>

<h4>Syntax of calloc()</h4>

ptr=(cast-type*)calloc(n,element-size);<br><br>

This statement will allocate contiguous space in memory for an array of n elements. For example:<br><br>

ptr=(float*)calloc(25,sizeof(float));<br><br>

This statement allocates contiguous space in memory for an array of 25 elements each of size of float, i.e, 4 bytes.

<h3>free()</h3>

Dynamically allocated memory with either calloc() or malloc() does not get return on its own. The programmer must use free() explicitly to release space.

<h4>syntax of free()</h4>

free(ptr);<br><br>

This statement cause the space in memory pointer by ptr to be deallocated.

<h3>Examples of calloc() and malloc()</h3>

<h4>Write a C program to find sum of n elements entered by user. To perform this program, allocate memory dynamically using malloc() function.</h4>

#include<<i>stdio.h</i>><br>
#include<<i>stdlib.h</i>><br>
int main()<br>
{<br>
    int n,i,*ptr,sum=0;<br>
    printf("Enter number of elements: ");<br>
    scanf("%d",&n);<br>
    ptr=(int*)malloc(n*sizeof(int));  //memory allocated using malloc<br>
    if(ptr==NULL)<br>                     
    {<br>
        printf("Error! memory not allocated.");<br>
        exit(0);<br>
    }<br>
    printf("Enter elements of array: ");<br>
    for(i=0;i<<i>n;++i</i>i>)<br>
    {<br>
        scanf("%d",ptr+i);<br>
        sum+=*(ptr+i);<br>
    }<br>
    printf("Sum=%d",sum);<br>
    free(ptr);<br>
    return 0;<br>
}<br>

<h4>Write a C program to find sum of n elements entered by user. To perform this program, allocate memory dynamically using calloc() function.</h4>

#include<<i>stdio.h</i>><br>
#include<<i>stdlib.h</i>><br>
int main()<br>
{<br>
    int n,i,*ptr,sum=0;<br>
    printf("Enter number of elements: ");<br>
    scanf("%d",&n);<br>
    ptr=(int*)calloc(n,sizeof(int));<br>
    if(ptr==NULL)<br>
    {<br>
        printf("Error! memory not allocated.");<br>
        exit(0);<br>
    }<br>
    printf("Enter elements of array: ");<br>
    for(i=0;i<<i>n;++i</i>i>)<br>
    {<br>
        scanf("%d",ptr+i);<br>
        sum+=*(ptr+i);<br>
    }<br>
    printf("Sum=%d",sum);<br>
    free(ptr);<br>
    return 0;<br>
}

<h3>realloc()</h3>

If the previously allocated memory is insufficient or more than sufficient. Then, you can change memory size previously allocated using realloc().

<h4>Syntax of realloc()</h4>

ptr=realloc(ptr,newsize);<br><br>

Here, ptr is reallocated with size of newsize.<br><br>

#include<<i>stdio.h</i>><br>
#include<<i>stdlib.h</i>><br>
int main()<br>
{<br>
    int *ptr,i,n1,n2;<br>
    printf("Enter size of array: ");<br>
    scanf("%d",&n1);<br>
    ptr=(int*)malloc(n1*sizeof(int));<br>
    printf("Address of previously allocated memory: ");<br>
    for(i=0;i<<i>n1;++i</i>)<br>
         printf("%u\t",ptr+i);<br>
    printf("\nEnter new size of array: ");<br>
    scanf("%d",&n2);<br>
    ptr=realloc(ptr,n2);<br>
    for(i=0;i<<i>n2;++i</i>)<br>
         printf("%u\t",ptr+i);<br>
    return 0;<br>
}</p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
