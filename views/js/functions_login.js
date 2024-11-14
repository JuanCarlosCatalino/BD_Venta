



async function iniciar_sesion() {
    console.log('Iniciar sesión');
    // Aquí puedes agregar la lógica para enviar los datos del formulario
}

async function iniciar_sesion() {
    let usuario = document.querySelector('usuario').value;
    let password = document.querySelector('password').value;

    if (usuario == "" || password == "") {
        alert("Campos vacíos");
        return;
    }

    try {
        // Capturamos datos del formulario HTML
        const datos = new FormData();
        datos.append("usuario", usuario);
        datos.append("password", password);

        // Enviar datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/login.php', {
            method: "POST",
            cache: "no-cache",
            body: datos
        });

        let json = await respuesta.json();
        if (json.status) {
            swal("Iniciar Sesión", json.mensaje, "success");

            location.replace(base_url+nuevo-producto)
        } else {
            swal("Iniciar Sesión", json.mensaje, "error");
        }
        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}

 

if (document.querySelector('#formLogin')) { // Cambié 'frm_iniciar_sesion' por 'formLogin'
    let frm_iniciar_sesion = document.querySelector('#formLogin'); // Corregí el nombre de la variable
    frm_iniciar_sesion.onsubmit = function (e) {
        e.preventDefault(); // Previene que el formulario se envíe por defecto
        iniciar_sesion(); // Llama a la función iniciar_sesion
    }

    async function cerrar_secion() {
        let respuesta = await fetch(base_url+'controller/login.php? tipo=cerrar_secion',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        json = await respuesta.json();
        if (json.status) {
            location.replace(base_url+'login');

            
        }
        
    }catch (error){
        console.log()
    }
}
