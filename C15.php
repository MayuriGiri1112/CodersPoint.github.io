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
        <title>goto</title>
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
                <h1>goto</h1>
            </div>

            <p>
                In C programming, goto statement is used for altering the normal sequence of program execution by transferring control to some other part of the program.<br><br>

                <h3>Syntax of goto statement</h3>
goto label;<br>
.............<br>
.............<br>
.............<br>
label: <br>
statement;<br><br>

In this syntax, label is an identifier. When, the control of program reaches to goto statement, the control of the program will jump to the label: and executes the code/s after it.<br><br>

<h3>Example of goto statement</h3>

/* C program to demonstrate the working of goto statement.*/<br>
# include<<i>stdio.h</i>><br>
int main()<br>
{<br>
   float num,average,sum;<br>
   int i,n;<br>
   printf("Maximum no. of inputs: ");<br>
   scanf("%d",&n);<br>
   for(i=1;i<=n;++i)<br>
   {<br>
       printf("Enter n%d: ",i);<br>
       scanf("%f",&num);<br>
       if(num<0.0)<br>
       goto jump;             /* control of the program jumps to label jump */ <br>
       sum=sum+num;<br>
}<br>
jump:<br>
  average=sum/(i-1);<br>       
  printf("Average: %.2f",average);<br>
  return 0;<br>
}<br><br>

<b>Output</b><br><br>

Maximum no. of inputs: 4<br>
Enter n1: 1.5<br>
Enter n2: 12.5<br>
Enter n3: 7.2<br>
Enter n4: -1<br>
Average: 7.07<br><br>

Though goto statement is included in ANSI standard of C, use of goto statement should be reduced as much as possible in a program.<br><br>

<h3>Reasons to avoid goto statement</h3>

Though, using goto statement give power to jump to any part of program, using goto statement makes the logic of the program complex and tangled. In modern programming, goto statement is considered a harmful construct and a bad programming practice.<br><br>

The goto statement can be replaced in most of C program with the use of break and continue statements. In fact, any program in C programming can be perfectly written without the use of goto statement. All programmer should try to avoid goto statement as possible as they can.</p>        
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
