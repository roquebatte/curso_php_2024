<?php
   function suma($x, $y){
        return $x+$y;

   }
   function resta($x, $y){
        return $x-$y;
   }    
   function mul($x, $y){
        return $x*$y;
   }
   function div($x, $y){
    return $x/$y;
   }
   //VARIABLE GLOBAL
if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["op"])){
   $numero1 = $_GET["num1"];
   $numero2 = $_GET["num2"];
   $operacion = $_GET["op"];
   if(!empty($numero1) && !empty($numero2) && !empty($operacion)){
   if($operacion == "suma"){
        $resultado = suma($numero1,$numero2);
   }else if($operacion == "resta"){
        $resultado = resta($numero1,$numero2);

   }else if($operacion == "multiplicacion"){
    $resultado = mul($numero1,$numero2);

   }else if($operacion == "divicion"){
    $resultado = div($numero1,$numero2);
   }
   
   echo "el resultodo es: ".$resultado;
}else{
    echo "algun cmpo esta vacio";
}
}else{
    echo "Que ase aqui";
}
?>