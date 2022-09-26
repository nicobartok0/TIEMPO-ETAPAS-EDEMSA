<?php

header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_0 = Api::post('expedientes/nico/test0');
$cantidad_0 = $end_0->result->cantidad;
$promedio_0 = $end_0->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_0),
    "cantidad" => $cantidad_0


]);
die;
?>
