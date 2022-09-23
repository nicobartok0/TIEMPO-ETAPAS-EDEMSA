<?php
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_4a = Api::post('expedientes/nico/test4a');
$cantidad_4a = $end_4a->result->cantidad;
$promedio_4a = $end_4a->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_4a),
    "cantidad" => $cantidad_4a


]);
die;
?>
