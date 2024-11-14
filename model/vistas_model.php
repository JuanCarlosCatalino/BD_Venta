<?php
class vistaModelo{


    protected static function obtener_vistas ($vista){
        $palabras_permitidas = ['usuario','nueva-compra','nuevo-producto','producto','almohadas','carrito','detalles','gorras','perfil','plantilla','polos','tazas','menu'];
        if (in_array($vista,$palabras_permitidas)) {
            if (is_file("./views/".$vista.".php")) {
                $contenido = "./views/".$vista.".php";
                
         }else{
            $contenido = "404";
         }
        }elseif ($vista=="login" || $vista=="index.php"){
            $contenido = "login";

        }else{
            $contenido = "404"; 
        }
        return $contenido;
    }
}


?>