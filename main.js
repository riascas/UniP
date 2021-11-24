/* jQuery(document).on('submit','#miform',function(event){
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

}); */


function login(event){
    event.preventDefault();
    var email = document.querySelector("#email").value;
    var password = document.querySelector("#password").value;

    $.ajax({
        url:'Rutas/LogearUsuarios.php',
        type:'POST',
        dataType:'json',
        data:{
            "email": email,
            "password" : password,
            "param": "login",
        },
        success(data){
            console.log(data[0]);

            if(data != ""){
                location.href = "/sofia/clase%202/pantalla-principal-administrador.html";
            }else{
                alert("no")
            }
        },
        
    })

    /* vista (cuando genera una accion "ajax")>controlador(pide datos al modelo)>modelo(le devuelve los valores al controlar)<controlador(le pasa esos datos a la vista)<vista(lo imprimis o los utilizas) */

}