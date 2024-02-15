<!doctype html>
<html>
  <head>
    <title>edad</title>
    <meta charset="UTF-8"/>
  </head>   
  <body>
    <h1>TIENDA ONLINE</h1>
    <?php
  
      $edad = 18;
      if( $edad >= 18 && $edad <70 ){
        echo"Eres mayor de edad ";
        //header("Location: https://www.google.com");
        exit;
      }else if( $edad <18 && $edad >11 ){
        $mensaje = "script> alert(´Tas chiquito´);</script>";
        echo $mensaje;
      }else{
        header("Location: https://www.youtube.com");
        exit;
      }

    ?>
  </body>
</html>