function registrar_persona() {
    // Obtener los valores de los campos del formulario usando querySelector
    let nro_identidad = document.querySelector('#nro_identidad').value;
    let razon_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let codigo_postal = document.querySelector('#codigo_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fecha_registro = document.querySelector('#fecha_registro').value;

    // Validación básica de campos vacíos
    if (nro_identidad === "" || razon_social === "" || telefono === "" || correo === "" || 
        departamento === "" || provincia === "" || distrito === "" || direccion === "" ||
        rol === "" || password === "" || estado === "" || fecha_registro === "") {
        alert("Todos los campos son obligatorios.");
        return;
    }

    // Crear un objeto con los datos a enviar
    let datos = {
        tipo: "registrar",
        nro_identidad: nro_identidad,
        razon_social: razon_social,
        telefono: telefono,
        correo: correo,
        departamento: departamento,
        provincia: provincia,
        distrito: distrito,
        codigo_postal: codigo_postal,
        direccion: direccion,
        rol: rol,
        password: password,
        estado: estado,
        fecha_registro: fecha_registro
    };

    // Usar fetch para enviar los datos al servidor
    fetch("path/to/your/persona_controller.php", {
        method: "POST", // Usamos POST para enviar datos
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams(datos) // Convertir el objeto a parámetros URL
    })
    .then(response => response.json()) // Obtener la respuesta en formato JSON
    .then(data => {
        if (data.status) {
            // Si la respuesta es exitosa, mostrar el mensaje
            alert(data.mensaje);
            // Limpiar los campos del formulario
            document.querySelector("#formPersona").reset();
        } else {
            // Si hubo un error, mostrar el mensaje
            alert(data.mensaje);
        }
    })
    .catch(error => {
        // Si ocurre un error en la petición, mostrar un mensaje
        alert("Hubo un error al registrar la persona. Intenta nuevamente.");
        console.error("Error:", error);
    });
}

