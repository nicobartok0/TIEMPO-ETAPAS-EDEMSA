<?php
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_5 = Api::post('expedientes/nico/test5');
$cantidad_5 = $end_5->result->cantidad;
$promedio_5 = $end_5->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_5),
    "cantidad" => $cantidad_5


]);
die;
?>
