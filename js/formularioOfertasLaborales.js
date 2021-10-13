$(document).ready(function(){
    let valido = [];

    $('#formOfertaLaboral').submit(function (event) {
        event.preventDefault();
        event.stopPropagation()
        if (validar_formulario(event)){ 
            valido=[];
            event.target.addClass('was-validated');
            event.target.submit();
        }else{
            $("#errorMensajeModal").modal("show");
        }
    })

    function validar_formulario(){
        if (!(validar_descripcion($("#infoEmpresa").val()))) {
            valido.push(false)
            $('#infoEmpresa').addClass('is-invalid')
            // $("#error_descripcion").removeClass("oculto");
        }

        if (!(validar_descripcion($("#detalleEmpleo").val()))) {
            valido.push(false)
            $('#detalleEmpleo').addClass('is-invalid')
            // $("#error_descripcion").removeClass("oculto");
        }

        if (!(validar_descripcion($("#detalleFunciones").val()))) {
            valido.push(false)
            $('#detalleFunciones').addClass('is-invalid')
            // $("#error_descripcion").removeClass("oculto");
        }
    }

    function validar_descripcion(descripcion){
        var arrayDescripcion = descripcion.trim().split(" ");
        if (descripcion.length < 5) {
            if(!(arrayDescripcion.length>=5)){
                valido.push(false)
                return false;
            }
        }
    }
});