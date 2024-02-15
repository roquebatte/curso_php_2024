<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array1</title>
</head>
<body>
<?php
$edades = array("MOISES" =>"33","CAMILA" =>"25","SAMANDA" =>"17");
echo "camila tiene" . $edades['CAMILA']. " años.";

foreach($edades as $x => $valor){
    echo "Clave=" . $x . ", valor=" . $valor;
    echo "<br>";
}

?> 
</body>
</html>
