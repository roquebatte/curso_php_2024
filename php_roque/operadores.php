<?php

$a = 8;
$b = 3;
echo "<h3>Operaciones Ariméticas</h3>";
echo "a = ".$a." y b = ".$b;
echo "<br>la suma de a + b es ".($a+$b);
echo "<br>la resta de a - b es ".($a-$b);
echo "<br>la divición de a / b es ".($a/$b);
echo "<br>la multiplicación de a * b es ".($a*$b);
echo "<br>a exponende b es ".($a**$b);
echo "<br>a resto b es ".($a%$b);

?>
<?php

$x = 8;
$y = 3;
echo "<h3>Operadores de comparación. vacio es fales y 1 es true</h3>";
echo "a = ".$x." y b = ".$y;
echo "<br>x es igual a y ".($x==$y);
echo "<br>x es distindo a y  ".($x!=$y);
echo "<br>x es menor a y  ".($x<$y);
echo "<br>x es mayor a y ".($x>$y);
echo "<br> x es mayor o igual a y ".($x>=$y);
echo "<br> x es menor o igual a y ".($a<=$y);

?>
<?php

$x = 8;
$y = 3;
echo "<h3>Operadores de logicos. Y, O, negación</h3>";

echo "A es igual B y X es Mayoor a Y ". ($a == $b && $x> $y);

echo "<br>A es igual B o X es Mayoor a Y ". ($a == $b || $x> $y);

echo "<br>negar(B es igual X) ". !($b==$x);

?>