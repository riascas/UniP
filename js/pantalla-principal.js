
$('#btnDptoAlumnos').click(function(){
    $("#loginmodal3").modal("show");
})

$('#btnAlumno').click(function(){
    $("#loginmodal").modal("show");
})


$('#btnProfesores').click(function(){
    $("#loginmodal3").modal("show");
})


$('#btnReclutadores').click(function(){
    $("#loginmodal2").modal("show");
})

$("#btnLoginRecluitador").onsubmit(function(){
    var email = $("#staticEmail").val();
    var password = $("#inputPassword")
    // var dato {

    // }
    console.log("entre aca");
    $.ajax({
        type: "POST",
        data: JSON.stringify(email,password),
        cache: false,
        url: "Rutas/LogearUsuarios.php",
        dataType: "json",
        error: function (dato, error) {
            console.log(dato);
            alert(" Can't do because: " + error);
        },
        success: function () {
            // alert(" Done ! ");
            $("#mensajeModal").modal("hide");
            location.reload();
        }
    });

})