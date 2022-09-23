<?php
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_6 = Api::post('expedientes/nico/test6');
$cantidad_6 = $end_6->result->cantidad;
$promedio_6 = $end_6->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_6),
    "cantidad" => $cantidad_6


]);
die;
?>
