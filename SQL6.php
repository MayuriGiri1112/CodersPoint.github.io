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
        <title>AND-OR Operator</title>
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
                <h1>AND-OR Operator</h1>
            </div>
    <p>The AND & OR operators are used to filter records based on more than one condition.</p>

    <h2>The SQL AND & OR Operators</h2>
    The AND operator displays a record if both the first condition AND the second condition are true.<br><br>

The OR operator displays a record if either the first condition OR the second condition is true.<br><br>

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

<h3>AND Operator Example</h3>
<p>The following SQL statement selects all customers from the country "Germany" AND the city "Berlin", in the "Customers" table:<br><br>

<b>Example</b><br>
SELECT * FROM Customers<br>
WHERE Country='Germany'<br>
AND City='Berlin';</p>

<h3><OR Operator Example</h3>
<p>The following SQL statement selects all customers from the city "Berlin" OR "München", in the "Customers" table: <br><br>

<b>Example</b><br>
SELECT * FROM Customers<br>
WHERE City='Berlin'<br>
OR City='München';</p>

<h3>Combining AND & OR</h3>
<p>You can also combine AND and OR (use parenthesis to form complex expressions).<br><br>

The following SQL statement selects all customers from the country "Germany" AND the city must be equal to "Berlin" OR "München", in the "Customers" table:<br><br>

<b>Example</b><br>
SELECT * FROM Customers<br>
WHERE Country='Germany'<br>
AND (City='Berlin' OR City='München');  </p>
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
