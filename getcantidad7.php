<?php
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_7 = Api::post('expedientes/nico/test7');
$cantidad_7 = $end_7->result->cantidad;
$promedio_7 = $end_7->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_7),
    "cantidad" => $cantidad_7


]);
die;
?>
