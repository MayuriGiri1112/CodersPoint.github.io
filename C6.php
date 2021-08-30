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
        <title>Operators</title>
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
                <h1>Operators</h1>
            </div>
            <p>
                Operators are the symbol which operates on value or a variable. For example: + is a operator to perform addition.<br><br>

C programming language has wide range of operators to perform various operations. For better understanding of operators, these operators can be classified as:<br><br>

            <table class="e">
                <tbody>
                    <tr class="f"> 
                        <th class="f">Operators in C programming</th>
                    </tr>
                    <tr class="f"><td class="f">Arithmetic Operators</td></tr>
                    <tr class="f"><td class="f">Increment and Decrement Operators</td></tr>
                    <tr class="f"><td class="f">Assignment Operators</td></tr>
                    <tr class="f"><td class="f">Relational Operators</td></tr>
                    <tr class="f"><td class="f">Logical Operators</td></tr>
                    <tr class="f"><td class="f">Conditional Operators</td></tr>
                    <tr class="f"><td class="f">Bitwise Operators</td></tr>
                    <tr class="f"><td class="f">Special Operators</td></tr>
                </tbody>
            </table>
            
            <h1>Arithmetic Operators</h1>
            
            <table class="e">
                <tbody>
                    <tr class="f"><th class="f">Operator</th>       <th class="f">Meaning of Operator</th></tr>
                    <tr class="f"><td class="f">+</td>              <td class="f">addition or unary plus</td></tr>
                    <tr class="f"><td class="f">-</td>              <td class="f">subtraction or  unary minus</td></tr>
                    <tr class="f"><td class="f">*</td>              <td class="f">multiplication</td></tr>
                    <tr class="f"><td class="f">%</td>              <td class="f">remainder after division( modulo division)</td></tr>
                    <tr class="f"><td class="f">/</td>              <td class="f">division</td></tr>
                    <tr class="f"><td class="f">%</td>              <td class="f">remainder after division( modulo division)</td></tr>
                </tbody>
            </table>
            <br><br>
            Example of working of arithmetic operators<br><br>


            /* Program to demonstrate the working of arithmetic operators in C.  */<br>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int a=9,b=4,c;<br>
    c=a+b;<br>
    printf("a+b=%d\n",c);<br>
    c=a-b;<br>
    printf("a-b=%d\n",c);<br>
    c=a*b;<br>
    printf("a*b=%d\n",c);<br>
    c=a/b;<br>
    printf("a/b=%d\n",c);<br>
    c=a%b;<br>
    printf("Remainder when a divided by b=%d\n",c);<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>
a+b=13<br>
a-b=5<br>
a*b=36<br>
a/b=2<br>
Remainder when a divided by b=1<br><br>

<h3>Explanation</h3><br><br>

Here, the operators +, - and * performed normally as you expected. In normal calculation, 9/4 equals to 2.25. But, the output is 2 in this program. It is because, a and b are both integers. So, the output is also integer and the compiler neglects the term after decimal point and shows answer 2 instead of 2.25. And, finally a%b is 1,i.e. ,when a=9 is divided by b=4, remainder is 1.<br><br>

Suppose a=5.0, b=2.0, c=5 and d=2<br>
In C programming,<br>
a/b=2.5<br>
a/d=2.5<br>
c/b=2.5<br>  
c/d=2<br><br>
<b>Note:</b> % operator can only be used with integers.

<h1>Increment and decrement operators</h1>
In C, ++ and -- are called increment and decrement operators respectively. Both of these operators are unary operators, i.e, used on single operand. ++ adds 1 to operand and -- subtracts 1 to operand respectively. For example:<br><br>

Let a=5 and b=10<br>
a++;  //a becomes 6<br>
a--;  //a becomes 5<br>
++a;  //a becomes 6<br>
--a;  //a becomes 5 <br><br>
When i++ is used as prefix(like: ++var), ++var will increment the value of var and then return it but, if ++ is used as postfix(like: var++), operator will return the value of operand first and then only increment it. This can be demonstrated by an example:<br><br>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int c=2,d=2;<br>
    printf("%d\n",c++); //this statement displays 2 then, only c incremented by 1 to 3.<br>
    printf("%d",++c);   //this statement increments 1 to c then, only c is displayed. <br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

2<br>
4<br>

<h1>Assignment Operators</h1>
The most common assignment operator is =. This operator assigns the value in right side to the left side. For example:<br><br>

var=5  //5 is assigned to var<br>
a=c;   //value of c is assigned to a<br>
5=c;   // Error! 5 is a constant.<br>

<table>
    <tbody>
        <tr class="f"><th>Operator</th> <th class="f">Example</th>    <th class="f">Same as</th></tr>
        <tr class="f"><td class="f">=</td>          <td class="f">a=b</td>        <td class="f">a=b</td></tr>
        <tr class="f"><td class="f">+=</td>   <td class="f">a+=b</td>       <td class="f">a=a+b</td></tr>
        <tr class="f"><td class="f">-=</td>   <td class="f">a-=b</td>       <td class="f">a=a-b</td></tr>
        <tr class="f"><td class="f">=</td>          <td class="f">a=b</td>        <td class="f">a=a*b</td></tr>
        <tr class="f"><td class="f">/=</td>         <td class="f">a/=b</td>       <td class="f">a=a/b</td></tr>
        <tr class="f"><td class="f">%=</td>         <td class="f">a%=b</td>       <td class="f">a=a%b</td></tr>
    </tbody>
</table>

<h1>Relational Operator</h1>

Relational operators checks relationship between two operands. If the relation is true, it returns value 1 and if the relation is false, it returns value 0. For example:<br><br>

