
const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{3,50}$/, // Letras y espacios, pueden llevar acentos.
    apellido:/^[a-zA-ZÀ-ÿ\s]{3,50}$/, // Letras y espacios, pueden llevar acentos.
    dni:/^[0-9]{8,8}$/,
    localidad:/^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    barrio:/^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    nombrecalle:/^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    numerocalle:/^[0-9]{1,10}$/,
    pisodepto:/^(piso|depto)$/i,
    email:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    contrasenia:/^.{12,25}$/,// 12 a 25 digitos.
}
const formulario = document.getElementById("formulario");

const inputs = document.querySelectorAll("#formulario input");
const campos = {
	nombre: false,
	apellido: false,
	dni: false,
    fecha_nac: true,//completar con false y validacion
	localidad: false,
	barrio: false,
    nombrecalle: false,
    numerocalle: false,
    pisodepto:false,
    email: false,
    contrasenia: false,
    contrasenia1:false
}
var divsErrors = document.getElementsByClassName('invalid-feedback');
for (divError of divsErrors) {
    divError.style.display = 'none';
}
for (input of inputs) {
    input.classList.remove('is-invalid');
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre', 'error_nombre');
			console.log("nombre input validacion");
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido', 'error_apellido');
		break;
		case "dni":
			validarCampo(expresiones.dni, e.target, 'dni', "error_dni");
		break;
		case "fecha_nac":
            
		break;
		case "localidad":
			validarCampo(expresiones.localidad, e.target, 'localidad',"error_localidad");
		break;
		case "barrio":
			validarCampo(expresiones.barrio, e.target, 'barrio',"error_barrio","error_barrio");
		break;
		case "estadoCivil":
            console.log('funciona');
        break;
		case "provincia":
            console.log('funciona');
        break;
		case "nacionalidad":
            validarCampo(expresiones.nombre,e.target,'nacionalidad',"error_nacionalidad");
        break;
		case "imagen":
            console.log('funciona');
        break;
        case "nomcalle":
			validarCampo(expresiones.nombrecalle, e.target, 'nomcalle',"error_nomcalle");
		break;
        case "numcalle":
			validarCampo(expresiones.numerocalle, e.target, 'numcalle',"error_numcalle");
		break;
        case "pisodepto":
			validarCampo(expresiones.pisodepto, e.target, 'pisodepto',"error_pisodepto");
		break;
		break;
        case "email":
			validarCampo(expresiones.email, e.target, 'email',"error_email");
		break;
        case "contrasenia":
			validarCampo(expresiones.contrasenia, e.target, 'contrasenia',"error_contrasenia");
            validarPassword1();
		break;
        case "contrasenia1":
			validarPassword1();
		break;
	}
}

const validarCampo = (expresion, input, campo, error) => {
	if(expresion.test(input.value)){
		document.getElementById( `${campo}`).classList.add('is-valid');
        document.getElementById( `${campo}`).classList.remove('is-invalid');
		var errorElement = document.getElementById(error);
		errorElement.style.display='none';
		campos[campo] = true;
	} else {
		document.getElementById( `${campo}`).classList.remove('is-valid');
        document.getElementById( `${campo}`).classList.add('is-invalid');
		var errorElement = document.getElementById(error);
		errorElement.style.display='block';
		campos[campo] = false;
	}
}

const validarPassword1 = () => {
	const inputPassword = document.getElementById('contrasenia');
	const inputPassword1 = document.getElementById('contrasenia1');

	if(inputPassword.value == inputPassword1.value){
		inputPassword1.classList.remove('is-invalid');
		inputPassword1.classList.add('is-valid');
		var errorElement = document.getElementById("error_contrasenia1");
		errorElement.style.display='none';
		campos['contrasenia1'] = false;
	} else{
		inputPassword1.classList.add('is-invalid');
		var errorElement = document.getElementById("error_contrasenia1");
        errorElement.style.display='block';
		campos['contrasenia1'] = true;
	}
}

inputs.forEach((input) => {
 	input.addEventListener('keyup', validarFormulario);
 	input.addEventListener('blur', validarFormulario);
 });

formulario.addEventListener('submit', (e) => {
	try{
        if(campos.dni && campos.nombre && campos.password && campos.correo && campos.apellido && campos.fecha_nac && campos.localidad && campos.barrio && campos.nombrecalle && campos.numerocalle && campos.pisodepto && campos.email && campos.contrasenia && campos.contrasenia1){
            console.log("entre al metodo");
			var nombre = document.getElementById('nombre');
			var apellido = document.getElementById('apellido');
			var nacionalidad = document.getElementById('nacionalidad');
			var dni = document.getElementById("dni");
			var estadoCivil = document.getElementById('estadoCivil');
			var fecha_nac = document.getElementById("fecha_nac");
			var provincia = document.getElementById('provincia');
			var localidad = document.getElementById("localidad");
			var barrio = document.getElementById("barrio");
			var nombrecalle = document.getElementById("nomcalle");
			var numerocalle = document.getElementById("numcalle");
			var pisodepto = document.getElementById("pisodepto");
			var email = document.getElementById("email");
			var contrasenia = document.getElementById("contrasenia");
			var imagen =  document.getElementById('imagen');
			
			   //creo un arreglo con los valores de los elementos del formulario .
			const postData= {
			   nombre:nombre.value,
			   apellido:apellido.value,
			   dni:dni.value,
			   nacionalidad:nacionalidad.value,
			   estadoCivil:estadoCivil.value,
			   fecha_nac: fecha_nac.value,//completar con false y validacion
			   provincia:provincia.value,
			   localidad: localidad.value,
			   barrio: barrio.value,
			   nombrecalle: nombrecalle.value,
			   numerocalle: numerocalle.value,
			   pisodepto:pisodepto.value,
			   email: email.value,
			   contrasenia: contrasenia.value,
			   imagen:imagen.value,//falta validacion
			}
			alert(postData);
            $.ajax({
				type:"POST",
				url:"profesor-add.php",
				data:postData,
				succes:function(){

				}
			});

            //formulario.reset();
        } else {
            e.preventDefault();
        }   
    }catch(ex){
        console.log(ex);
        e.preventDefault();
    }
});