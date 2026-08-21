<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona creada</title>
</head>
<body>
    <?php
        require_once ('persona.php');

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];

        $persona = new Persona($nombre, $apellido, $edad);
        
        echo "<h1>Se ha creado a la persona </h1>";

        $persona->mostrarInformacion();
    ?>
    <br>
    <input type="button" onclick="history.back()" name="volver" value="Volver atras">
</body>
</html>