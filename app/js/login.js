$(document).ready(function(){
    $("#loginCoordinador").click(function(){
        var datos = {
            usuario:$("#user").val(),
            clave:$("#pass").val()
        }
        $.post("../db/login.php", datos, respuestaC);
    })
    function respuestaC(r){

    }
})