async function registrar_compra() {
    let id_producto = document.querySelector('#id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let id_trabajador = document.querySelector('#id_trabajador').value;

    // Validación de campos vacíos
    if (id_producto === "" || cantidad === "" || precio === "" || id_trabajador === "") {
        alert("Error, campos vacíos");
        return;
    }

    try {
        // Crear objeto FormData con los datos del formulario
        const datos = new FormData();
        datos.append("id_producto", id_producto);
        datos.append("cantidad", cantidad);
        datos.append("precio", precio);
        datos.append("id_trabajador", id_trabajador);

        // Realizar la solicitud POST al controlador de PHP
        let respuesta = await fetch(base_url + 'controller/compras.php?tipo=registrar', {
            method: 'POST',
            body: datos
        });

        // Procesar la respuesta JSON
        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json); // Para revisar la respuesta en la consola
    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
}



