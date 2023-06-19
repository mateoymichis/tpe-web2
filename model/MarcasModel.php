<?php
class MarcasModel {
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost:33065;'.'dbname=tienda_celulares;', 'root', '');
    }

    public function getMarcas() {
        $sentencia = $this->db->prepare(("SELECT * FROM marcas"));
        $sentencia->execute();
        $marcas = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $marcas;
    }
}

?>