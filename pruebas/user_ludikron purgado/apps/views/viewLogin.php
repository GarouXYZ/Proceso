<!--PHP-->
<?php
session_start();

$flash_error   = $_SESSION['flash_error']   ?? '';
$flash_success = $_SESSION['flash_success'] ?? '';
$old_username  = $_SESSION['old_username']  ?? '';

unset($_SESSION['flash_error'], $_SESSION['flash_success'], $_SESSION['old_username']);
?>

<!--HTML-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Iniciar sesión - Draftosaurus</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../public/css/style_viewLogin.css">
</head>
<body>
  <main class="hero">
    <div class="logo-ring">
      <img src="../../public/images/logo.png" alt="Logo">
    </div>

    <?php if ($flash_error): ?>
      <div class="error-message" role="alert" aria-live="polite"><?= htmlspecialchars($flash_error) ?></div>
    <?php endif; ?>
    <?php if ($flash_success): ?>
      <div class="success-message" role="status" aria-live="polite"><?= htmlspecialchars($flash_success) ?></div>
    <?php endif; ?>

    <form action="../controllers/controllerUsuario.php" method="POST" class="register-grid">
      <input type="hidden" name="action" value="login">
      <input class="pill left" name="username" autocomplete="username" type="text"
             placeholder="Nombre de usuario" required maxlength="24"
             value="<?= htmlspecialchars($old_username) ?>">
      <input class="pill right" name="password" autocomplete="current-password" type="password"
             minlength="8" maxlength="64" placeholder="Contraseña" required>

      <div class="grid-spacer"></div>
      <button class="btn-register" type="submit">Iniciar sesión</button>
    </form>
    <div class="switch-form">
      <p>¿No tienes cuenta?
        <a href="viewRegistro.php">Regístrate aquí</a>
      </p>
    </div>
  </main>
</body>
</html>
