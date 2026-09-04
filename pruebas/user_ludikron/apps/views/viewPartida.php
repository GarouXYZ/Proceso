<?php
/* apps/views/viewPartida.php */
/* La sesión ya está iniciada por el controlador */

$players = $_SESSION['players'] ?? [];
$scores  = $_SESSION['scores']  ?? [];
$n       = $_SESSION['num']     ?? 0;

if (!$players || $n < 2) {
  header('Location: ../controllers/ControllerPartida.php?action=setup');
  exit;
}

// Mostrar ganador si viene de "finalizar" y limpiar para el próximo load
$winner = $_SESSION['__winner'] ?? null;
unset($_SESSION['__winner']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Modo de Seguimiento</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<link rel="stylesheet" href="../../public/css/style_Viewpartida.css?v=<?= time() ?>">
<body>

  <h1>Modo de Seguimiento</h1>

  <?php if ($winner): ?>
    <h2>Ganador: <?= htmlspecialchars($winner['name']) ?> — <?= (int)$winner['score'] ?> pts</h2>
  <?php endif; ?>

  <h2>Puntuaciones: </h2>
  <ul>
    <?php for ($i=0; $i<$n; $i++): ?>
      <li><?= htmlspecialchars($players[$i]['name']) ?> — pts: <?= (int)($scores[$i] ?? 0) ?></li>
    <?php endfor; ?>
  </ul>

  <hr>

  <!-- FORM: calcular puntos para UN jugador -->
  <form method="post" action="../controllers/ControllerPartida.php?action=calcular">

    <h3>Seleccionar jugador que calculara: </h3>
    <?php for ($i=0; $i<$n; $i++): ?>
      <label>
        <input
          type="radio"
          name="jugadorActivo"
          value="<?= $i+1 ?>"
          <?= $i===0 ? 'checked required' : '' ?>>
        <?= htmlspecialchars($players[$i]['name']) ?>
      </label><br>
    <?php endfor; ?>

    <hr>

    <h3>Recintos (tocá cada caja y poné cuántos dinos colocás ahí)</h3>

<section class="tablero-mapa" aria-label="Mapa Draftosaurus">
  <!-- Usamos background en CSS; si querés <img>, avisá y te paso variante -->
  <!-- R1 -->
  <div class="recinto r1">
    <label>Iguales</label>
    <input type="number" min="0" step="1" name="recinto1" value="0">
  </div>

  <!-- R2 -->
  <div class="recinto r2">
    <label>Parejas</label>
    <input type="number" min="0" step="1" name="recinto2" value="0">
  </div>

  <!-- R3 -->
  <div class="recinto r3">
    <label>Tríos</label>
    <input type="number" min="0" step="1" name="recinto3" value="0">
  </div>

  <!-- R4 -->
  <div class="recinto r4">
    <label>Diferentes</label>
    <input type="number" min="0" step="1" name="recinto4" value="0">
  </div>

  <!-- R5 -->
  <div class="recinto r5">
    <label>Rio</label>
    <input type="number" min="0" step="1" name="recinto5" value="0">
  </div>

  <!-- R6 -->
  <div class="recinto r6">
    <label>Unico</label>
    <input type="number" min="0" step="1" name="recinto6" value="0">
  </div>

  <!-- R7 -->
  <div class="recinto r7">
    <label>Rey</label>
    <input type="number" min="0" step="1" name="recinto7" value="0">
  </div>
  
</section>

    <hr>

    <br><br>
    <button type="submit">Calcular para este jugador</button>
    &nbsp;|&nbsp;
    <a href="../controllers/ControllerPartida.php?action=finalizar">Ver ganador</a>
    &nbsp;|&nbsp;
    <a href="../controllers/controllerPartida.php?action=resetScores">Reiniciar puntos</a>
    <nav style="margin-bottom:12px;">
    <a href="../views/lobby.php">← Volver al lobby</a>
</nav>

  </form>

</body>
</html>
