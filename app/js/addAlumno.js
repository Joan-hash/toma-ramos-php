$(document).ready(function(){
    $("#registrarAlumno").click(function(){
        var datos = {
            rut:$("#rut").val(),
            nombre:$("#nombre").val(),
            apellido:$("#apellido").val(),
            telefono:$("#telefono").val(),
            clave:$("#clave").val()
        }
        $.post("../db/addAlumno.php", datos, respuesta);
    })
    function respuesta(r){
        if (r == "exito") {
            $("#msg").text("Registrado correctamente");
            $("#boton").text("Aceptar");
        } else {
            $("#msg").text("Error al registrar" + r);
            $("#boton").text("Reintentar");
        }
    }
})