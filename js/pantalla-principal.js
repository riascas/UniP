
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

$("#btnLoginReclutador").click(function(){
    var correo = $("#reclutadorEmail").val();
    var pass = $("#reclutadorPass").val();
    // console.log(email);
    // console.log(password);
    const dato = {
        email:correo,
        password: pass
    };
    // console.log("entre aca");
    $.ajax({
        type: "post",
        data: JSON.stringify(dato),
        cache: false,
        url: "Rutas/LogearUsuarios.php",
        // dataType: 'json',
        error: function (dato, error) {
            // console.log(dato);
            // console.log(error);
            alert(" Can't do because: "+error);
        },
        success: function () {
            // alert(" Done ! ");
            $("#mensajeModal").modal("hide");
            
        }
    });
    // fetch('./Rutas/LogearUsuarios.php', {
    //     method: 'POST', // or 'PUT'
    //     body: JSON.stringify(dato), // data can be `string` or {object}!
    //     headers:{
    //       'Content-Type': 'application/json'
    //     }
    // }).then(res => res.json())
    // .catch(error => console.error('Error:', error.value))
    // .then(response => {
    //     console.log(response)

    //     if ( response.error != 'N'){

    //     }else {
    //         alert('Error de algo');
    //     }
    // });

})