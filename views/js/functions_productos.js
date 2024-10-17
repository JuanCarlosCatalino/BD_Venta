async function registrar_producto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let id_categoria = document.querySelector('#id_categoria').value;
    let imagen1 = document.querySelector('#imagen1').value;
    let id_proveedor = document.querySelector('#id_proveedor').value;

    if(codigo==""||nombre==""||detalle==""||precio==""||stock=="" 
        ||id_categoria==""||imagen1==""||id_proveedor==""){     //par asignar vaolor

            alert("error, campos vacios");
            return;

    }

    try {
        const datos = new FormData(frmRegistrar); // datos del formulario
        // enviar datos hacia el controlador (api)
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
           mothod: 'POST',
           mode: 'cors',
           cache: 'no-cache',
           body: datos 
        });
        console.log(respuesta);


    } catch (error) {
        console.log("oops, ocurrioun error"+e);
    }
    
}

