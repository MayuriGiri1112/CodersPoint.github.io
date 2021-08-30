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
        <title>Break and Continue</title>
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
                <h1>Break and Continue</h1>
            </div>

            <p>There are two statement built in C, <i>break</i>; and <i>continue</i>; to interrupt the normal flow of control of a program. Loops performs a set of operation repeately until certain condition becomes false but, it is sometimes desirable to skip some statements inside loop and terminate the loop immediately without checking the test expression. In such cases, break and continue statements are used.<br><br>

                <h1>break Statement</h1>
                
In C programming, break is used in terminating the loop immediately after it is encountered. The break statement is used with conditional if statement.<br><br>

<h3>Syntax of break statement</h3>

break;<br><br>

The break statement can be used in terminating all three loops for, while and do...while loops.<br><br>

The figure below explains the working of break statement in all three type of loops.<br><br>

<h3>Example of break statement</h3>

<h4>Write a C program to find average of maximum of n positive numbers entered by user. But, if the input is negative, display the average(excluding the average of negative input) and end the program.</h4>


/* C program to demonstrate the working of break statement by terminating a loop, if user inputs negative number*/<br>
# include<<i>stdio.h</i>><br>
int main()<br>
{<br>
   float num,average,sum;<br>
   int i,n;<br>
   printf("Maximum no. of inputs\n");<br>
   scanf("%d",&n);<br>
   for(i=1;i<=n;++i)<br>
   {<br>
       printf("Enter n%d: ",i);<br>
       scanf("%f",&num);<br>
       if(num<0.0)<br>
       break;                     //for loop breaks if num<0.0<br>
       sum=sum+num;<br>
}<br>
  average=sum/(i-1); <br>      
  printf("Average=%.2f",average);<br>
  return 0;<br>
}<br><br>

<b>Output</b><br><br>

Maximum no. of inputs<br>
4<br>
Enter n1: 1.5<br>
Enter n2: 12.5<br>
Enter n3: 7.2<br>
Enter n4: -1<br>
Average=7.07<br><br>

In this program, when the user inputs number less than zero, the loop is terminated using break statement with executing the statement below it i.e., without executing <i>sum=sum+num</i>.<br><br>

In C, break statements are also used in switch...case statement.<br><br>

<h1>continue Statement</h1>

It is sometimes desirable to skip some statements inside the loop. In such cases, continue statements are used.<br><br>

<h3>Syntax of continue Statement</h3>

continue;<br><br>

Just like break, continue is also used with conditional if statement.<br><br>

For better understanding of how continue statements works in C programming. Analyze the figure below which bypasses some code/s inside loops using continue statement.<br><br>

<h3>Example of continue statement</h3>

<h4>Write a C program to find the product of 4 integers entered by a user. If user enters 0 skip it.</h4>

//program to demonstrate the working of continue statement in C programming <br>
# include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int i,num,product;<br>
    for(i=1,product=1;i<=4;++i)<br>
    {<br>
        printf("Enter num%d:",i);<br>
        scanf("%d",&num);<br>
        if(num==0)<br>
            continue;  / In this program, when num equals to zero, it skips the statement product=num and continue the loop. */<br>
        product*=num;<br>
}<br>
    printf("product=%d",product);<br>
return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter num1:3<br>
Enter num2:0<br>
Enter num3:-5<br>
Enter num4:2<br>
product=-30</p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
