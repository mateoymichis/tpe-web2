<?php

class UsuariosModel{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost:33065;'.'dbname=tienda_celulares;', 'root', '');
    }

    public function getByEmail($usuario) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email=?');
        $query->execute(array($usuario));

        return $query->fetch(PDO::FETCH_OBJ);
    }

}

?>