<?php
$llueve = "no";
$es_finde = "no";
$es_feriado = "no";

if( $llueve == "si" || $es_finde == "si" || $es_feriado =="si"){

    print("me quedo en casa");
}else{
    print("me voy al snpp");
}

print("<hr>");

$llueve2 = 1;
$es_finde2 = null;
$es_feriado2 = null;

if($llueve2  || $es_finde2 || $es_feriado2){

    print("me quedo en casa DOS");
}else{
    print("me voy al snpp DOS");
}
