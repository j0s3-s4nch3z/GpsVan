<?php
include '../../util/validarPeticion.php';
include '../../util/validarSession.php';
include '../../query/NotificacionDao.php';
include '../../log/Log.php';

header('Content-Type: application/json');
$id = filter_input(INPUT_POST, 'id');
$notificacionDao = new NotificacionDao();
$notificacionDao->modificarEstadoNotificacion($id);
echo "{\"notificacion_id\":\"".$id."\"}";
Log::write_log("MODESTADOCNOTIFICACION", 0);