$(document).ready(function(){
    //login coordinador
    $("#loginC").click(function(){
        var datos = {
            op:"1",
            usuario:$("#user").val(),
            clave:$("#pass").val()
        }
        $.post("db/loginC.php", datos, respuestaC);
    })
    function respuestaC(r){
        if (r == "exito") {
            location.replace("pages/mainAdmin.php")
        }else{
            alert("contraseña o usuario incorrecto")
        }
    }
    //login alumno
    $("#loginA").click(function(){
        var datos = {
            op:"1",
            usuario:$("#rut").val(),
            clave:$("#password").val()
        }
        $.post("db/loginA.php", datos, respuestaA);
    })
    function respuestaA(r){
        if (r == "exito") {
            location.replace("pages/mainAlumno.php")
        }else{
            alert("contraseña o usuario incorrecto")
        }
    }
})