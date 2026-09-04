CREATE TABLE Jugador (
  nombre_usuario VARCHAR(50) PRIMARY KEY,
  email          VARCHAR(120) NOT NULL UNIQUE,
  password_hash  VARCHAR(255) NOT NULL,
  victorias      INT UNSIGNED DEFAULT 0,
  jugadas        INT UNSIGNED DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;