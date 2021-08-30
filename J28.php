<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       Latest compiled and minified CSS

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css">
        jQuery library

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        Latest compiled and minified JavaScript

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Arrays</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("Java_sidenav.php");
?>

<div class="main">
	<br>
<?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Arrays</h1>
            </div>
    Array is an object the contains elements of similar data type. It is a data structure where we store similar elements. We can store only fixed set of elements in a java array.<br>
Array in java is index based, first element of the array is stored at 0 index.<br><br>

<h2>Types of Array in java</h2>
<ol>
<li>Single Dimensional Array</li>
<li>Multidimensional Array</li>
</ol>

<h2>1. Single Dimensional Array</h2>

<b>Declaring Array Variables:</b><br>
To use an array in a program, you must declare a variable to reference the array, and you must specify the type of array the variable can reference. Here is the syntax for declaring an array variable:<br><br>

dataType[] arrayName; <br>
or<br>
dataType arrayName[];<br><br>

<b>Instantiating Arrays:</b><br>
You can instantiate an array by using the new operator with the following syntax:<br><br>

arrayName = new dataType[arraySize];<br><br>

The above statement does two things:<br>
<ol>
    <li>It creates an array using new dataType[arraySize];</li>
    <li>It assigns the reference of the newly created array to the variable arrayName.</li>
</ol>

<h2>2. Multidimensional Array</h2>
<b>Syntax to Declare Multidimensional Array in java</b><br>

dataType[][] arrayName; or <br>
dataType arrayName[][];<br><br>

<b>Example to instantiate Multidimensional Array</b><br>
int[][] arr=new int[2][3];<br>
//2 row and 3 column <br><br>

<b>Example to initialize Multidimensional Array in java</b><br>
arr[0][0]=1; <br>
arr[0][1]=2; <br>
arr[0][2]=3; <br>
arr[1][0]=4; <br>
arr[1][1]=5; <br>
arr[1][2]=6; <br><br>

<b>Passing Arrays to Methods:</b><br>
Just as you can pass primitive type values to methods, you can also pass arrays to methods. For example, the following method displays the elements in an int array:<br><br>

public static void display(int[] arr)<br>
{<br>
    for (int i = 0; i < arr.length; i++) <br>
    {<br>
        System.out.print(arr[i] + " ");<br>
    }<br>
}<br>

<b>Returning an Array from a Method:</b><br>
A method may also return an array.<br>
<b>For example,</b> the method shown below returns an array that is the copy of another array:<br><br>

public static int[] copyarray(int[] list)<br> 
{<br>
    int[] result = new int[list.length];<br><br>

    for (int i = 0; i < list.length - 1 ; i++) <br>
    {<br>
        result[i] = list[i];<br>
    }<br>
    return result;<br>
}<br><br>

<b>Arrays Methods :</b><br>
Arrays.binarySearch(Object[] a, Object key)<br>
Searches the specified array of Object ( Byte, Int , double, etc.) for the specified value using the binary search algorithm. The array must be sorted prior to making this call. This returns index of the search key.<br><br>

Arrays.equals(long[] a, long[] a2)<br>
Returns true if the two specified arrays of longs are equal to one another. Two arrays are considered equal if both arrays contain the same number of elements, and all corresponding pairs of elements in the two arrays are equal.<br><br>

Arrays.fill(int[] a, int val)<br>
Assigns the specified int value to each element of the specified array of ints. Same method could be used by all other primitive data types (Byte, short, Int etc.)<br><br>

Arrays.sort(Object[] a)<br>
Sorts the specified array of objects into ascending order, according to the natural ordering of its elements. Same method could be used by all other primitive data types ( Byte, short, Int, etc.)    
        </div></div><br><br><br><br>
        

<?php
include("footer.php");
?>

</body>
</html>
