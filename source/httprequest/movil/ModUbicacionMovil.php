<?php
include '../../util/validarPeticion.php';
include '../../util/validarSession.php';
include '../../query/MovilDao.php';

header('Content-Type: application/json');
$respuesta = 0;
$lat = filter_input(INPUT_POST, 'lat');
$lon = filter_input(INPUT_POST, 'lon');
$nombre = filter_input(INPUT_POST, 'conductor');
$movilDao = new MovilDao();
$movilDao->modificarUbicacion($nombre, $lat, $lon);
echo "{\"movil_conductor\":".$nombre.",\"movil_lat\":".$lat.",\"movil_lng\":".$lon."}";