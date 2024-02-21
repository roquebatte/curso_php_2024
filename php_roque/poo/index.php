<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <div class="contrainer">
        <form method="POST" action="controllers.php">
            <input type="text" name="nombre_apellido" placeholder="Nombre y Apellido">
            <input type="date" name="fecha_nacimiento">
            <input type="text" name="cedula" placeholder="Numero de cédula">
            <input type="text" name="telefono" placeholder="Numero de Telefono">
            <input type="text" name="direccion" placeholder="Direccíon en particular">
            <button type="submit">Guardar</button>
        </form>
    </div>      
</body>
</html>