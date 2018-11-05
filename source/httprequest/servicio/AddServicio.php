<?php
    session_start();
    if(!isset($_SESSION['agente']))
    {   
        print('return');
    }
    else
    {
    
        include '../../query/ServicioDao.php';
        include '../../dominio/Servicio.php';

        $partida = urlencode($_REQUEST['partida']);
        $partida_id = $_REQUEST['partidaId'];
        $destino = urlencode($_REQUEST['destino']);
        $destino_id = $_REQUEST['destinoId'];
        $cliente = $_REQUEST['cliente'];
        $usuario = $_REQUEST['usuario'];
        $transportista = $_REQUEST['transportista'];
        $movil = $_REQUEST['movil'];
        $tipo = $_REQUEST['tipo'];
        $tarifa = $_REQUEST['tarifa'];
        $agente = $_SESSION['agente'];
        $servicio = new Servicio();
        $servicio->setPartida($partida);
        $servicio->setPartidaId($partida_id); 
        $servicio->setDestino($destino);
        $servicio->setDestinoId($destino_id);
        $servicio->setCliente($cliente);
        $servicio->setUsuario_nombre($usuario);
        $servicio->setTransportista($transportista);
        $servicio->setMovil($movil);
        $servicio->setTipo($tipo);
        $servicio->setTarifa($tarifa);
        $servicio->setAgente($agente);
        $servicioDao = new ServicioDao();
        $idServicio = $servicioDao->addServicio($servicio);
        if($idServicio > 0)
        {
            $servicioDao->actualizarMovil($servicio->getMovil());
        }
        print $idServicio;
    }