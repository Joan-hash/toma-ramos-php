$(document).ready(function(){
    $("#buscarAlumno").click(function(){
        var datos = {
            rut:$("#rut").val()
        }
        $.post("../db/searchAlumno.php", datos, respuesta);
    })
    function respuesta(r){
        if (r != null) {
            $("#msg").html(r);
            $("#boton").text("Aceptar");
        } else {
            $("#msgE").text("El alumno buscado no existe" + r);
            $("#boton").text("Reintentar");
        }
    }
})