<?php
    require_once '../app/conexion.php';
    $conexion = conexion_db();
    $color_es = $_POST['color_es'];
    $sql = "SELECT color_en FROM tabla_colores WHERE color_es = '$color_es'";
    $query = $conexion->query($sql);
    $color = mysqli_fetch_assoc($query);
    echo $color['color_en'];
?>