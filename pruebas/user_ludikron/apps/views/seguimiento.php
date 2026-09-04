<?php
// apps/views/seguimiento.php
if (session_status() !== PHP_SESSION_ACTIVE) { session_start(); }

$err       = $_SESSION['setup_error'] ?? null;
$old_n     = $_SESSION['setup_n']     ?? 2;
$old_names = $_SESSION['setup_names'] ?? [];
unset($_SESSION['setup_error'], $_SESSION['setup_n'], $_SESSION['setup_names']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Seguimiento - Lüdikron</title>
  <link rel="stylesheet" href="../../public/css/view_seguimiento.css?v=<?= time() ?>">
</head>
<body class="seguimiento">

  <div class="segui-back">
    <a href="../views/lobby.php">← Volver al lobby</a>
  </div>

  <form class="segui-card" method="post" action="../controllers/ControllerPartida.php?action=start">

    <?php if ($err): ?>
      <p style="color:#c00;font-weight:bold;"><?= htmlspecialchars($err) ?></p>
    <?php endif; ?>

    <div class="segui-row">
      <label for="numJugadores">Número de jugadores</label>
      <select id="numJugadores" name="numJugadores" onchange="mostrarCampos()">
        <?php for ($opt = 2; $opt <= 5; $opt++): ?>
          <option value="<?= $opt ?>" <?= ($old_n == $opt ? 'selected' : '') ?>><?= $opt ?></option>
        <?php endfor; ?>
      </select>
    </div>

    <?php for ($i = 1; $i <= 5; $i++):
      $visible = ($i <= (int)$old_n);
      $val = $old_names[$i] ?? '';
    ?>
      <div id="box<?= $i ?>" class="campo" <?= $visible ? '' : 'hidden' ?>>
        <label for="nombre<?= $i ?>">Jugador <?= $i ?>°</label>
        <input
          type="text"
          id="nombre<?= $i ?>" name="nombre<?= $i ?>"
          value="<?= htmlspecialchars($val) ?>"
          placeholder="Ej: Jugador <?= $i ?>°"
          <?= $visible ? 'required' : 'disabled' ?>
        >
      </div>
    <?php endfor; ?>

    <button type="submit">Iniciar</button>
  </form>

  <script>
    function mostrarCampos() {
      var n = parseInt(document.getElementById('numJugadores').value, 10);
      for (var i = 1; i <= 5; i++) {
        var box = document.getElementById('box' + i);
        var inp = document.getElementById('nombre' + i);
        var on = i <= n;
        box.hidden   = !on;
        inp.disabled = !on;
        inp.required = on;
      }
    }
    document.addEventListener('DOMContentLoaded', mostrarCampos);
  </script>
</body>
</html>
