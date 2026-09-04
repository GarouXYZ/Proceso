CREATE TABLE Jugador (
  nombre_usuario VARCHAR(50) PRIMARY KEY,
  email          VARCHAR(120) NOT NULL UNIQUE,
  password_hash  VARCHAR(255) NOT NULL,
  victorias      INT UNSIGNED DEFAULT 0,
  jugadas        INT UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Partida (
  id_partida      INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  cant_jugadores  TINYINT UNSIGNED,
  estado          ENUM('en_curso','finalizada') DEFAULT 'en_curso',
  ronda_actual    TINYINT UNSIGNED DEFAULT 1,
  turno_actual    TINYINT UNSIGNED DEFAULT 1,
  jugador_actual  VARCHAR(50) NULL,
  CONSTRAINT fk_partida_jugador_actual
    FOREIGN KEY (jugador_actual) REFERENCES Jugador(nombre_usuario)
    ON UPDATE CASCADE ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Tablero (
  id_tablero      INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre_usuario  VARCHAR(50) NOT NULL,
  id_partida      INT UNSIGNED NOT NULL,
  orden_turno     TINYINT UNSIGNED,             -- 1..5
  puntaje_total   INT UNSIGNED DEFAULT 0,
  UNIQUE KEY uq_tablero_jugador_partida (nombre_usuario, id_partida),
  INDEX (id_partida),
  CONSTRAINT fk_tablero_jugador
    FOREIGN KEY (nombre_usuario) REFERENCES Jugador(nombre_usuario)
    ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT fk_tablero_partida
    FOREIGN KEY (id_partida)   REFERENCES Partida(id_partida)
    ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Dinosaurio (
  id_dinosaurio INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  especie ENUM('Rex','Triceratops','Therizinosaurus','Carnosaurio','Raptor','Kron') NOT NULL,
  color   ENUM('rojo','azul','verde','purpura','naranja','marron') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Recinto (
  id_recinto INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  recinto    VARCHAR(60) NOT NULL,
  condicion  VARCHAR(255),
  id_partida INT UNSIGNED NOT NULL,
  id_tablero INT UNSIGNED NOT NULL,
  INDEX (id_partida),
  INDEX (id_tablero),
  CONSTRAINT fk_recinto_partida
    FOREIGN KEY (id_partida) REFERENCES Partida(id_partida)
    ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT fk_recinto_tablero
    FOREIGN KEY (id_tablero) REFERENCES Tablero(id_tablero)
    ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE Movimiento (
  id_movimiento  INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_partida     INT UNSIGNED NOT NULL,
  nombre_usuario VARCHAR(50) NOT NULL,
  id_dinosaurio  INT UNSIGNED NOT NULL,
  id_recinto     INT UNSIGNED NULL,     -- NULL cuando tipo='toma'
  ronda          TINYINT UNSIGNED NOT NULL,
  turno          TINYINT UNSIGNED NOT NULL,
  tipo           ENUM('toma','coloca') NOT NULL,
  INDEX (id_partida),
  INDEX (nombre_usuario),
  INDEX (id_dinosaurio),
  INDEX (id_recinto),
  CONSTRAINT fk_mov_partida
    FOREIGN KEY (id_partida) REFERENCES Partida(id_partida) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT fk_mov_jugador
    FOREIGN KEY (nombre_usuario) REFERENCES Jugador(nombre_usuario) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT fk_mov_dino
    FOREIGN KEY (id_dinosaurio) REFERENCES Dinosaurio(id_dinosaurio) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT fk_mov_recinto
    FOREIGN KEY (id_recinto) REFERENCES Recinto(id_recinto) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;