<?php
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_8 = Api::post('expedientes/nico/test8');
$cantidad_8 = $end_8->result->cantidad;
$promedio_8 = $end_8->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_8),
    "cantidad" => $cantidad_8


]);
die;
?>
