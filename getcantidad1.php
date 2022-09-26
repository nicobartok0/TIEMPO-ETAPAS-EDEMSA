<?php

header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_1 = Api::post('expedientes/nico/test1');
$cantidad_1 = $end_1->result->cantidad;
$promedio_1 = $end_1->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_1),
    "cantidad" => $cantidad_1


]);
die;
?>
