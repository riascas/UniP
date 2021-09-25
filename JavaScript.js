$(function() { $('.selectpicker').selectpicker(); });

//funcion para previsualizar imagen en pantalla formulario alumno
document.getElementById('file').onchange=function(e){
    let reader=new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload=function(){
        let preview=document.getElementById('preview');
            image=document.createElement('img');
            image.src=reader.result;
            image.style.width="240px";
            image.className +="rounded";
            preview.innerHTML='';
            preview.append(image);
    }
}