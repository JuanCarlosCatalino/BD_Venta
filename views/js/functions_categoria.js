async function registrar_categoria(){

    let nombre = document.getElementById('nombre').value;
    let detalle = document.getElementById('detalle').value;
    
    if ( nombre=="" || detalle=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formRegistrarCaregoria); //datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=registrar',{
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
async function listar_categoria() {
    try {

        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item => {
                let  nueva_fila = document.createElement("tr"); 
                nueva_fila.id = "fila" +item.id; // el item.id es  de la base de datos
                cont++; // o +=1
                nueva_fila.innerHTML =`
                <td>${cont}</td>
                <td>${item.nombre}</td>
                <td>${item.detalle}</td>
                <td>${item.options}</td>
                `;
                document.querySelector('#body_categorias').appendChild(nueva_fila);
            }); 
        } 
        console.log(respuesta);
    } catch (e) {
        console.log("error "+ e);
    }
}
if (document.querySelector('#tbl_categoria')){
    listar_categoria();
}

async function eliminar_categoria(id) {
    swal({
        title:"¿Realmente desea elminar la categoria?",
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
   /*  alert("producto eliminado: id="+ id); */
   const formdata = new FormData();
   formdata.append('id_categoria', id);
   try {
    let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=eliminar',{
        method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formdata
    });
    json= await respuesta.json();
    if (json.status) {
        /* alert("eliminado correctamente"); */
        swal("Eliminar", "eliminado correctamente","success");
        document.querySelector('#fila'+id).remove();
    }else{
        swal("Eliminar", "error al elimninar producto","warning");

    }
   } catch (e) {
    console.log("ocurrio un errro"+e);
   }
}
