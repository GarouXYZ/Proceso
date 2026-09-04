<?php
session_start();

/* Ruta base absoluta a la carpeta de vistas (para href de los botones del footer) */
$BASE = ' ';

if (!isset($_SESSION['username'])) {
  header('Location: ' . $BASE . 'viewLogin.php');
  exit;
}

$usuario = htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8');
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Lobby - Lüdikron</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="../../public/css/style_lobby.css?v=<?= time() ?>">
</head>
<body>

  <header class="lobby-header">
    <div class="header-left">
      <img src="../../public/images/Perfil.png" class="avatar" alt="Tu perfil">
    </div>
      <h2 class="Usuario" ><?= $usuario ?></h2>
      <h1 class="Titulo">Lüdikron</h1>
    <div class="header-right">
      <a class="Cerrar_Sesion" href="<?= $BASE ?>logout.php">Cerrar sesión</a>
    </div>
  </header>
  <!-- Footer con navegación esencial (sin variables/funciones) -->
  <footer class="lobby-footer">
    <a title="Inicio">
      <img src="../../public/images/casa_icon.png" class="footer-icon" alt="Inicio">
    </a>
    <a href="<?= $BASE ?>viewComunidad.php" title="Comunidad">
      <img src="../../public/images/comunidad_icon.png" class="footer-icon" alt="Comunidad">
    </a>
    <a href="../controllers/ControllerPartida.php?action=setup" title="Crear partida">
  <img src="../../public/images/crear_partida_icon.png" class="footer-icon-plus" alt="Crear partida">
</a>

    <a href="<?= $BASE ?>viewNotificaciones.php" title="Notificaciones">
      <img src="../../public/images/notificacion_icon.png" class="footer-icon" alt="Notificaciones">
    </a>
    <a href="<?= $BASE ?>viewTienda.php" title="Tienda">
      <img src="../../public/images/tienda_icon.png" class="footer-icon" alt="Tienda">
    </a>
  </footer>

</body>
</html>
