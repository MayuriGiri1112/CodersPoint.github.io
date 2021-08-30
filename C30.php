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
        <title>Structure and Functions</title>
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
                <h1>Structure and Functions</h1>
            </div>
                        <p>In C, structure can be passed to functions by two methods:<br>
            <ul>
                <li>Passing by value (passing actual value as argument)</li>
                <li>Passing by reference (passing address of an argument)</li>
            </ul><br><br>
            
            <h3>Passing structure by value</h3>
            
A structure variable can be passed to the function as an argument as normal variable. If structure is passed by value, change made in structure variable in function definition does not reflect in original structure variable in calling function.

<h4>Write a C program to create a structure student, containing name and roll. Ask user the name and roll of a student in main function. Pass this structure to a function and display the information in that function.</h4>

#include<<i>stdio.h</i>><br>
struct student<br>
{<br>
    char name[50];<br>
    int roll;<br>
};<br>
void Display(struct student stu);<br>
/* function prototype should be below to the structure declaration otherwise compiler shows error */<br>
int main()<br>
{<br>
    struct student s1;<br>
    printf("Enter student's name: ");<br>
    scanf("%s",&s1.name);<br>
    printf("Enter roll number:");<br>
    scanf("%d",&s1.roll);<br>
    Display(s1);   // passing structure variable s1 as argument<br>
    return 0;<br>
}<br>
void Display(struct student stu)<br>
{<br>
  printf("Output\nName: %s",stu.name);<br>
  printf("\nRoll: %d",stu.roll);<br>
}<br><br>

<b>Output</b><br><br>

Enter student's name: Kevin Amla<br>
Enter roll number: 149<br>
<b>Output</b><br>
Name: Kevin Amla<br>
Roll: 149<br><br>

<h3>Passing structure by reference</h3>

The address location of structure variable is passed to function while passing it by reference. If structure is passed by reference, change made in structure variable in function definition reflects in original structure variable in the calling function.

<h4>Write a C program to add two distances(feet-inch system) entered by user. To solve this program, make a structure. Pass two structure variable (containing distance in feet and inch) to add function by reference and display the result in main function without returning it.</h4>

#include<<i>stdio.h</i>><br>
struct distance<br>
{<br>
    int feet;<br>
    float inch;<br>
};<br>
void Add(struct distance d1,struct distance d2, struct distance *d3); <br>
int main()<br>
{<br>
    struct distance dist1, dist2, dist3;<br>
    printf("First distance\n");<br>
    printf("Enter feet: ");<br>
    scanf("%d",&dist1.feet);<br>
    printf("Enter inch: ");<br>
    scanf("%f",&dist1.inch);<br>
    printf("Second distance\n");<br>
    printf("Enter feet: ");<br>
    scanf("%d",&dist2.feet);<br>
    printf("Enter inch: ");<br>
    scanf("%f",&dist2.inch);<br>
    Add(dist1, dist2, &dist3); <br>

/*passing structure variables dist1 and dist2 by value whereas passing structure variable dist3 by reference */<br>
    printf("\nSum of distances = %d\'-%.1f\"",dist3.feet, dist3.inch);<br>
    return 0;<br>
}<br>
void Add(struct distance d1,struct distance d2, struct distance *d3) <br>
{<br>
/* Adding distances d1 and d2 and storing it in d3 */<br>
     d3->feet=d1.feet+d2.feet; <br>
     d3->inch=d1.inch+d2.inch;<br>
     if (d3->inch>=12)<br>
     {     /* if inch is greater or equal to 12, converting it to feet. */<br>
         d3->inch-=12;<br>
         ++d3->feet;<br>
    }<br>
}<br><br>

<b>Output</b><br><br>

First distance<br>
Enter feet: 12<br>
Enter inch: 6.8<br>
Second distance<br>
Enter feet: 5<br>
Enter inch: 7.5<br><br>

Sum of distances = 18'-2.3"

<h4>Explaination</h4>

In this program, structure variables dist1 and dist2 are passed by value (because value of dist1 and dist2 does not need to be displayed in main function) and dist3 is passed by reference ,i.e, address of dist3 (&dist3) is passed as an argument. Thus, the structure pointer variable d3 points to the address of dist3. If any change is made in d3 variable, effect of it is seed in dist3 variable in main function</p>
        </div>


</div><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html>
