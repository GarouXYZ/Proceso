<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <form action="procesar.php" method="POST">
        <select id="Categoria" name="Categoria" placeholder="Categoria">
            <option value="Frutas">Frutas</option>
            <option value="Verduras">Verduras</option>
            <option value="Lacteos">Lacteos</option>
            <option value="Snacks">Snacks</option>
            <option value="Carnes">Carnes</option>
        </select>

        <input type="submit" name="action" value="Buscar categoria">
        <br> <br>
        <input type="submit" name="action" value="Ver todos">
    </form>
</body>
</html>