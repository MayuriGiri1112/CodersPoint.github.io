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
        <title>Bitwise Operators</title>
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
                <h1>Bitwise Operators</h1>
            </div>

            <p>
                Bitwise operators are special types of operators that are used in programming the processor. In processor, mathematical operations like: addition, subtraction, addition and division are done using the bitwise operators which makes processing faster and saves power.<br><br>

            <table class="e">
                <tbody>
                    <tr class="f"><th class="f">Operators</th>      <th class="f">Meaning of operators</th></tr>
                    <tr class="f"><td class="f">&</td>              <td class="f">Bitwise AND</td></tr>
                    <tr class="f"><td class="f">|</td>              <td class="f">Bitwise OR</td></tr>
                    <tr class="f"><td class="f">^</td>              <td class="f">Bitwise exclusive OR</td></tr>
                    <tr class="f"><td class="f">~</td>              <td class="f">Bitwise complement</td></tr>
                    <tr class="f"><td class="f"><<</td>             <td class="f">Shift left</td></tr>
                    <tr class="f"><td class="f">>></td>             <td class="f">Shift right</td></tr>
                </tbody>
            </table>

            <h1>Bitwise AND operator in C programming.</h1>
The output of logical AND is 1 if both the corresponding bits of operand is 1. If either of bit is 0 or both bits are 0, the output will be 0. It is a binary operator(works on two operands) and indicated in C programming by & symbol. Let us suppose the bitwise AND operation of two integers 12 and 25.<br><br>

12 = 00001100 (In Binary)<br>
25 = 00011001 (In Binary)<br><br>

Bit Operation of 12 and 25<br>
  00001100<br>
& 00011001<br>
  ____<br>
  00001000  = 8 (In decimal)<br><br>'
  
As, every bitwise operator works on each bit of data. The corresponding bits of two inputs are check and if both bits are 1 then only the output will be 1. In this case, both bits are 1 at only one position,i.e, fourth position from the right, hence the output bit of that position is 1 and all other bits are 0.<br><br>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int a=12,b=39;<br>
    printf("Output=%d",a&b);<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

Output=4
 

<h1>Bitwise OR operator in C</h1>

The output of bitwise OR is 1 if either of the bit is 1 or both the bits are 1. In C Programming, bitwise OR operator is denoted by |.<br><br>

12 = 00001100 (In Binary)<br>
25 = 00011001 (In Binary)<br><br>

Bitwise OR Operation of 12 and 25<br>
  00001100<br>
| 00011001<br>
  ____<br>
  00011101  = 29 (In decimal)<br><br>

  #include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int a=12,b=25;<br>
    printf("Output=%d",a&b);<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

Output=29

<h1>C Programming Bitwise XOR(exclusive OR) operator</h1>

The output of bitwise XOR operator is 1 if the corresponding bits of two operators are opposite(i.e., To get corresponding output bit 1; if corresponding bit of first operand is 0 then, corresponding bit of second operand should be 1 and vice-versa.). It is denoted by ^.<br><br>

12 = 00001100 (In Binary)<br>
25 = 00011001 (In Binary)<br><br>

Bitwise XOR Operation of 12 and 25<br>
  00001100<br>
| 00011001<br>
  ____<br>
  00010101  = 21 (In decimal)<br><br>

 #include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int a=12,b=25;<br>
    printf("Output=%d",a^b);<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

Output=21

<h1>Bitwise compliment operator</h1>

Bitwise compliment operator is an unary operator(works on one operand only). It changes the corresponding bit of the operand to opposite bit,i.e., 0 to 1 and 1 to 0. It is denoted by ~.<br><br>

35=00100011 (In Binary)<br><br>

Bitwise complement Operation of 35
~ 00100011 <br>
  ____<br>
  11011100  = 220 (In decimal)
  
  <h1>Twist in bitwise complement operator in C Programming</h1>
  
Output of ~35 shown by compiler won't be 220, instead it shows -36. For any integer n, bitwise complement of n will be -(n+1). To understand this, you should understand the concept of 2's complement.

<h1>2's Complement</h1>

Two's complement is the operation on binary numbers which allows number to write it in different form. The 2's complement of number is equal to the complement of number plus 1. For example:<br><br>

<table class="e">
    <tbody>
        <tr class="f"><th class="f">Decimal</th>         <th class="f">Binary</th>           <th class="f">2's complement</th></tr>
        <tr class="f"><td class="f">0</td>               <td class="f">0000000</td>          <td class="f">-(11111111+1) = -00000000 = -0(decimal)</td></tr>
        <tr class="f"><td class="f">1</td>               <td class="f">00000001</td>         <td class="f">-(11111110+1) = -11111111 = -256(decimal)</td></tr>
        <tr class="f"><td class="f">12</td>              <td class="f">00001100</td>         <td class="f">-(11110011+1) = -11110100 = -244(decimal)</td></tr>
        <tr class="f"><td class="f">220</td>             <td class="f">11011100</td>         <td class="f">-(00100011+1) = -00100100 = -36(decimal)</td></tr>
    </tbody>
</table><br><br>

<b>Note:</b> Overflow is ignored while computing 2's complement.<br><br>

If we consider the bitwise complement of 35, 220(in decimal) is converted into 2's complement which is -36. Thus, the output shown by computer will be -36 instead of 220.<br><br>

<h1>How is bitwise complement of any number N=-(N+1)?</h1>

bitwise complement of N= ~N (represented in 2's complement form)<br>
2'complement of N= -((~N)+1) = -(N+1)<br><br>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    printf("complement=%d\n",~35);<br>
    printf("complement=%d\n",~-12);<br>
    return 0;<br>
}<br><br>

<b>Output</b><br><br>

complement=-36<br>
complement=11<br><br>

<h1>Shift Operator in C programming</h1>

There are two shift operators in C programming:<br><br>

<ol>
    <li>Right shift operator</li>
    <li>Left shift operator.</li>
</ol>

<h3>Right Shift Operator</h3>

Right shift operator moves the all bits towards the right by certain number of bits which can be specified. It is denoted by >>.<br><br>

212 = 11010100 (In binary)<br>
212>>2 = 00110101 (In binary) [Right shift by two bits]<br>
212>>7 = 00000001 (In binary)<br>
212>>8 = 00000000 <br>
212>>0 = 11010100 (No Shift)<br>

<h3>Left Shift Operator</h3>

Left shift operator moves the all bits towards the left by certain number of bits which can be specified. It is denoted by <<.<br><br>

212 = 11010100 (In binary)<br>
212<<1 = 110101000 (In binary) [Left shift by one bit]<br>
212<<0 =11010100 (Shift by 0)<br>
212<<4 = 110101000000 (In binary) =3392(In decimal)<br><br>

#include<<i>stdio.h</i>><br>
int main()<br>
{<br>
    int num=212,i;<br>
    for (i=0;i<=2;++i)<br>
        printf("Right shift by %d: %d\n",i,num>>i);<br>
     printf("\n");<br>
     for (i=0;i<=2;++i) <br>
        printf("Left shift by %d: %d\n",i,num<<<i>i</i>); <br>
                return 0;<br>
}<br><br>

<b>Output</b><br><br>

Right Shift by 0: 212<br>
Right Shift by 1: 106<br>
Right Shift by 2: 53<br><br>

Left Shift by 0: 212<br>
Left Shift by 1: 424<br>
Left Shift by 2: 848<br><br>

<h3>Interesting thing to note in Left and Right Shift</h3>

For any positive number, right shift is equal to integer division of that number by (shift bit plus one) and for any integer left shift is equal to the multiplication of that number by (shift bit plus one).</p>
        </div>


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
