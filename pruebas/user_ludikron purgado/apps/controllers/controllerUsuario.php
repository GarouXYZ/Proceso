<?php
session_start();

require_once __DIR__ . '/../models/modelUsuario.php';

$action = $_POST['action'] ?? $_GET['action'] ?? null;

if (!$action) {
  header('Location: ../views/viewLogin.php');
  exit;
}

$model = new modelUsuario();

switch ($action) {

  case 'login': {
    $username = trim($_POST['username'] ?? '');
    $password = (string)($_POST['password'] ?? '');

    if ($username === '' || $password === '') {
      $_SESSION['flash_error']  = 'Completa el usuario y la contraseña.';
      $_SESSION['old_username'] = $username;
      header('Location: ../views/viewLogin.php');
      exit;
    }

    try {
      $user = $model->verificarCredenciales($username, $password);
      if ($user) {
        session_regenerate_id(true);
        $_SESSION['username'] = $user['nombre_usuario'];
        if (!empty($user['email'])) {
          $_SESSION['email'] = $user['email'];
        }
        unset($_SESSION['flash_error'], $_SESSION['old_username']);
        header('Location: ../views/lobby.php');
        exit;
      }

      // Credenciales inválidas
      $_SESSION['flash_error']  = 'Usuario o contraseña incorrectos.';
      $_SESSION['old_username'] = $username;
      header('Location: ../views/viewLogin.php');
      exit;

    } catch (Throwable $e) {
      $_SESSION['flash_error']  = 'Error interno al iniciar sesión. Intenta de nuevo.';
      $_SESSION['old_username'] = $username;
      header('Location: ../views/viewLogin.php');
      exit;
    }
  }

  case 'register': {
    $username  = trim($_POST['username'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $password  = (string)($_POST['password'] ?? '');
    $password2 = (string)($_POST['password2'] ?? '');

    if ($username === '' || $email === '' || $password === '' || $password2 === '') {
      $_SESSION['old_username'] = $username;
      $_SESSION['old_email']    = $email;
      header('Location: ../views/viewRegistro.php?error=3'); // faltan campos
      exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['old_username'] = $username;
      $_SESSION['old_email']    = $email;
      header('Location: ../views/viewRegistro.php?error=mail'); // email inválido
      exit;
    }
    if ($password !== $password2) {
      $_SESSION['old_username'] = $username;
      $_SESSION['old_email']    = $email;
      header('Location: ../views/viewRegistro.php?error=2'); // contraseñas no coinciden
      exit;
    }

    try {
      if ($model->existeNombreOEmail($username, $email)) {
        $_SESSION['old_username'] = $username;
        $_SESSION['old_email']    = $email;
        header('Location: ../views/viewRegistro.php?error=1'); // usuario/email ya existe
        exit;
      }

      if ($model->crear($username, $email, $password)) {
        header('Location: ../views/viewLogin.php?success=1'); // registrado OK
        exit;
      }

      $_SESSION['flash_error']  = 'No se pudo crear la cuenta.';
      $_SESSION['old_username'] = $username;
      $_SESSION['old_email']    = $email;
      header('Location: ../views/viewRegistro.php?error=5');
      exit;

    } catch (Throwable $e) {
      $_SESSION['flash_error']  = 'Error al crear la cuenta.';
      $_SESSION['old_username'] = $username;
      $_SESSION['old_email']    = $email;
      header('Location: ../views/viewRegistro.php?error=5');
      exit;
    }
  }

  case 'logout': {
    session_unset();
    session_destroy();
    header('Location: ../views/viewLogin.php');
    exit;
  }

  default:
    header('Location: ../views/viewLogin.php');
    exit;
}
