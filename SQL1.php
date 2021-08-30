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
        <title>Introduction to SQL</title>
</head>
<body>

<?php
include("courses_navbar.php");
include("SQL_sidenav.php");
?>

<div class="main">
	<br>
<?php
include("search.php");
?>
<br><div class="container">
            <div class="jumbotron">
                <h1>Introduction to SQL</h1>
            </div>
    <p SQL is a standard language for accessing and manipulating databases.</p>

    <h2>What is SQL?</h2>
    <p>
        <ul>
            <li>SQL stands for Structured Query Language<br>
<li>SQL lets you access and manipulate databases</li>
<li>SQL is an ANSI (American National Standards Institute) standard</li>
        </ul>
    
    <h2>What Can SQL do?</h2>
    <ul>
<li>SQL can execute queries against a database</li>
<li>SQL can retrieve data from a database</li>
<li>SQL can insert records in a database</li>
<li>SQL can update records in a database</li>
<li>SQL can delete records from a database</li>
<li>SQL can create new databases</li>
<li>SQL can create new tables in a database</li>
<li>SQL can create stored procedures in a database</li>
<li>SQL can create views in a database</li>
<li>SQL can set permissions on tables, procedures, and views</li>
<li>SQL is a Standard - BUT....<br>Although SQL is an ANSI (American National Standards Institute) standard, there are different versions of the SQL language.
        </ul>
</p>

    <p>However, to be compliant with the ANSI standard, they all support at least the major commands (such as SELECT, UPDATE, DELETE, INSERT, WHERE) in a similar manner.<br>

        <b>Note:</b> Most of the SQL database programs also have their own proprietary extensions in addition to the SQL standard!</p>

    <h2>Using SQL in Your Web Site</h2>
<p>To build a web site that shows data from a database, you will need:<br>

An RDBMS database program (i.e. MS Access, SQL Server, MySQL)<br>
To use a server-side scripting language, like PHP or ASP<br>
To use SQL to get the data you want<br>
To use HTML / CSS<br>
RDBMS<br>
RDBMS stands for Relational Database Management System.<br><br>

RDBMS is the basis for SQL, and for all modern database systems such as MS SQL Server, IBM DB2, Oracle, MySQL, and Microsoft Access.<br><br>

The data in RDBMS is stored in database objects called tables.<br><br>

A table is a collection of related data entries and it consists of columns and rows</p>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
