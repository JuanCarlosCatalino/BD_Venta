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

async function listar_categorias(){
    try{
        let respuesta= await fetch(base_url+'controller/categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status){
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
                //se trabaja con jquery
                /*$('#idcategoria').append($('<option />',{
                    text:${element.nombre},
                    value: ${element.id}
                }));*/
            });
            document.getElementById('idcategoria').innerHTML = contenido_select;
        }
        console.log(respuesta);

    }catch(e){
        console.log("error al cargar categorias"+e);
    }
}
    async function listar_proveedores() {
        try {
            let respuesta = await fetch(base_url + 'controller/proveedor.php?tipo=listar');
            let json = await respuesta.json();
            if (json.status) {
                let datos = json.contenido;
                let contenido_select = '<option value="">Seleccione</option>';
                datos.forEach(element => {
                    contenido_select += '<option value="' + element.id + '">' + element.razon_social+ '</option>';
                });
                document.getElementById('idproveedor').innerHTML = contenido_select;
            }
        } catch (e) {
            console.log("Error al cargar proveedores: " + e);
        }


        const base_url = 'http://tusitio.com/'; // Asegúrate de usar la URL correcta

async function registrar_categoria() {
    let nombre = document.getElementById('nombre_categoria').value;
    let detalle = document.getElementById('detalle_categoria').value;

    if (nombre == "" || detalle == "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
        const datos = new FormData();
        datos.append("nombre", nombre);
        datos.append("detalle", detalle);

        let respuesta = await fetch(base_url + 'controller/categoria.php?tipo=registrar', {
            method: 'POST',
            body: datos
        });

        let json = await respuesta.json();

        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}


        async function registrar_compra(){
            let id_producto = document.getElementById('id_producto').value;
            let cantidad = document.getElementById('cantidad').value;
            let precio = document.getElementById('precio').value;
            let id_trabajador = document.getElementById('id_trabajador').value;
        
            if (id_producto == "" || cantidad == "" || precio == "" || id_trabajador == "") {
                alert("Error, campos vacíos");
                return;
            }
        
            try {
                const datos = new FormData();
                datos.append("id_producto", id_producto);
                datos.append("cantidad", cantidad);
                datos.append("precio", precio);
                datos.append("id_trabajador", id_trabajador);
                
                let respuesta = await fetch(base_url + 'controller/compras.php?tipo=registrar', {
                    method: 'POST',
                    body: datos
                });
                let json = await respuesta.json();
                if (json.status) {
                    swal("Registro", json.mensaje, "success");
                } else {
                    swal("Registro", json.mensaje, "error");
                }
                console.log(json);
            } catch (e) {
                console.log("Oops, ocurrió un error: " + e);
            }
        }
        
        
    }





