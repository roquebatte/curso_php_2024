<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array1</title>
</head>
<body>
<?php
$productos = array(
    array("heladera",25000000,18),
    array("microonda",150000,9),
    array("cosina",59000000,21),
    array("licuadora",45000000,15),
    array("mixer",26000000,5),
    array("ventilador",150000,15),
);
//imprimir todos los valores
//imprimir solo los productos solo con valores (precio > 100000 )
echo "<hr>";
for($x = 0 ; $x < count($productos) ; $x++){
    print("<br>".$productos[$x][0]. ", precio: ".$productos[$x][1]);


}

echo "<hr>";
for($x = 0 ; $x < count($productos) ; $x++){
    print("<br>producto $x");

    for($y = 0 ; $y < 3 ; $y++){
        print($productos[$x][$y]. "  ");
    }

}
echo "<hr>";
foreach($productos as $p){
    foreach($p as $item){
        print($item. " ");
    }
    echo "<br>";
}
?> 
</body>
</html>