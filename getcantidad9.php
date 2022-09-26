<?php
ini_set('max_execution_time', 0);
header('Content-Type: application/json; charset=utf-8');
require_once "Api.class.php";
$end_9 = Api::post('expedientes/nico/test9');
$cantidad_9 = $end_9->result->cantidad;
$promedio_9 = $end_9->result->promedio;

echo json_encode([
    "promedio" => ceil($promedio_9),
    "cantidad" => $cantidad_9


]);
die;
?>
