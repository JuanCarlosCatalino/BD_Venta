// en caso de que no funcione fucntion prodctos - listar categoria
async function listar_categorias(){
    try {
        let respuesta = await fetch(base_url+'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
           // let contenido_select = '<option value=""> seleccione</option>';
            datos.forEach(element => {
                contenido_select +='<option value="'+element.id +'">' + element.nombre + '</option>';
               /*  $('#idcategoria').append($('<option/>',{
                    text: ${element.nombre},
                    value: ${element.id}
                })); */
            }); 
            document.getElementById('categoria').innerHTML=contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.log("error al cargar categorias"+ e);
    }
}