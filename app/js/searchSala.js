$(document).ready(function(){{
    $("#buscarSala").click(function(){
        var datos = {
            nombre:$("#nombre").val()
        }
        $.post("../db/searchSala.php", datos, respuesta);
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
}})