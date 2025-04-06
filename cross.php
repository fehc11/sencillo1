<?php
//cambios
     header('Access-Control-Allow-Origin: *');
     header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
     header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
     class Cross{
        
        public static function validar(){
            $header = getallheaders();//segundo cambio
            if(!isset($header['Authorization']) || $header['Authorization'] !== 'A234'){
                $respuesta = 'No autorizado';
                return $respuesta;
             }else{ 
                $respuesta = 'Autorizado';
                return $respuesta;
             }
        }
     }

     //$cross = Cross::validar($header);
    
     
?>