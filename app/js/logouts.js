$(document).ready(function(){
    //logout coordinador
    $("#cerrarSesionC").click(function(){
        var datos = {
            op:"2"
        }
        $.post("../db/loginC.php", datos, location.replace("../index.php"))
    })
    //logout alumno
    $("#cerrarSesionA").click(function(){
        var datos = {
            op:"2"
        }
        $.post("../db/loginA.php", datos, location.replace("../index.php"))
    })
})