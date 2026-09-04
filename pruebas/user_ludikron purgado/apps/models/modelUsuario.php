<?php
// /models/modelUsuario.php
require_once __DIR__ . '/../config/database.php';

class modelUsuario {
    private PDO $db;

    public function __construct() {
        $this->db = Database::get();
    }
    //Busca usuario por nombre de usuario y si no lo encuentra devuelve null
    public function obtenerPorNombre(string $nombre): ?array {
        $sql = "SELECT nombre_usuario, email, password_hash
                FROM jugador
                WHERE nombre_usuario = :n
                LIMIT 1";
        $st = $this->db->prepare($sql);
        $st->execute([':n' => $nombre]);
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        return $fila ?: null;
    }

    //Verifica si ya existe un nombre de usuario o email en la base de datos
    public function existeNombreOEmail(string $nombre, string $email): bool {
        $sql = "SELECT 1
                FROM jugador
                WHERE nombre_usuario = :n OR email = :e
                LIMIT 1";
        $st = $this->db->prepare($sql);
        $st->execute([':n' => $nombre, ':e' => $email]);
        return (bool)$st->fetchColumn();
    }

    //Crea un nuevo usuario en la base de datos
    public function crear(string $nombre, string $email, string $passwordPlano): bool {
        $hash = password_hash($passwordPlano, PASSWORD_DEFAULT);
        $sql = "INSERT INTO jugador (nombre_usuario, email, password_hash)
                VALUES (:n, :e, :h)";
        $st = $this->db->prepare($sql);
        return $st->execute([':n' => $nombre, ':e' => $email, ':h' => $hash]);
    }

    //Verifica las credenciales de inicio de sesión
    public function verificarCredenciales(string $nombre, string $passwordPlano): ?array {
        $fila = $this->obtenerPorNombre($nombre);
        if (!$fila) return null;
        if (!password_verify($passwordPlano, $fila['password_hash'])) return null;

        // No exponemos el hash hacia el controlador
        return [
            'nombre_usuario' => $fila['nombre_usuario'],
            'email'          => $fila['email'],
        ];
    }
}