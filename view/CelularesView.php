<?php

class CelularesView {
    function __construct()
    {
        
    }

    public function displayCelulares($celulares) {
        $html = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <base href='.BASE_URL.' >

            <title>Celulares</title>
            <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
        <h1>Tienda de celulares</h1>';


        foreach($celulares as $celular) {
            $html.= "<li><p>". $celular->modelo."</p><p>". $celular->descripcion ."</p><p><img src=\"". $celular->imagen. "\"></li>";
        }


        $html.='<form action="insertar" method="post">
                    <input type="text" name="modelo" placeholder="Modelo">
                    <input type="text" name="descripcion" placeholder="Descripcion">
                    <input type="text" name="imagen"  placeholder="Imagen">
                    <input type="number" name="marca_id"  value="1">
                    <input type="submit" value="Insertar">
                </form>';

        $html.='</body>
        </html>';

        echo $html;

    }
}
?>