async function listar_productos() {
    try {

        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=listar');
         let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;


            datos.forEach(item => {
                let  nueva_fila = document.createElement("tr"); 
                nueva_fila.id = "fila" + item.id; // el item.id es  de la base de datos
                 cont+=1; // o +=1
                nueva_fila.innerHTML =`
                <th>${cont}</th>
                <td>${item.codigo}</td>
                <td>${item.nombre}</td>
                <td>${item.stock}</td>
                <td>${item.categoria.nombre}</td>
                <td>${item.id_proveedor}</td>
                <td>${item.options}</td>
                `;
                document.querySelector('#tbl_producto').appendChild(nueva_fila);
            }); 
        } 
        console.log(json);
    } catch (e) {
        console.log("salio error "+ error);
    }
}
if (document.querySelector('#tbl_producto')){
    listar_productos();
}

   



async function registrar_producto(){
    let codigo = document.getElementById('codigo').value; // solo id
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value; // solo id
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value; // solo id
    let idcategoria = document.querySelector('#idcategoria').value;
    let fecha_v = document.querySelector('#fecha_v').value;
    let imagen = document.querySelector('#imagen').value; // solo id
    let idproveedor = document.querySelector('#idproveedor').value;
    
    
    if (codigo=="" || nombre=="" || detalle=="" || precio==""|| stock==""|| idcategoria=="" || fecha_v ==""|| imagen=="" || idproveedor=="") { // = para asignar valor == para preguntar que valor tiene
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
        let respuesta= await fetch(base_url+'controller/Categoria.php?tipo=listar');
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
        console.log("error al cargar categorias"+ e);
    }
}
    async function listar_proveedores() {
        try {
            let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=listar_proveedor');
            let json = await respuesta.json();
            if (json.status) {
                let datos = json.contenido;
                let contenido_select = '<option value="">Seleccione</option>';
                datos.forEach(element => {
                    contenido_select += '<option value="' + element.id + '">' + element.razon_social+ '</option>';
                });
                document.getElementById('idproveedor').innerHTML = contenido_select;
            }

            console.log(respuesta);
        } catch (e) {
            console.log("Error al cargar proveedores: " + e);
        }


        /* const base_url = 'http://tusitio.com/'; // Asegúrate de usar la URL correcta */

}

async function ver_producto(id) {
    const formData = new FormData();
    formData.append('id_producto', id);
    try {
        let respuesta = await fetch(base_url+'cntroller/Producto.php?tipo=ver',{
            methodo: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status){

            // aqui aumentar lo que esta en formulario de editar_producto......

            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#idcategoria').value = json.contenido.idcategoria;
            document.querySelector('#proveedor').value = json.contenido.proveedor;
            document.querySelector('#img').value = json.contenido.imagen;

        }else{
            window.location = base_url+"productos";
        }

        console.log(json);


    } catch (error) {
        console.log("oops ocurrio un error"+error);
    }
    
}
async function actualizarProducto() {
    const datos = new FormData(frmActualizar);
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        console.log(json);
    } catch (e) {

    }
}
// dividido en dos partes que si esta seguro de eliminar 
async function eliminar_producto(id) {
    swal({
        title:"¿Realmente desea elminar producto?",
        icon:"warning",
        buttons:true,
        dangerMode:true
    }).then((willDelete)=>{
        if (willDelete) {
            fnt_eliminar(id);
        }
    })
    
}
async function fnt_eliminar(id) {
   //  alert("producto eliminado: id="+ id); 
   const formdata = new FormData();
   formdata.append('id_producto', id);
   try {
    let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=eliminar',{
        method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formdata
    });
    json= await respuesta.json();
    if (json.status) {
        // alert("eliminado correctamente"); 
        swal("Eliminar", "eliminado correctamente","success");
        document.querySelector('#fila'+id).remove();
    }else{
        swal("Eliminar", "error al elimninar producto","warning");

    }
   } catch (e) {
    console.log("ocurrio un errro"+e);
   }
}









