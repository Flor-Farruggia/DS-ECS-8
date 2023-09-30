<?php

require_once '../../configuracion/database.php';
require_once '../../modelo/Auto.php';
require_once 'responses/consultarTodosResponse.php';

header('Content-Type: application/json');
$resp = new ConsultarTodosResponse();


$resp->ListAutos = Auto::BuscarTodas();

echo json_encode($resp);