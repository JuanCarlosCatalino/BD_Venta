async function registrar_compra(){
    let id_producto = document.getElementById('id_producto').value; // solo id
    let cantidad = document.getElementById('cantidad').value;
    let precio = document.getElementById('precio').value;
    let id_trabajador = document.getElementById('id_trabajador').value; // solo id
  
    
    if (id_producto=="" || cantidad=="" || precio=="" || id_trabajador=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formCompra); // datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/Compra.php?tipo=registrar',{
        method:'POST',
        mode : 'cors',
        cache: 'no-cache',
        body :datos
    });
    json = await respuesta.json();
    if (json.status) {
        swal("Registro", json.mensaje,"success");
    }else{
        swal("Registro", json.mensaje,"error");
    }

} catch (e) {
    console.log("Oops, ocurrio un error" + e);
}
}
async function listar_compra(params) {
    try {

        let respuesta = await fetch(base_url+'controller/Compra.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;


            datos.forEach(item => {
                let  nueva_fila = document.createElement("tr"); 
                nueva_fila.id = "fila" +item.id; // el item.id es  de la base de datos
                 cont++;
                nueva_fila.innerHTML =`
                <th>${cont}</th>
                <td>${item.id_producto}</td>
                <td>${item.cantidad}</td>
                <td>${item.precio}</td>
                <td>${item.id_trabajador}</td>
                 <td>${item.options}</td>
                
                <td>${item.options}</td>
                `;
                document.querySelector('#tbl_compra').appendChild(nueva_fila);
            }); 
        } 
        console.log(respuesta);
    } catch (e) {
        console.log("error "+ e);
    }
}
if (document.querySelector('#tbl_compra')){
    listar_compra();
}
async function listar_trabajadores() {
    try {
        // Envía la solicitud al controlador de proveedores
        let respuesta = await fetch(base_url + 'controller/persona.php?tipo=listartrabajador');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione selecciona trabajador</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
                // O usando jQuery
                /*$('#proveedor').append($('<option />', {
                    text: `${element.nombre}`,
                    value: `${element.id}`
                }));*/
            });
            document.getElementById('trabajador').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.error("Error al cargar trabajador: " + e);
    }
}



