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
        <title>Use of WHERE Clause</title>
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
                <h1>Use of WHERE Clause</h1>
            </div>
    <h2>SQL WHERE Clause</h2>
    The WHERE clause is used to filter records.<br><br>

The WHERE clause is used to extract only those records that fulfill a specified criterion.

<h3>SQL WHERE Syntax</h3>
SELECT column_name,column_name<br>
FROM table_name<br>
WHERE column_name operator value<br><br>

Demo Database<br>
In this tutorial we will use the well-known Northwind sample database.<br><br>

Below is a selection from the "Customers" table:

<table class="e">
    <tbody>
        <tr class="f">
            <th class="f"><b>CustomerID</b></th>	
            <th class="f"><b>CustomerName</b></th>
            <th class="f"><b>ContactName</b></th>
            <th class="f"><b>Address</b></th>
            <th class="f"><b>City</b></th>
            <th class="f"><b>PostalCode</b></th>
            <th class="f"><b>Country</b></th>
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

<h3>WHERE Clause Example</h3>
The following SQL statement selects all the customers from the country "Mexico", in the "Customers" table:<br><br>

<b>Example</b>
SELECT * FROM Customers<br>
WHERE Country='Mexico';

<h3>Text Fields vs. Numeric Fields<h3>
SQL requires single quotes around text values (most database systems will also allow double quotes).<br><br>

However, numeric fields should not be enclosed in quotes:<br><br>

<b>Example</b>
SELECT * FROM Customers<br>
WHERE CustomerID=1;

<h3>Operators in The WHERE Clause</h3>
The following operators can be used in the WHERE clause:

<table class="e">
    <tbody>
        <tr class="f">
            <th class="f">Operator</th>	
            <th class="f">Description</th>
        </tr>
        <tr class="f">
            <td class="f">=</td>	
            <td class="f">Equal</td>
        </tr>
        <tr class="f">
            <td class="f">	Not equal.</td>
            <td class="f">Note: In some versions of SQL this operator may be written as !=</td>
        </tr>
        <tr class="f">
            <td class="f">></td>	
            <td class="f">Greater than</td>
        </tr>
        <tr class="f">
            <td class="f"><</td>	
            <td class="f">Less than</td>
        </tr>
        <tr class="f">
            <td class="f">>=</td>	
            <td class="f">Greater than or equal</td>
        </tr>
        <tr class="f">
            <td class="f"><=</td>	
            <td class="f">Less than or equal</td>
        </tr>
        <tr class="f">
            <td class="f">BETWEEN</td>	
            <td class="f">Between an inclusive range</td>
        </tr>
        <tr class="f">
            <td class="f">LIKE</td>	
            <td class="f">Search for a pattern</td>
        </tr>
        <tr class="f">
            <td class="f">IN</td>	
            <td class="f">To specify multiple possible values for a column</td>
        </tr>
    </tbody>
</table>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
