
$(document).ready(function () {

    $('.searchType').click(function() {
        alert($(this).attr('id'));  //-->this will alert id of checked checkbox.
        let estaSeleccionado = $('.searchType').val();
        let idPersona = $('.class_id_persona').val();
        console.log(idPersona);
        
        if(this.checked){
            $.ajax({
                type: "POST",
                url: 'check.php',
                data: {
                    idSkill: estaSeleccionado,
                    idPersona: idPersona

                },
             
                success: function(data) {
                    alert('it worked');
                    if(data=='ok'){
                        $('.checkProfesor').html("validado");
                    }
                },
                error: function() {
                    alert('it broke');
                },
                complete: function() {
                    alert('it completed');
                }
            });
        }
    });
});