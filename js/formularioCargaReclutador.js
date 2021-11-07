
const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{3,50}$/, // Letras y espacios, pueden llevar acentos.
    apellido:/^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
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
    fecha_nac: false,
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
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido', 'error_apellido');
		break;
		case "dni":
			validarCampo(expresiones.dni, e.target, 'dni', 'error_dni');
		break;
        case "nacionalidad":
            validarCampo(expresiones.nombre,e.target,'nacionalidad');
        break;
		case "fecha_nac":
            validarCampo(expresiones.fecha_nac,e.target,'fecha_nac')
		break;
		case "localidad":
			validarCampo(expresiones.localidad, e.target, 'localidad', 'error_localidad');
		break;
		case "barrio":
			validarCampo(expresiones.barrio, e.target, 'barrio', 'error_barrio');
		break;
        case "nomcalle":
			validarCampo(expresiones.nombrecalle, e.target, 'nomcalle', 'error_nomcalle');
		break;
        case "numcalle":
			validarCampo(expresiones.numerocalle, e.target, 'numcalle', 'error_numcalle');
		break;
        case "pisodepto":
			validarCampo(expresiones.pisodepto, e.target, 'numcalle', 'error_pisodepto');
		break;
		// break;
        case "email":
			validarCampo(expresiones.email, e.target, 'email','error_email');
		break;
        case "contrasenia":
			validarCampo(expresiones.contrasenia, e.target, 'contrasenia','error_contrasenia');
            validarPassword1();
		break;
        case "contrasenia1":
			validarPassword1();
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById( `${campo}`).classList.add('is-valid');
        document.getElementById( `${campo}`).classList.remove('is-invalid');
		campos[campo] = true;
	} else {
		document.getElementById( `${campo}`).classList.remove('is-valid');
        document.getElementById( `${campo}`).classList.add('is-invalid');
		campos[campo] = false;
	}
}

const validarPassword1 = () => {
	const inputPassword = document.getElementById('password');
	const inputPassword1 = document.getElementById('password1');

	if(inputPassword.value !== inputPassword1.value){
		input.classList.add('is-invalid');
        var errorElement = document.getElementById(error_contrasenia1);
        errorElement.style.display='block';
		campos['password'] = false;
	} else {
		input.classList.add('is-valid');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});


formulario.onsubmit = function(e){
    e.preventDefault();
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var nacionalidad = document.getElementById('nacionalidad');
    var estadoCivil = document.getElementById('estadoCivil');
    var edad = document.getElementById('edad');
    var dni = document.getElementById("dni");
    var nacimiento = document.getElementById("nacimiento");
    var provincia = document.getElementById('provincia');
    var localidad = document.getElementById('localidad');
    var calle = document.getElementById('calle');
    var numero = document.getElementById('numero');
    var cp = document.getElementById('cp');
    var email = document.getElementById('email');
    var numeroTelefono = document.getElementById('numeroTelefono');
    var imagen =  document.getElementById('imagen');
       //creo un arreglo con los valores de los elementos del formulario .
    const postData= {
       nombre:nombre.value,
       apellido:apellido.value,
       dni:dni.value,
       nacionalidad:nacionalidad.value,
       estadoCivil:estadoCivil.value,
       edad:edad.value,
       nacimiento:nacimiento.value,
       provincia:provincia.value,
       localidad:localidad.value,
       calle:calle.value,
       numerocalle:numerocalle.value,
       email:email.value,
       telefono:numeroTelefono.value,
       imagen: imagen ? imagen.value : null
    }
    console.log(postData);
    //envio el arreglo mediante POST .
    $.post('./Rutas/AltaReclutador.php',postData,function(response){
       console.log(response);
    })
    
 };
