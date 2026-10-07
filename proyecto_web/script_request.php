<?php
$nombre=$_REQUEST["nombre"];
echo "<h3>$nombre;</h3>";
$suma=$_REQUEST["n1"]+ $_REQUEST["n2"];
$promedio=$suma/2;
echo "Suma: ".$suma."<br>";
echo "Promedio :".$promedio."<br>";
?>