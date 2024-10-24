async function registrar_producto(){
    let codigo = document.getElementById('codigo').value; // solo id
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value; // solo id
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value; // solo id
    let idcategoria = document.querySelector('#idcategoria').value;
    let imagen = document.querySelector('#imagen').value; // solo id
    let idproveedor = document.querySelector('#idproveedor').value;
    
    if (codigo=="" || nombre=="" || detalle=="" || precio==""|| stock==""|| idcategoria=="" || imagen=="" || idproveedor=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formProducto); //obtiene llos datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=registrar',{
        method:'POST',
        mode : 'cors',
        cache: 'no-cache',
        body : datos
    });
    json = await respuesta.json();
    if (json.status){
        swal("Registro", json.mensaje,"success");
    }else{ swal("Registro", json.mensaje,"error");

    }
    console.log(json);
} catch (e) {
    console.log("Oops, ocurrio un error" + e);
}
}


