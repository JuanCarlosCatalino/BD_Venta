async function iniciar_sesion() {
    /* console.log('iniciar sesion prueba'); */
    let usuario = document.querySelector('#usuario');
    let password = document.querySelector('#password');
    if (usuario=='' || password=='') {
        alert("campos vacios");
        return;
    }
    try {
        const datos = new FormData(iniciar_sesion); //obtiene llos datos del formlario
        //enviar datos al controlador
        let respuesta = await fetch(base_url+'controller/Login.php?tipo=iniciar_sesion',{
            method:'POST',
            mode : 'cors',
            cache: 'no-cache',
            body :datos
        });
        json = await respuesta.json();
        if (json.status) {
            //swal("iniciar sesion", json.mensaje,"success");
            location.replace(base_url+"menu");
        }else{
            swal("iniciar sesion", json.mensaje,"error");
        }
    
    } catch (e) {
        console.log("Oops, ocurrio un error" + e);
    }
}
if (document.querySelector('#iniciar_sesion')) {
   let iniciar_sesion = document.querySelector('#iniciar_sesion');
   iniciar_sesion.onsubmit = function (e){
    e.preventDefault();
    iniciar_sesion();
   }
}
async function cerrar_sesion() {
    try {
        let respuesta = await fetch(base_url+'controller/Login.php?tipo=cerrar_sesion',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache'
        });
        json = await respuesta.json();
        if (json.status) {
            location.replace(base_url+'login');
        }
    } catch (error) {
        console.log('Ocurrio un error'+error);
    }
}