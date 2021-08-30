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
        <title>Final Keyword</title>
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
                <h1>Final Keyword</h1>
            </div>
    The final keyword in java is used to restrict the user. The java final keyword can be used in many context. Final can be:<br>
    <ol>
        <li>variable</li>
        <li>method</li>
        <li>class</li>
    </ol>

The final keyword can be applied with the variables, a final variable that have no value it is called blank final variable or uninitialized final variable. It can be initialized in the constructor only. The blank final variable can be static also which will be initialized in the static block only.

<h2>1) Java final variable</h2>
If you make any variable as final, you cannot change the value of final variable(It will be constant).<br><br>

Example of final variable There is a final variable speedlimit, we are going to change the value of this variable, but It can't be changed because final variable once assigned a value can never be changed.<br><br>

class Game<br>
{<br>
final int speedlimit=90;    //final variable<br>
void run()<br>
{<br> 
speedlimit=400; <br>
} <br>
public static void main(String args[])<br>
{<br> 
Game obj=new Game(); <br>
obj.run(); <br>
} <br>
}//end of class <br><br>

<b>Output:</b>Compile Time Error

<h2>2) Java final method></h2>
If you make any method as final, you cannot override it.<br><br>

<b>Example of final method</b><br>
class Game<br>
{ <br>
    final void run()<br>
    {<br>
        System.out.println("bowling");<br>
    }<br>
} <br>
class Cricket extends Game<br>
{ <br>
    void run()<br>
    {<br>
        System.out.println("bowling safely with 100kmph");<br>
    }<br>
    public static void main(String args[])<br>
    { <br>
        Cricket cricket= new Cricket(); <br>
        cricket.run(); <br>
    } <br>
} <br><br>

<b>Output:</b>Compile Time Error

<h2>3) Java final class</h2>
If you make any class as final, you cannot extend it.<br><br>

<b>Example of final class</b><br>

final class Game<br>
{<br>
<br>
} <br>
class Cricket extends Game<br>
{ <br>
    void run()<br>
    {<br>
        System.out.println("bowling safely with 100kmph");<br>
    } <br>
    public static void main(String args[])<br>
    {<br>
        Cricket cricket= new Cricket();<br>
        cricket.run();<br>
    } <br>
} <br><br>

<b>Output:</b>Compile Time Error
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
