$(document).ready(function(){
    $("#crearSeccion").click(function(){
        var datos = {
            nombre:$("#nombre").val(),
            cupo:$("#cupo").val(),
            total:$("#total").val(),
            asignatura:$("#asignaturas").val(),
            sala:$("#salas").val()
        }
        $.post("../db/addSeccion.php", datos, respuesta);
    })
    function respuesta(r){
        if (r == "exito") {
            $("#msg").text("Sección creada correctamente");
            $("#boton").text("Aceptar");
        } else {
            $("#msg").text("Error al crear la sección" + r);
            $("#boton").text("Reintentar");
        }
    }
})