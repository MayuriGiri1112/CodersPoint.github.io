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
        <title>Multidimensional Arrays</title>
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
                <h1>Multidimensional Arrays</h1>
            </div>
            <p>C programming language allows to create arrays of arrays known as multidimensional arrays. For example:<br><br>

float a[2][6];<br><br>

Here, a is an array of two dimension, which is an example of multidimensional array. This array has 2 rows and 6 columns<br><br>

For better understanding of multidimensional arrays, array elements of above example can be thinked of as below:

            <h3>Initialization of Multidimensional Arrays</h3>
            
In C, multidimensional arrays can be initialized in different number of ways.<br><br>

int c[2][3]={{1,3,0}, {-1,5,9}};<br>
                 OR<br>
int c[][3]={{1,3,0}, {-1,5,9}};<br>
                 OR <br>
int c[2][3]={1,3,0,-1,5,9};

<h4>Initialization Of three-dimensional Array</h4>

double cprogram[3][2][4]={ <br>
{{-0.1, 0.22, 0.3, 4.3}, {2.3, 4.7, -0.9, 2}},<br>
 {{0.9, 3.6, 4.5, 4}, {1.2, 2.4, 0.22, -1}},<br>
 {{8.2, 3.12, 34.2, 0.1}, {2.1, 3.2, 4.3, -2.0}} <br>
};<br><br>

Suppose there is a multidimensional array arr[i][j][k][m]. Then this array can hold i*j*k*m numbers of data.<br><br>

Similarly, the array of any dimension can be initialized in C programming.

<h3>Example of Multidimensional Array In C</h3>

<h4>Write a C program to find sum of two matrix of order 2*2 using multidimensional arrays where, elements of matrix are entered by user.</h4>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
   float a[2][2], b[2][2], c[2][2];<br>
   int i,j;<br>
   printf("Enter the elements of 1st matrix\n");<br>
/* Reading two dimensional Array with the help of two for loop. If there was an array of 'n' dimension, 'n' numbers of loops are needed for inserting data to array.*/   <br>
   for(i=0;i<2;++i)<br>      
       for(j=0;j<2;++j)<br>
       {<br>
       printf("Enter a%d%d: ",i+1,j+1);<br>
       scanf("%f",&a[i][j]);<br>
       }<br>
   printf("Enter the elements of 2nd matrix\n");<br>
   for(i=0;i<2;++i)<br>
       for(j=0;j<2;++j)<br>
       {<br>
       printf("Enter b%d%d: ",i+1,j+1);<br>
       scanf("%f",&b[i][j]);<br>
       }<br>
   for(i=0;i<2;++i)<br>
       for(j=0;j<2;++j)<br>
       {<br>
/* Writing the elements of multidimensional array using loop. */<br>
       c[i][j]=a[i][j]+b[i][j];  /* Sum of corresponding elements of two arrays. */<br>
       }<br>
   printf("\nSum Of Matrix:");<br>
   for(i=0;i<2;++i)<br>
       for(j=0;j<2;++j)<br>
       {<br>
       printf("%.1f\t",c[i][j]); <br> 
           if(j==1)             /* To display matrix sum in order. */<br>
              printf("\n");<br>
      }<br>
return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter the elements of 1st matrix<br>
Enter a11: 2;<br>
Enter a12: 0.5;<br>
Enter a21: -1.1;<br>
Enter a22: 2;<br>
Enter the elements of 2nd matrix<br>
Enter b11: 0.2;<br>
Enter b12: 0;<br>
Enter b21: 0.23;<br>
Enter b22: 23;<br><br>

Sum Of Matrix:<br>
2.2                  0.5<br>
-0.9                 25.0</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>
</body>
</html>
