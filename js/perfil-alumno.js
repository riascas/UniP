//var botonEditar = document.getElementById('btn-editar');
//var modal = document.getElementById('loginmodal4')

$('#btn-editar').click(function(){
    $("#loginmodal4").modal("show");
    //console.log('puto');
})



$('#btnGuardar').click(function(){
    mail = $('#email').text();
    nombre = $('#nombre').text();
    apellido = $('#apellido').text();
    dni = $('#dni').text();
    nacionalidad = $('#nacionalidad').text();
    estadoCivil = $('#estadoCivil').text();
    fecha = $('#fechaNacimiento').text();
    calle = $('#calle').text();
    numeroCalle = $('#numeroCalle').text();
    telefono = $('#telefono').text();
    opcion = 2;
})


$("#formAlumno").submit(function(e){
    e.preventDefault();
     email = $.trim($("#email").text()); 
     nombre = $.trim($("#Fnombre").val());
     apellido = $.trim($("#Fapellido").val());
     dni = $.trim($("#Fdni").val());
     nacionalidad = $.trim($("#Fnacionalidad").val());
     estadoCivil = $.trim($("#FestadoCivil").val());
     fecha = $.trim($("#Fdate").val());
     calle = $.trim($("#Fcalle").val());
     numeroCalle = $.trim($("#FnumeroCalle").val());
     telefono = $.trim($("#FnumeroTelefono").val());
    $.ajax({
        url: "perfil-alumno.php",
        type: "POST",
        data: {email, nombre,apellido, dni, nacionalidad, estadoCivil, fecha, calle, numeroCalle, telefono, opcion},
        success: function(data){  
            email = email;        
            nombre = nombre;
            apellido = apellido;
            dni= dni;
            nacionalidad = nacionalidad;
            estadoCivil = estadoCivil;
            fecha = fecha;
            calle = calle;
            numeroCalle = numeroCalle;
            telefono = telefono;
            //if(opcion == 2){tablaPersonas.row(fila).data([email,nombre,apellido,dni,nacionalidad,estadoCivil,fecha,calle,numeroCalle,telefono]).draw()};          
        }        
    });
    $("#loginmodal4").modal("hide");    
    
});    