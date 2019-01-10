<?php
include '../../util/validarPeticion.php';
include '../../util/validarSession.php';
include '../../query/PasajeroDao.php';

header('Content-Type: application/json');
$rut = filter_input(INPUT_POST, 'rut');
$nombre = filter_input(INPUT_POST, 'nombre');
$papellido = filter_input(INPUT_POST, 'papellido');
$mapellido = filter_input(INPUT_POST, 'mapellido');
$telefono = filter_input(INPUT_POST, 'telefono');
$celular = filter_input(INPUT_POST, 'celular');
$direccion = filter_input(INPUT_POST, 'direccion');
$nick = filter_input(INPUT_POST, 'nick');
$password = filter_input(INPUT_POST, 'password');
$mail = filter_input(INPUT_POST, 'mail');
$cargo = filter_input(INPUT_POST, 'cargo');
$centroCosto = filter_input(INPUT_POST, 'centro');
$empresa = filter_input(INPUT_POST, 'empresa');
$ruta = filter_input(INPUT_POST, 'ruta');
$pasajero = new Pasajero();
$pasajero->setRut($rut);
$pasajero->setNombre($nombre);
$pasajero->setPapellido($papellido);
$pasajero->setMapellido($mapellido);
$pasajero->setTelefono($telefono);
$pasajero->setCelular($celular);
$pasajero->setDireccion($direccion);
$pasajero->setMail($mail);
$pasajero->setNick($nick);
$pasajero->setPassword($password);
$pasajero->setCargo($cargo);
$pasajero->setCentroCosto($centroCosto);
$pasajero->setEmpresa($empresa);
$pasajero->setRuta($ruta);
$pasajeroDao = new PasajeroDao();
$pasajeroId = $pasajeroDao->agregarPasajero($pasajero);
echo "{\"pasajero_id\":\"".$pasajeroId."\"}";

