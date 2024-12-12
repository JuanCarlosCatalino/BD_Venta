async function registrar_persona(){
    let nro_identidad = document.getElementById('nro_identidad').value; 
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value; 
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value; 
    let direccion = document.querySelector('#direccion').value; 
    let rol = document.querySelector('#rol').value;
    let fecha_reg = document.querySelector('#fecha_reg').value;
  
    
    if (nro_identidad=="" || razon_social=="" || telefono=="" || correo=="" || departamento=="" || provincia=="" || distrito=="" || cod_postal=="" ||direccion=="" || rol=="" ||  fecha_reg=="") { // = para asignar valor == para preguntar que valor tiene
        alert("error, campos vacios");
        return;
    }
try {
    const datos = new FormData(formPersona); //obtiene llos datos del formlario
    //enviar datos al controlador
    let respuesta = await fetch(base_url+'controller/persona.php?tipo=registrar',{
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

async function listar_persona(params) {
    try {

        let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar');
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
                <td>${item.nro_identidad}</td>
                <td>${item.razon_social}</td>
                <td>${item.telefono}</td>
                <td>${item.correo}</td>
                <td>${item.departamento}</td>
                <td>${item.provincia}</td>
                <td>${item.distrito}</td>
                <td>${item.cod_postal}</td>
                <td>${item.rol}</td>
                <td>${item.password}</td>
                <td>${item.fecha_reg}</td>
                <td>${item.options}</td>
                `;
                document.querySelector('#tbl_persona').appendChild(nueva_fila);
            }); 
        } 
        console.log(respuesta);
    } catch (e) {
        console.log("error "+ e);
    }
}
if (document.querySelector('#tbl_persona')){
    listar_persona();
}
async function ver_persona(id) {
    const formData = new FormData();
    formData.append('id_persona',id);
   try {
       let respuesta = await fetch(base_url+'controller/persona.php?tipo=ver', {
           method: 'POST',
           mode : 'cors',
           cache: 'no-cache',
           body: formData
       });
       json = await respuesta.json();
       if (json.status) {
           document.querySelector('#id_persona').value = json.contenido.id;
           document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
           document.querySelector('#razon_social').value = json.contenido.razon_social;
           document.querySelector('#telefono').value = json.contenido.telefono;
           document.querySelector('#correo').value = json.contenido.correo;
           document.querySelector('#departamento').value = json.contenido.departamento;
           document.querySelector('#provincia').value = json.contenido.provincia;
           document.querySelector('#distrito').value = json.contenido.distrito;
           document.querySelector('#cod_postal').value = json.contenido.cod_postal;
           document.querySelector('#direccion').value = json.contenido.direccion;
           document.querySelector('#rol').value = json.contenido.rol;
           document.querySelector('#password').value = json.contenido.password;
       } else {
           window.location=base_url+"personas";
       }
       console.log(json);  
   } catch (error) {
       console.log("ups estas fallando mano"+error);
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
async function actualizar_producto() {
    const datos = new FormData(frmProducto);
    try {
        let respuesta = await fetch(base_url+'controller/persona.php?tipo=listar')
    } catch (error) {
        
    }
}
}
async function eliminar_persona(id) {
    swal({
        title:"¿Realmente desea elminar la persona ?",
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
   // alert("producto eliminado: id="+ id); 
   const formdata = new FormData();
   formdata.append('id_persona', id);
   try {
    let respuesta = await fetch(base_url + 'controller/persona.php?tipo=eliminar',{
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

