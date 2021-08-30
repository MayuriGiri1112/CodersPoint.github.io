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
        <title>Inheritance</title>
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
                <h1>Inheritance</h1>
            </div>
        </div>
<p>Inheritance is one of the key feature of object-oriented programming including C++ which allows user to create a new class(derived class) from a existing class(base class). The derived class inherits all feature from a base class and it can have additional features of its own.</p>

            <p>Inheritance makes the code reusable. When we inherit an existing class, all its methods and fields become available in the new class, hence code is reused.<br>
            <b>Note :</b> All members of a class except Private, are inherited.<p>

            <h2>Purpose of Inheritance</h2>
            <ol>
                <li>Code Re usability</li>
                <li>Method Overriding (Hence, Runtime Polymorphism.)</li>
                <li>Use of Virtual Keyword</li>
            </ol>

            <h2>Basic Syntax of Inheritance</h2>
            class Subclass_name : access_mode Superclass_name

<p>While defining a subclass like this, the super class must be already defined or at least declared before the subclass declaration.<br>
    Access Mode is used to specify, the mode in which the properties of superclass will be inherited into subclass, public, private or protected.</p>

<h2>Access Control and Inheritance</h2>

<p>A derived class can access all the non-private members of its base class. Thus base-class members that should not be accessible to the member functions of derived classes should be declared private in the base class.</p>

<h3>Access</h3>
<ol>
<li>same class can access all (public, private, protected) members.</li>
<li>derived class can access only public and protected members.</li>
<li>Outside classes can access only public members.</li>
</ol>

<p>A derived class inherits all base class methods with the following exceptions:
<ol>
<li>Constructors, destructors and copy constructors of the base class.</li>
<li>Overloaded operators of the base class.</li>
<li>The friend functions of the base class.</li></ol></p>

<h2>Inheritance Visibility Mode</h2>

<p>Depending on Access modifier used while inheritance, the availability of class members of Super class in the sub class changes. It can either be private, protected or public.</p>

<h3>1) Public Inheritance</h3>
This is the most used inheritance mode. In this the protected member of super class becomes protected members of sub class and public becomes public.
class Subclass : public Superclass

<h3>2) Private Inheritance</h3>
   In private mode, the protected and public members of super class become private members of derived class.
   class Subclass : Superclass 
   // By default its private inheritance

<h3>3) Protected Inheritance</h3>
In protected mode, the public and protected members of Super class becomes protected members of Sub class.
class subclass : protected Superclass


</div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
