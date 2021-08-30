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
        <title>Insert into TABLE Statement</title>
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
                <h1>Insert into TABLE Statement</h1>
            </div>
The INSERT INTO statement is used to insert new records in a table.

<h2>The SQL INSERT INTO Statement</h2>
The INSERT INTO statement is used to insert new records in a table.

<h3>SQL INSERT INTO Syntax</h3>
It is possible to write the INSERT INTO statement in two forms.<br><br>

The first form does not specify the column names where the data will be inserted, only their values:<br><br>

INSERT INTO table_name<br>
VALUES (value1,value2,value3,...)<br>
The second form specifies both the column names and the values to be inserted:<br><br>

INSERT INTO table_name (column1,column2,column3,...)<br>
VALUES (value1,value2,value3,...)<br><br>

Demo Database<br>
In this tutorial we will use the well-known Northwind sample database.<br><br>

Below is a selection from the "Customers" table:

<table>
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
            <td class="f">87</td>
            <td class="f">Wartian Herkku</td>
            <td class="f">Pirkko Koskitalo</td>
            <td class="f">Torikatu 38</td>
            <td class="f">Oulu</td>
            <td class="f">90110</td>
            <td class="f">Finland</td>
        </tr>
        <tr class="f">
            <td class="f">88</td>
            <td class="f">Wellington Importadora</td>
            <td class="f">Paula Parente</td>
            <td class="f">Rua do Mercado, 12</td>
            <td class="f">Resende</td>
            <td class="f">08737-363</td>
            <td class="f">Brazil</td>
        </tr>
        <tr class="f">
            <td class="f">89</td>
            <td class="f">White Clover Markets</td>
            <td class="f">Karl Jablonski</td>
            <td class="f">305 - 14th Ave. S. Suite 3B</td>
            <td class="f">Seattle</td>
            <td class="f">98128</td>
            <td class="f">USA</td>
        </tr>
        <tr class="f">
            <td class="f">90</td>
            <td class="f">Wilman Kala</td>
            <td class="f">Matti Karttunen</td>
            <td class="f">Keskuskatu 45</td>
            <td class="f">Helsinki</td>
            <td class="f">21240</td>
            <td class="f">Finland</td>
        </tr>
        <tr class="f">
            <td class="f">91</td>
            <td class="f">Wolski</td>
            <td class="f">Zbyszek</td>
            <td class="f">ul. Filtrowa 68</td>
            <td class="f">Walla</td>
            <td class="f">01-012</td>
            <td class="f">Poland</td>
        </tr>
    </tbody>
</table>

<h3>INSERT INTO Example</h3>
Now we want to insert a new row in the "Customers" table.<br><br>

We use the following SQL statement:<br><br>

INSERT INTO Customers<br>
VALUES ('Cardinal','Tom B. Erichsen','Skagen 21','Stavanger','4006','Norway')<br><br>
The selection from the "Customers" table will now look like this:

<table>
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
            <td class="f">87</td>
            <td class="f">Wartian Herkku</td>
            <td class="f">Pirkko Koskitalo</td>
            <td class="f">Torikatu 38</td>
            <td class="f">Oulu</td>
            <td class="f">90110</td>
            <td class="f">Finland</td>
        </tr>
        <tr class="f">
            <td class="f">88</td>
            <td class="f">Wellington Importadora</td>
            <td class="f">Paula Parente</td>
            <td class="f">Rua do Mercado, 12</td>
            <td class="f">Resende</td>
            <td class="f">08737-363</td>
            <td class="f">Brazil</td>
        </tr>
        <tr class="f">
            <td class="f">89</td>
            <td class="f">White Clover Markets</td>
            <td class="f">Karl Jablonski</td>
            <td class="f">305 - 14th Ave. S. Suite 3B</td>
            <td class="f">Seattle</td>
            <td class="f">98128</td>
            <td class="f">USA</td>
        </tr>
        <tr class="f">
            <td class="f">90</td>
            <td class="f">Wilman Kala</td>
            <td class="f">Matti Karttunen</td>
            <td class="f">Keskuskatu 45</td>
            <td class="f">Helsinki</td>
            <td class="f">21240</td>
            <td class="f">Finland</td>
        </tr>
        <tr class="f">
            <td class="f">91</td>
            <td class="f">Wolski</td>
            <td class="f">Zbyszek</td>
            <td class="f">ul. Filtrowa 68</td>
            <td class="f">Walla</td>
            <td class="f">01-012</td>
            <td class="f">Poland</td>
        </tr>
        <tr class="f">
           <td class="f">92</td>
           <td class="f">Cardinal</td>
           <td class="f">Tom B. Erichsen</td>
            <td class="f">Skagen 21</td>
           <td class="f">Stavanger</td>
           <td class="f">4006</td>
           <td class="f">Norway</td>
        </tr>
    </tbody>
</table>

Insert Data Only in Specified Columns<br>
It is also possible to only add data in specific columns.<br><br>

The following SQL statement will add a new row, but only add data in the "CustomerID", "CustomerName", "City", and "Country" columns:<br><br>

INSERT INTO Customers (CustomerID, CustomerName, City, Country)<br>
VALUES ('Cardinal', 'Stavanger', 'Norway')<br><br>
The selection from the "Customers" table will now look like this:

<table>
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
            <td class="f">87</td>
            <td class="f">Wartian Herkku</td>
            <td class="f">Pirkko Koskitalo</td>
            <td class="f">Torikatu 38</td>
            <td class="f">Oulu</td>
            <td class="f">90110</td>
            <td class="f">Finland</td>
        </tr>
        <tr class="f">
            <td class="f">88</td>
            <td class="f">Wellington Importadora</td>
            <td class="f">Paula Parente</td>
            <td class="f">Rua do Mercado, 12</td>
            <td class="f">Resende</td>
            <td class="f">08737-363</td>
            <td class="f">Brazil</td>
        </tr>
        <tr class="f">
            <td class="f">89</td>
            <td class="f">White Clover Markets</td>
            <td class="f">Karl Jablonski</td>
            <td class="f">305 - 14th Ave. S. Suite 3B</td>
            <td class="f">Seattle</td>
            <td class="f">98128</td>
            <td class="f">USA</td>
        </tr>
        <tr class="f">
            <td class="f">90</td>
            <td class="f">Wilman Kala</td>
            <td class="f">Matti Karttunen</td>
            <td class="f">Keskuskatu 45</td>
            <td class="f">Helsinki</td>
            <td class="f">21240</td>
            <td class="f">Finland</td>
        </tr>
        <tr class="f">
            <td class="f">91</td>
            <td class="f">Wolski</td>
            <td class="f">Zbyszek</td>
            <td class="f">ul. Filtrowa 68</td>
            <td class="f">Walla</td>
            <td class="f">01-012</td>
            <td class="f">Poland</td>
        </tr>
        <tr class="f">
           <td class="f">92</td>
           <td class="f">Cardinal</td>
           <td class="f"></td>
            <td class="f"></td>
           <td class="f">Stavanger</td>
           <td class="f"></td>
           <td class="f">Norway</td>
        </tr>
    </tbody>
</table>   
        </div></div><br><br><br><br>

<?php
include("footer.php");
?>

</body>
</html>
