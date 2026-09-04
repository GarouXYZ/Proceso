<!--PHP-->
<?php
session_start();

//Manejo de errores en el registro
$mensaje_exito = '';
if (isset($_GET['error'])) {
  switch ($_GET['error']) {
    case '1': $mensaje_error = 'El usuario ya existe'; break;
    case '2': $mensaje_error = 'Las contraseñas no coinciden'; break;
    case '3': $mensaje_error = 'Por favor completa todos los campos'; break;
    case '4': $mensaje_error = 'Error al crear la cuenta'; break;
    default:  $mensaje_error = 'Error en el registro';
  }
}


$mensaje_exito = (isset($_GET['success']) && $_GET['success'] == '1')
  ? 'Cuenta creada exitosamente. Ya puedes iniciar sesión.'
  : '';

$nombre_viejo = $_SESSION['nombre_viejo'] ?? '';
$email_viejo    = $_SESSION['email_viejo'] ?? '';
unset($_SESSION['nombre_viejo'], $_SESSION['email_viejo']);
?>

<!--HTML-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registrarse - Draftosaurus</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../../public/css/style_viewRegistro.css">
</head>
<body>
  <main class="hero">
    <div class="logo-ring">
      <img src="../../public/images/logo.png" alt="Logo">
    </div>
    <?php if (!empty($mensaje_error)): ?>
      <div class="error-message" role="alert" aria-live="polite"><?= htmlspecialchars($mensaje_error) ?></div>
    <?php endif; ?>
    <?php if (!empty($mensaje_exito)): ?>
      <div class="success-message" role="status" aria-live="polite"><?= htmlspecialchars($mensaje_exito) ?></div>
    <?php endif; ?>
    <form action="../controllers/controllerUsuario.php" method="POST" class="register-grid">
      <input type="hidden" name="action" value="register">

      <input class="pill left" id="userR" name="username" autocomplete="username" type="text" maxlength="24"
             placeholder="Nombre de usuario" required
             value="<?= htmlspecialchars($nombre_viejo) ?>">

      <input class="pill right" id="mailR" name="email" autocomplete="email" type="email"
             placeholder="Correo electrónico" required
             value="<?= htmlspecialchars($email_viejo) ?>">

      <input class="pill left" id="passR" name="password" autocomplete="new-password" type="password"
             minlength="8" maxlength="64" placeholder="Contraseña" required>

      <input class="pill right" id="passR2" name="password2" autocomplete="new-password" type="password"
             minlength="8" maxlength="64" placeholder="Repite la contraseña" required>

      <div class="grid-spacer"></div>

      <button class="btn-register" type="submit">Registrarse</button>
    </form>
    <div class="switch-form">
      <p>¿Ya tienes cuenta? <a href="viewLogin.php">Inicia sesión aquí</a></p>
    </div>
  </main>
</body>
</html>
