<?php
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_3 = Api::post('expedientes/nico/test3');
$cantidad_3 = $end_3->result->cantidad;
$promedio_3 = $end_3->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_3),
    "cantidad" => $cantidad_3


]);
die;
?>
