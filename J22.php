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
        <title>Method Overridding</title>
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
                <h1>Method Overridding</h1>
            </div>
    <p>If subclass (child class) has the same method as declared in the parent class, it is known as method overriding in java.<br>
    In other words, If subclass provides the specific implementation of the method that has been provided by one of its parent class, it is known as method overriding.</p>

    <h2>Rules for method overriding:</h2>
    <ol>
        <li>The argument list should be exactly the same as that of the overridden method.</li>
<li>The return type should be the same or a subtype of the return type declared in the original overridden method in the superclass.</li>
<li>The access level cannot be more restrictive than the overridden method's access level.</li>
<li>Instance methods can be overridden only if they are inherited by the subclass.</li>
<li> A method declared final cannot be overridden.</li>
<li>A method declared static cannot be overridden but can be re-declared.</li>
<li>If a method cannot be inherited, then it cannot be overridden.</li>
<li> A subclass within the same package as the instance's superclass can override any superclass method that is not declared private or final.</li>
<li>A subclass in a different package can only override the non-final methods declared public or protected.</li>
<li>Constructors cannot be overridden.</li>
    </ol>

    <h2>Advantage:</h2>
    <p>The main advantage of method overriding is that the class can give its own specific implementation to a inherited method without even modifying the parent class(base class). </p>

    <b>Example: </b><br>
class Base<br>
{<br>
    public void display()<br>
    {<br>
        System.out.println("this is base class");<br>
    }<br>
}<br><br>

class Child extends Base<br>
{<br>
    public void display()<br>
    {<br>
        System.out.println("this is child class");<br>
    }<br>
    public static void main( String args[]) <br>
    {<br>
        Child obj = new Child();<br>
        obj.display();<br>
    }<br>
}<br><br>

<b>output</b><br>
this is child class<br><br>

<b>Using the super keyword:</b><br>
When invoking a base class version of an overridden method the super keyword is used. <br><br>

class Base<br>
{<br>
    public void display()<br>
    {<br>
        System.out.println("this is base class");<br>
    }<br>
}<br><br>

class Child extends Base<br>
{<br>
    public void display()<br>
    {<br>
        super.display(); // invokes the super class method <br>
        System.out.println("this is child class");<br>
    }<br>
    public static void main( String args[]) <br>
    {<br>
        Child obj = new Child();<br>
        obj.display();<br>
    }<br>
}<br><br>

<b>output</b><br>
this is base class<br>
this is child class<br>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