a>b<br><br>

Here, > is a relational operator. If a is greater than b, a>b returns 1 if not then, it returns 0.<br><br>

Relational operators are used in decision making and loops in C programming.<br>

<table>
    <tbody>
        <tr class="f"><th>Operator</th> <th class="f">Meaning of Operator</th>        <th class="f">Example</th></tr>
        <tr class="f"><td class="f">==</td>         <td class="f">Equal to</td>                   <td class="f">5==3 returns false (0)</td></tr>
        <tr class="f"><td class="f">></td>          <td class="f">Greater than</td>               <td class="f">5>3 returns true (1)</td></tr>
        <tr class="f"><td class="f"><</td>          <td class="f">Less than</td>                  <td class="f">5<3 returns false (0)</td></tr>
        <tr class="f"><td class="f">!=</td>         <td class="f">Not equal to</td>               <td class="f">5!=3 returns true(1)</td></tr>
        <tr class="f"><td class="f">>=</td>         <td class="f">Greater than or equal to</td>   <td class="f">5>=3 returns true (1)</td></tr>
        <tr class="f"><td class="f"><=</td>         <td class="f">Less than or equal to</td>      <td class="f">5<=3 return false (0)</td></tr>
    </tbody>
</table>

<h1>Logical Operators</h1>

Logical operators are used to combine expressions containing relation operators. In C, there are 3 logical operators:<br><br>

<table>
    <tbody>
        <tr class="f"><th class="f">Operator</th> <th>Meaning of Operator</th>  <th>Example</th></tr>
        <tr class="f"><td class="f">&&</td>         <td class="f">Logial AND</td>             <td class="f">If c=5 and d=2 then,((c==5) && (d>5)) returns false.</td></tr>
        <tr class="f"><td class="f">||</td>         <td class="f">Logical OR</td>             <td class="f">If c=5 and d=2 then, ((c==5) || (d>5)) returns true.</td></tr>
        <tr class="f"><td class="f">!</td>          <td class="f">Logical NOT</td>            <td class="f">If c=5 then, !(c==5) returns false.</td></tr>
    </tbody>
</table>
<br><br>
<h3>Explanation</h3>

For expression, ((c==5) && (d>5)) to be true, both c==5 and d>5 should be true but, (d>5) is false in the given example. So, the expression is false. For expression ((c==5) || (d>5)) to be true, either the expression should be true. Since, (c==5) is true. So, the expression is true. Since, expression (c==5) is true, !(c==5) is false.<br><br>

<h1>Conditional Operator</h1>

Conditional operator takes three operands and consists of two symbols ? and : . Conditional operators are used for decision making in C. For example:<br><br>

c=(c>0)?10:-10;<br><br>

If c is greater than 0, value of c will be 10 but, if c is less than 0, value of c will be -10.<br><br>

<h1>Bitwise Operators</h1>

A bitwise operator works on each bit of data. Bitwise operators are used in bit level programming.<br><br>

<table>
    <tbody>
        <tr class="f"><th class="f">Operators</th>  <th class="f">Meaning of operators</th></tr>
        <tr class="f"><td class="f">&</td>    <td class="f">Bitwise AND</td></tr>
        <tr class="f"><td class="f">|</td>    <td class="f">Bitwise OR</td></tr>
        <tr class="f"><td class="f">^</td>    <td class="f">Bitwise exclusive OR</td></tr>
        <tr class="f"><td class="f">~</td>    <td class="f">Bitwise complement</td></tr>
        <tr class="f"><td class="f"><<</td>   <td class="f">Shift left</td></tr>
        <tr class="f"><td class="f">>></td>   <td class="f">Shift right</td></tr>
    </tbody>
</table>
<br><br>
Bitwise operator is advance topic in programming . .

<h1>Other Operators</h1>

<h3>Comma Operator</h3>

Comma operators are used to link related expressions together. For example:<br><br>

int a,c=5,d;

<h3>The sizeof operator</h3>

It is a unary operator which is used in finding the size of data type, constant, arrays, structure etc. For example:<br><br>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int a;<br>
    float b;<br>
    double c;<br>
    char d;<br>
    printf("Size of int=%d bytes\n",sizeof(a));<br>
    printf("Size of float=%d bytes\n",sizeof(b));<br>
    printf("Size of double=%d bytes\n",sizeof(c));<br>
    printf("Size of char=%d byte\n",sizeof(d));<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

Size of int=4 bytes<br>
Size of float=4 bytes<br>
Size of double=8 bytes<br>
Size of char=1 byte<br>

<h1>Conditional operators (?:)</h1>

Conditional operators are used in decision making in C programming, i.e, executes different statements according to test condition whether it is either true or false.<br><br>

<h3>Syntax of conditional operators</h3>

<i>conditional_expression?expression1:expression2</i><br><br>

If the test condition is true, <i>expression1</i> is returned and if false <i>expression2</i> is returned.<br><br>

<h3>Example of conditional operator</h3>
#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
   char feb;<br>
   int days;<br>
   printf("Enter l if the year is leap year otherwise enter 0: ");<br>
   scanf("%c",&feb);<br>
   days=(feb=='l')?29:28;<br>
   /*If test condition (feb=='l') is true, days will be equal to 29. */<br>
   /*If test condition (feb=='l') is false, days will be equal to 28. */<br> 
   printf("Number of days in February = %d",days);<br>
   return 0;<br>
}<br><br>

<b>Output</b><br><br>

Enter l if the year is leap year otherwise enter n: l<br>
Number of days in February = 29<br><br>

Other operators such as &(reference operator), *(dereference operator) and ->(member selection) operator will be discussed in pointer chapter.</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
