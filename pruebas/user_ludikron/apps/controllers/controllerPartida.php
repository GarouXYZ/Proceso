<?php
// apps/controllers/controllerPartida.php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

require_once __DIR__ . '/../models/ModelPartida.php';

class ControllerPartida {

  public function setup() {
    include __DIR__ . '/../views/seguimiento.php';
  }

  public function start() {
    $n = max(2, min(5, (int)($_POST['numJugadores'] ?? 2)));

    $players = [];
    for ($i=1; $i<=$n; $i++) {
      $name = trim($_POST['nombre'.$i] ?? '');
      $players[] = [
        'id'    => $i,
        'name'  => ($name !== '') ? $name : ('Jugador '.$i),
        'score' => 0,
      ];
    }

    $_SESSION['num']     = $n;
    $_SESSION['players'] = $players;
    $_SESSION['scores']  = array_fill(0, $n, 0);

    header('Location: controllerPartida.php?action=partida');
    exit;
  }

  public function partida() {
    if (empty($_SESSION['players'])) {
      header('Location: controllerPartida.php?action=setup');
      exit;
    }
    include __DIR__ . '/../views/viewPartida.php';
  }

  public function calcular() {
  if (empty($_SESSION['players'])) {
    header('Location: controllerPartida.php?action=setup'); exit;
  }

  $n = (int)($_SESSION['num'] ?? 0);

  // Jugador activo (1..n)
  $idx = (int)($_POST['jugadorActivo'] ?? 0);
  if ($idx < 1 || $idx > $n) {
    header('Location: controllerPartida.php?action=partida'); exit;
  }

  // Cantidades por recinto (7 recintos)
  $cantidades = [];
  for ($r=1; $r<=7; $r++) {
    $cantidades["r$r"] = max(0, (int)($_POST["recinto$r"] ?? 0));
  }

  $model  = new ModelPartida();
  // ahora el modelo NO recibe $dado
  $puntos = $model->calcularPuntajeRecintos($cantidades);

  $_SESSION['scores'][$idx-1] = ($_SESSION['scores'][$idx-1] ?? 0) + $puntos;

  header('Location: controllerPartida.php?action=partida');
  exit;
}

  public function finalizar() {
    if (empty($_SESSION['players'])) {
      header('Location: controllerPartida.php?action=setup'); exit;
    }
    $players = $_SESSION['players'];
    $scores  = $_SESSION['scores'] ?? [];
    $bestIdx = 0; $best = -PHP_INT_MAX;
    foreach ($scores as $i=>$s) {
      if ($s > $best) { $best = $s; $bestIdx = $i; }
    }
    $_SESSION['__winner'] = ['name'=>$players[$bestIdx]['name'], 'score'=>$best];
    header('Location: controllerPartida.php?action=partida');
    exit;
  }

  public function reset() {
    unset($_SESSION['players'], $_SESSION['scores'], $_SESSION['num'], $_SESSION['__winner']);
    header('Location: controllerPartida.php?action=setup'); exit;
  }

  public function resetScores() {
  if (empty($_SESSION['players'])) {
    header('Location: controllerPartida.php?action=setup'); exit;
  }
  $n = (int)($_SESSION['num'] ?? 0);

  // reiniciar marcador
  $_SESSION['scores'] = array_fill(0, $n, 0);

  // limpiar ganador mostrado (si hubiera)
  unset($_SESSION['__winner']);

  // opcional: si llevás tablero por jugador, reinicialo también
  if (isset($_SESSION['board'])) {
    for ($i=0; $i<$n; $i++) {
      $_SESSION['board'][$i] = ['r1'=>0,'r2'=>0,'r3'=>0,'r4'=>0,'r5'=>0,'r6'=>0,'r7'=>0];
    }
  }

  header('Location: controllerPartida.php?action=partida'); exit;
}
}

/* Router */
$action = $_GET['action'] ?? 'setup';
$ctrl = new ControllerPartida();
switch ($action) {
  case 'setup':     $ctrl->setup();     break;
  case 'start':     $ctrl->start();     break;
  case 'partida':   $ctrl->partida();   break;
  case 'calcular':  $ctrl->calcular();  break;
  case 'finalizar': $ctrl->finalizar(); break;
  case 'reset':     $ctrl->reset();     break;
  case 'resetScores':  $ctrl->resetScores();  break;
  default:          $ctrl->setup();     break;
}


