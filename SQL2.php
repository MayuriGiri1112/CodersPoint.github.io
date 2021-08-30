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
        <title>SQL Syntax</title>
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
                <h1>SQL Syntax</h1>
            </div>
    <h2>Database Tables</h2>
    <p>A database most often contains one or more tables. Each table is identified by a name (e.g. "Customers" or "Orders"). Tables contain records (rows) with data.</p>

    <p>In this tutorial we will use the well-known Northwind sample database (included in MS Access and MS SQL Server).</p>

    <p>Below is a selection from the "Customers" table:</p>
<table class="e">
    <tbody>
        <tr class="f">
            <td class="f"><b>CustomerID</b></td>	
            <td class="f"><b>CustomerName</b></td>
            <td class="f"><b>ContactName</b></td>
            <td class="f"><b>Address</b></td>
            <td class="f"><b>City</b></td>
            <td class="f"><b>PostalCode</b></td>
            <td class="f"><b>Country</b></td>
        </tr>
        <tr class="f">
            <td class="f">1</td>
            <td class="f">Alfreds Futterkiste</td>
            <td class="f">Maria Anders</td>	
            <td class="f">Obere Str. 57</td>	
            <td class="f">Berlin</td>
            <td class="f">12209</td>	
            <td class="f">Germany</td>
        </tr>
        <tr class="f">
            <td class="f">2</td>             
            <td class="f">Ana Trujillo Emparedados y helados</td>	
            <td class="f">Ana Trujillo</td>
            <td class="f">Avda. de la Constitución 2222</td>
            <td class="f">México D.F.</td>
            <td class="f">05021</td>
            <td class="f">Mexico</td>
        </tr>
        <tr class="f">
            <td class="f">3</td>
            <td class="f">Antonio Moreno Taquería</td>
            <td class="f">Antonio Moreno</td>
            <td class="f">Mataderos 2312</td>
            <td class="f">México D.F.</td>
            <td class="f">05023</td>
            <td class="f">Mexico</td>
        </tr>
        <tr class="f">
            <td class="f">4</td>
            <td class="f">Around the Horn</td>
            <td class="f">Thomas Hardy</td>
            <td class="f">120 Hanover Sq.</td>
            <td class="f">London</td>
            <td class="f">WA1 1DP</td>
            <td class="f">UK</td>
        </tr>
        <tr class="f">
            <td class="f">5</td>
            <td class="f">Berglunds snabbköp</td>
            <td class="f">Christina Berglund</td>
            <td class="f">Berguvsvägen 8</td>
            <td class="f">Luleå</td>
            <td class="f">S-958 22</td>
            <td class="f">Sweden</td>
        </tr>
    </tbody>
</table>

    <p>The table above contains five records (one for each customer) and seven columns (CustomerID, CustomerName, ContactName, Address, City, PostalCode, and Country).</p>

    <h2>SQL Statements</h2>
    <p>Most of the actions you need to perform on a database are done with SQL statements.</p>

    <p>The following SQL statement selects all the records in the "Customers" table:<br><br>

Example<br>
SELECT * FROM Customers;<br><br>

In this tutorial we will teach you all about the different SQL statements.<br><br>

Keep in Mind That...<br>
SQL is NOT case sensitive: SELECT is the same as select<br>
Semicolon after SQL Statements?<br>
Some database systems require a semicolon at the end of each SQL statement.<br><br>

Semicolon is the standard way to separate each SQL statement in database systems that allow more than one SQL statement to be executed in the same call to the server.<br><br>

In this tutorial, we will use semicolon at the end of each SQL statement.</p>

    <h2>Some of The Most Important SQL Commands</h2>
    <ol>
        <li><b>SELECT -</b> extracts data from a database</li>
<li><b>UPDATE -</b> updates data in a database</li>
<li><b>DELETE -</b> deletes data from a database</li>
<li><b>INSERT INTO -</b> inserts new data into a database</li>
<li><b>CREATE DATABASE -</b> creates a new database</li>
<li><b>ALTER DATABASE -</b> modifies a database</li>
<li><b>CREATE TABLE -</b> creates a new table</li>
<li><b>ALTER TABLE -</b> modifies a table</li>
<li><b>DROP TABLE -</b> deletes a table</li>
<li><b>CREATE INDEX -</b> creates an index (search key)</li>
<li><b>DROP INDEX -</b> deletes an index    </li>
    </ol>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
