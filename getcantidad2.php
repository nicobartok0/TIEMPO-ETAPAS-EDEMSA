<?php
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_2 = Api::post('expedientes/nico/test2');
$cantidad_2 = $end_2->result->cantidad;
$promedio_2 = $end_2->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_2),
    "cantidad" => $cantidad_2


]);
die;
?>
