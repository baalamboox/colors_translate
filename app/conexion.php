<?php
    function conexion_db() {
        $conexion = new mysqli('localhost', 'root', '', 'traductor_colores_es_en');
        if($conexion->connect_errno) {
            echo 'Error: ' . $conexion->connect_error;
        } else {
            return $conexion;
        }
    }
?>