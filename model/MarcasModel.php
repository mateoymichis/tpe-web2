<?php
class MarcasModel {
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost:33065;'.'dbname=tienda_celulares;', 'root', '');
    }
}

?>