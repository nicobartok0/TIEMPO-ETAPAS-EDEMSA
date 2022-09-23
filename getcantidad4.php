<?php
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_4 = Api::post('expedientes/nico/test4');
$cantidad_4 = $end_4->result->cantidad;
$promedio_4 = $end_4->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_4),
    "cantidad" => $cantidad_4


]);
die;
?>
