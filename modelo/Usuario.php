<?php
require_once 'conexion_bd.php';

class Usuario {
    public $objetos;
    private $acceso;

    public function __construct() {
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }

    public function Loguearse($usuario, $pass) {
        $sql = "SELECT usuario.id, usuario.Usuario, usuario.RolID, rol.nombre AS rol_nombre
                FROM usuario 
                INNER JOIN rol ON usuario.RolID = rol.id 
                WHERE usuario.Usuario = :usuario AND usuario.Contraseña = :pass";
        $query = $this->acceso->prepare($sql);
        $query->execute([':usuario' => $usuario, ':pass' => $pass]);
        $this->objetos = $query->fetchAll(PDO::FETCH_OBJ);
        return $this->objetos;
    }
}



