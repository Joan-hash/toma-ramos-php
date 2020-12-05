$(document).ready(function(){
    $("#crearAsignatura").click(function(){
        var datos = {
            nombre:$("#nombre").val(),
            descripcion:$("#descripcion").val(),
            periodo:$("#periodo").val()
        }
        $.post("../db/addAsignatura.php", datos, respuesta);
    })
    function respuesta(r){
        if (r == "exito") {
            $("#msg").text("Asignatura creada correctamente");
            $("#boton").text("Aceptar");
        } else {
            $("#msg").text("Error al crear Asignatura" + r);
            $("#boton").text("Reintentar");
        }
    }
})