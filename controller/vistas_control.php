<?php

session_start();
require_once "./model/vistas_model.php";

class vistasControlador extends vistaModelo{
    public function obtenerPlantillaControlador(){
        return require_once "./views/plantilla.php";
    }

    public function obtenerVistaControlador(){
        if(isset ($_GET['views'])){    // captura el views (htacces)
            $ruta = explode("/",$_GET['views']);
            $respuesta = vistaModelo::obtener_vistas($ruta[0]); // nos envia a vista_modelo
        }else{
            $respuesta = "login";
        }
        return $respuesta;
    }
}




?>