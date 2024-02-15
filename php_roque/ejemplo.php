<?php

    $nombre = "roque";
    $edad = 17;
    $num1 = 15;
    $num2 = 30;

    print("<h2>hola $nombre </h2>");
    echo "bueno, ".$nombre." tu edad es: ".$edad;

    print("<h1> OPERACIOPNES ARITMETICA</h1>");
    echo "<br>Suma: ".$num1+$num2;
    echo "<br>Resta: ".$num1-$num2;
    echo "<br>Mult: ".$num1*$num2;
    echo "<br>Div: ".$num1/$num2;
    echo "<br>Mod: ".$num1%$num2;

    echo "<br>Menor: ".($num1 < $num2);
    echo "<br>Mayor: ".($num1 > $num2);
    echo "<br>Menor o igual: ".($num1 <= $num2);
    echo "<br>Mayor o igual: ".($num1 >= $num2);

    echo "<br>Distintos: ".($num1 != $num2);
    echo "<br>Iguales: ".($num1 == $num2);
?>