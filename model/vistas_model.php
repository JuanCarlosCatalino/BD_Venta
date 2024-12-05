<?php
class vistaModelo{


    protected static function obtener_vistas ($vista){
        $palabras_permitidas = ['usuario','editar-producto','nueva-compra','nuevo-producto','nueva-persona','productos','almohadas','carrito','detalles','gorras','perfil','plantilla','polos','tazas','menu'];
      //para obligar a iniciar secion
        if (isset($_SESSION['sesion_ventas_id'])) {
        return "login";
       }
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