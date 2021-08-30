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
        <title>Structure</title>
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
                <h1>Structure</h1>
            </div>
            <p>Structure is the collection of variables of different types under a single name for better handling. For example: You want to store the information about person about his/her name, citizenship number and salary. You can create these information separately but, better approach will be collection of these information under single name because all these information are related to person.<br><br>

                <h3>Structure Definition in C</h3>
                
                Keyword <i>struct</i> is used for creating a structure.

                <h3>Syntax of structure</h3>
                
struct structure_name <br>
{<br>
    data_type member1;<br>
    data_type member2;<br>
    .<br>
    .<br>
    data_type memeber;<br>
};<br><br>

We can create the structure for a person as mentioned above as:<br><br>

struct person<br>
{<br>
    char name[50];<br>
    int cit_no;<br>
    float salary;<br>
};<br><br>

This declaration above creates the derived data type struct person.

<h3>Structure variable declaration</h3>

When a structure is defined, it creates a user-defined type but, no storage is allocated. For the above structure of person, variable can be declared as:<br><br>

struct person<br>
{<br>
    char name[50];<br>
    int cit_no;<br>
    float salary;<br>
};<br><br>

Inside main function:<br>
<b>struct person</b> p1, p2, p[20];<br><br>

Another way of creating sturcture variable is:<br><br>

struct person<br>
{<br>
    char name[50];<br>
    int cit_no;<br>
    float salary;<br>
}p1 ,p2 ,p[20];<br><br>

In both cases, 2 variables p1, p2 and array p having 20 elements of type struct person are created.

<h3>Accessing members of a structure</h3>

There are two types of operators used for accessing members of a structure.<br>
<ul>
<li>Member operator(.)</li>
<li>Structure pointer operator(->)</li>
</ul>

Any member of a structure can be accessed as: <i>structure_variable_name.member_name</i><br><br>

Suppose, we want to access salary for variable p2. Then, it can be accessed as:<br><br>

p2.salary

<h3>Example of structure</h3>

<h4>Write a C program to add two distances entered by user. Measurement of distance should be in inch and feet.(Note: 12 inches = 1 foot)</h4>


#include<<i>stdio.h</i>><br>
struct Distance<br>
{<br>
    int feet;<br>
    float inch;<br>
}d1,d2,sum;<br>
int main()<br>
{<br>
    printf("1st distance\n");<br>
    printf("Enter feet: ");<br>
    scanf("%d",&d1.feet);  /* input of feet for structure variable d1 */<br>
    printf("Enter inch: ");<br>
    scanf("%f",&d1.inch);  /* input of inch for structure variable d1 */<br>
    printf("2nd distance\n");<br>
    printf("Enter feet: ");<br>
    scanf("%d",&d2.feet);  /* input of feet for structure variable d2 */<br>
    printf("Enter inch: ");<br>
    scanf("%f",&d2.inch);  /* input of inch for structure variable d2 */<br>
    sum.feet=d1.feet+d2.feet;<br>
    sum.inch=d1.inch+d2.inch;<br>
    if (sum.inch>12)<br>
    {  //If inch is greater than 12, changing it to feet.<br>
        ++sum.feet;<br>
        sum.inch=sum.inch-12;<br>
    }<br>
    printf("Sum of distances=%d\'-%.1f\"",sum.feet,sum.inch); <br>
/* printing sum of distance d1 and d2 */<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

1st distance<br>
Enter feet: 12<br>
Enter inch: 7.9<br>
2nd distance<br>
Enter feet: 2<br>
Enter inch: 9.8<br>
Sum of distances= 15'-5.7"

<h3>Keyword typedef while using structure</h3>

Programmer generally use typedef while using structure in C language. For example:<br><br>

typedef struct complex<br>
{<br>
  int imag;<br>
  float real;<br>
}comp;<br><br>

Inside main:<br>
comp c1,c2;<br>
Here, <i>typedef</i> keyword is used in creating a type comp(which is of type as struct complex). Then, two structure variables c1 and c2 are created by this comp type.

<h3>Structures within structures</h3>

Structures can be nested within other structures in C programming.<br><br>

struct complex<br>
{<br>
 int imag_value;<br>
 float real_value;<br>
};<br>
struct number<br>
{<br>
   struct complex c1;<br>
   int real;<br>
}n1,n2;<br><br>

Suppose you want to access imag_value for n2 structure variable then, structure member n1.c1.imag_value is used.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>
</body>
</html>
