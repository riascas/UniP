jQuery(document).on('submit','#miform',function(event){
    event.preventDefault;

    jQuery.ajax({
        url:'login.php',
        type:'POST',
        dataType:'json',
        data:$(this).serialize() ,
        beforeSend: function(){

        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == 'Profesor'){
                location.href = 'perfil-profesor.html';
            }else if(respuesta.tipo == 'Alumno'){
                location.href = 'perfil-alumno.html';
            }else if(respuesta.tipo == 'Administrador'){
                location.href = 'Perfil-Administrador.html';
            }
        }else{
            console.log("error al ingresar los datos del perfil");
            //agregar un div error que informe en pantalla
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    });

});