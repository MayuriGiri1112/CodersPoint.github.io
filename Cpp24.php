<!DOCTYPE html>
<html>
<head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <!--Latest compiled and minified CSS-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--jQuery library-->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript-->

        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Declaration, Call and Argument</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("Cpp_sidenav.php");
?>

<div class="main">
	<br>
<?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Declaration, Call and Argument</h1>
            </div>
        </div>

            <h2>Function Declaration</h2>
            
            <p>A function declaration tells the compiler about a function name and how to call the function. The actual body of the function can be defined separately.</p>

            <p>A function declaration has the following parts:<br>
    return_type function_name( parameter list );</p>

<p>For our defined function add() in previous chapter, following is the function declaration:<br>
    int add(int a, int b);</p>

<p>Parameter names are not important in function declaration only their type is required, so following is also valid declaration:<br>
    int add(int, int);</p>

<p>Function declaration is required when you define a function in one source file and you call that function in another file. In such case, you should declare the function at the top of the file calling the function.</p>

<h2>Function Call</h2>

<p>While creating a C++ function, you give a definition of what the function has to do. To use a function, you will have to call or invoke that function.</p>

<p>When a program calls a function, program control is transferred to the called function. A called function performs defined task and when its return statement is executed or when its function-ending closing brace is reached, it returns program control back to the main program.</p>

<p>To call a function, you simply need to pass the required parameters along with function name, and if function returns a value, then you can store returned value.</p>

<p><b>For example:</b><br>
int main()<br>
{<br>
int a = 100;<br>
int b = 200;<br>
int ret;<br>
// calling a function to get addition.<br>
ret = add(a, b);<br>
cout << "addition is : " << ret << endl;<br>
return 0;<br>
}</p>

<h2>Function Arguments</h2>

<p>If a function is to use arguments, it must declare variables that accept the values of the arguments. These variables are called the formal parameters of the function.<br>
    The formal parameters behave like other local variables inside the function and are created upon entry into the function and destroyed upon exit.</p>

<p>While calling a function, there are two ways that arguments can be passed to a function:<br><br>
    
    <b>Call by value</b><br>
This method copies the actual value of an argument into the formal parameter of the function. In this case, changes made to the parameter inside the function have no effect on the argument.<br><br>

<b>Call by pointer</b><br>
This method copies the address of an argument into the formal parameter. Inside the function, the address is used to access the actual argument used in the call. This means that changes made to the parameter affect the argument.<br><br>

<b>Call by reference</b><br>
This method copies the reference of an argument into the formal parameter. Inside the function, the reference is used to access the actual argument used in the call. This means that changes made to the parameter affect the argument.</p>

</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
