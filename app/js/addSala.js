$(document).ready(function(){
    $("#crearSala").click(function(){
        var datos = {
            nombre:$("#nombre").val(),
            tipo:$("#tipo").val(),
            capacidad:$("#capacidad").val()
        }
        $.post("../db/addSala.php", datos, respuesta);
    })
    function respuesta(r){
        if (r == "exito") {
            $("#msg").text("Sala creada correctamente");
            $("#boton").text("Aceptar");
        } else {
            $("#msg").text("Error al crear sala" + r);
            $("#boton").text("Reintentar");
        }
    }       
})