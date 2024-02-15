<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array1</title>
</head>
<body>
<?php
$dia[0] =  "lunes";
$dia[1] =  "martes";
$dia[2] =  "miercoles";
$dia[3] =  "jueves";
$dia[4] =  "viernes";
$dia[5] =  "sabado";
$dia[6] =  "domingo";

$hoy = date("N") - 1;
//mostrar el viernes
print ("hoy es : ".$dia[$hoy]);

print("<h4>los dias son</h4>");
for($x = 0 ; $x < count($dia) ; $x++){
   
    if($x == $hoy){
        print("<button>".$dia[$x]."</button><br>");
    }else{
        print($dia[$x]. "<br> ");
    }
}

?> 
</body>
</html>
