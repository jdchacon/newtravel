<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "viajeo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$idproducto = $row["idproducto"];
$nombre = $row["nombre"];
$precio = $row["precio"];
$cantidad = $row["cantidad"];
$ubi = $row["ubi"];
$nacional = $row["nacional"];
$ciudad = $row["ciudad"];



       
    }
} else {
    echo "0 results";
}
$conn->close();



$conne = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conne->connect_error) {
    die("Connection failed: " . $conne->connect_error);
} 


$sqle = "SELECT COUNT(idproducto) AS hay FROM Productos WHERE ciudad = 'Bogota'";
$resulte = $conne->query($sqle);

if ($resulte->num_rows > 0) {
    // output data of each row
    while($rowe = $resulte->fetch_assoc()) {
$cantidad = $rowe["hay"];

echo "Hay". $cantidad."productos.";


       
    }
} else {
    echo "0 results";
}
$conne->close();

?>