 async function registrar_persona() {
    // Obtener los valores de los campos del formulario usando querySelector
    let nro_identidad = document.querySelector('#nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fecha_reg = document.querySelector('#fecha_reg').value;

    // Validación básica de campos vacíos
    if (nro_identidad == "" || razon_social == "" || telefono == "" || correo == "" || 
        departamento == "" || provincia == "" || distrito == "" || cod_postal == "" || direccion == "" ||rol == "" || password == "" || estado == "" || fecha_reg =="") {
        alert("Todos los campos son obligatorios.");
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

