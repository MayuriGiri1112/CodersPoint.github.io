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
        <title>Static Keyword</title>
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
                <h1>Static Keyword</h1>
            </div>
    <p>The static keyword in java is used for memory management mainly. We can apply java static keyword with variables, methods, blocks and nested class. The static keyword belongs to the class than instance of the class.</p>

<p>The static can be:
<ol>
    <li>variable (also known as class variable)</li>
    <li>method (also known as class method)</li>
    <li>block</li>
    <li>nested class</li>
</ol>
</p>

<p>Variables and methods marked static belong to the class rather than to any particular instance of the class. These can be used without having any instances of that class at all. Only the class is sufficient to invoke a static method or access a static variable. A static variable is shared by all the instances of that class i.e only one copy of the static variable is maintained.</p>

class Counter<br>
{<br>
    static int animalCount=0;<br>
    public Counter()<br>
    {<br>
        count+=1;<br>
    }<br>
    public static void main(String[] args)<br>
    {<br>
        new Counter();<br>
        new Counter();<br>
        new Counter();<br>
        System.out.println(''The Number of Animals is: ''+count);<br>
    }<br>
}<br><br>

<b>Output:</b><br>
The Number of Animals is: 3.<br><br>

<p>A static method cannot access non-static/instance variables, because a static method is never associated with any instance. The same applies with the non-static methods as well, a static method can't directly invoke a non-static method. But static method can access non-static methods by means of declaring instances and using them.</p>

<b>Accessing static variables and methods</b><br>
In case of instance methods and instance variables, instances of that class are used to access them.<br><br>

objectReference.instanceVariable<br>
objectReference.instanceMethod<br><br>

class Counter<br>
{<br>
    static int count=0;<br>
    public Counter()<br>
    {<br>
        count+=1;<br>
    }<br>
    public static int getCount()<br>
    {<br>
        return count;<br>
    }<br>
}<br>
class TestAnimal<br>
{<br>
    public static void main(String[] args)<br>
    {<br>
        new Counter();<br>
        new Counter();<br>
        new Counter();<br>
        System.out.println(''The Counter is: ''+ Counter.getCount());<br><br>

        /* Notice the way in which the Static method is called using the class name followed by static method. */
    }
}

Remember that static methods can't be overridden. They can be redefined in a subclass, but redifining and overriding aren't the same thing. Its called as Hiding.
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
