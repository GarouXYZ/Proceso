<?php
// apps/models/ModelPartida.php
class ModelPartida {

  /**
   * Recibe cantidades por recinto:
   *   ['r1'=>int,'r2'=>int,'r3'=>int,'r4'=>int,'r5'=>int,'r6'=>int,'r7'=>int]
   * y devuelve el puntaje total de ese turno/jugador (sin dado).
   */
  public function calcularPuntajeRecintos(array $cantidades): int {
    $n1 = (int)($cantidades['r1'] ?? 0); // Iguales
    $n2 = (int)($cantidades['r2'] ?? 0); // Parejas
    $n3 = (int)($cantidades['r3'] ?? 0); // Tríos
    $n4 = (int)($cantidades['r4'] ?? 0); // Diversidad (interpreta "cantidad de tipos distintos")
    $n5 = (int)($cantidades['r5'] ?? 0); // Río / Cadena
    $n6 = (int)($cantidades['r6'] ?? 0); // Carnívoros
    $n7 = (int)($cantidades['r7'] ?? 0); // Mayorías

    $total  = 0;
    $total += $this->puntosRecintoIguales($n1);
    $total += $this->puntosParejas($n2);
    $total += $this->puntosTrios($n3);
    $total += $this->puntosDiversidad($n4);
    $total += $this->puntosCadena($n5);
    $total += $this->puntosCarnivoros($n6);
    $total += $this->puntosMayorias($n7);

    return $total;
  }

  /* R1 — Iguales (tabla escalada de tu boceto) */
  private function puntosRecintoIguales(int $n): int {
    return match (true) {
      $n <= 1 => 0,
      $n == 2 => 4,
      $n == 3 => 8,
      $n == 4 => 12,
      $n == 5 => 18,
      default => 24, // 6 o más
    };
  }

  /* R2 — Parejas: 4 puntos por pareja completa */
  private function puntosParejas(int $n): int {
    return 4 * intdiv($n, 2);
  }

  /* R3 — Tríos: 7 puntos por trío completo */
  private function puntosTrios(int $n): int {
    return 7 * intdiv($n, 3);
  }

  /* R4 — Diversidad: premiar variedad (ajustá si querés otra curva) */
  private function puntosDiversidad(int $tipos): int {
    return match (true) {
      $tipos <= 0 => 0,
      $tipos == 1 => 1,
      $tipos == 2 => 3,
      $tipos == 3 => 6,
      default      => 10, // 4 o más tipos diferentes
    };
  }

  /* R5 — Río/Cadena: sumatoria 1+2+...+n */
  private function puntosCadena(int $n): int {
    return intdiv($n * ($n + 1), 2);
  }

  /* R6 — Carnívoros: 2 puntos por dino (quitamos dependencia del dado) */
  private function puntosCarnivoros(int $n): int {
    return 2 * max(0, $n);
  }

  /* R7 — Mayorías: lineal hasta 4; si llegás a 5, bonifica +5 */
  private function puntosMayorias(int $n): int {
    return ($n >= 5) ? ($n + 5) : max(0, $n);
  }
}
