$(document).ready(function(){
    $("#cambiar").click(function(){
        var datos = {
            nombre:$("#nombre").val(),
            capacidad:$("#capacidad").val()
        }
        $.post("../db/updateSala.php", datos, respuesta)
    })
    function respuesta(r){
        if (r == "exito") {
            $("#msg").text("Capacidad actualizada correctamente");
            $("#boton").text("Aceptar");
        } else {
            $("#msg").text("Error al actualizar" + r);
            $("#boton").text("Reintentar");
        }
    }
})