<?php
   require_once 'cross.php';
   $header = getallheaders();
   //echo json_encode($header);
   $respuesta = Cross::validar($header);
   // $respuesta = array('status' => 'Autorizado');
   echo json_encode($respuesta);
   /* if($respuesta['status'] == 'No autorizado'){
    http_response_code(403);
   }else{
    http_response_code(200);
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    $nombre = $data['nombre'];
    $numero = $data['numero'];
    $r = ['nombre'=>$nombre,'numero'=>$numero];
    echo json_encode($r);
   }*/
      
   




?>