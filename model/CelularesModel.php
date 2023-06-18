<?php
class CelularesModel {
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost:33065;'.'dbname=tienda_celulares;', 'root', '');
    }

    public function getCelulares() {
        $sentencia = $this->db->prepare(("SELECT * FROM celulares"));
        $sentencia->execute();
        $celulares = $sentencia->fetchAll(PDO::FETCH_OBJ);

        return $celulares;
    }

    public function crearCelular($modelo, $descripcion, $imagen, $marca_id) {
        $sentencia = $this->db->prepare("INSERT INTO celulares(modelo, descripcion, imagen, marca_id) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($modelo, $descripcion, $imagen, $marca_id));
    }

    public function borrarCelular($id) {
        $sentencia = $this->db->prepare("DELETE FROM celulares WHERE id_celular=?");
        $sentencia->execute(array($id));
    }
}
?>