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
        <title>Pointers and Arrays</title>
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
                <h1>Pointers and Arrays</h1>
            </div>
            <p>Arrays are closely related to pointers in C programming. Arrays and pointers are synonymous in terms of how they use to access memory. But, the important difference between them is that, a pointer variable can take different addresses as value whereas, in case of array it is fixed. This can be demonstrated by an example:<br><br>

                #include<<i>stdio.h</i>><br>
int main()<br>
{<br>
   char c[4];<br>
   int i;<br>
   for(i=0;i<4;++i)<br>
   {<br>
      printf("Address of c[%d]=%x\n",i,&c[i]);<br>
   }<br>
   return 0;<br>
}<br><br>

<b>Output</b><br><br>

Address of c[0]=28ff44<br>
Address of c[1]=28ff45<br>
Address of c[2]=28ff46<br>
Address of c[3]=28ff47<br><br>

Notice, that there is equal difference (difference of 1 byte) between any two consecutive elements of array.<br><br>

<b>Note:</b> You may get different address of an array.

            <h3>Relation between Arrays and Pointers</h3>
            
Consider an array:<br><br>

int arr[4];<br><br>

In arrays of C programming, name of the array always points to the first element of an array. Here, address of first element of an array is &arr[0]. Also, arr represents the address of the pointer where it is pointing. Hence, &arr[0] is equivalent to <i>arr</i>.<br><br>

Also, value inside the address &arr[0] and address arr are equal. Value in address &arr[0] is arr[0] and value in address arr is *arr. Hence, arr[0] is equivalent to *arr.<br><br>

Similarly,<br><br>

&a[1] is equivalent to (a+1)  AND, a[1] is equivalent to *(a+1).<br>
&a[2] is equivalent to (a+2)  AND, a[2] is equivalent to *(a+2).<br>
&a[3] is equivalent to (a+1)  AND, a[3] is equivalent to *(a+3).<br>
.<br>
.<br>
&a[i] is equivalent to (a+i)  AND, a[i] is equivalent to *(a+i).<br><br>

In C, you can declare an array and can use pointer to alter the data of an array.<br><br>

//Program to find the sum of six numbers with arrays and pointers.<br>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
  int i,class[6],sum=0;<br>
  printf("Enter 6 numbers:\n");<br>
  for(i=0;i<6;++i)<br>
  {<br>
      scanf("%d",(class+i)); // (class+i) is equivalent to &class[i]<br>
      sum += *(class+i); // *(class+i) is equivalent to class[i]<br>
  }<br>
  printf("Sum=%d",sum);<br>
  return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter 6 numbers:<br>
2<br>
3<br>
4<br>
5<br>
3<br>
4<br>
Sum=21</p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
