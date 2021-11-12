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
    nomcalle: false,
    numcalle: false,
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
			validarCampo(expresiones.dni, e.target, 'dni', "error_dni");
		break;
		case "fecha_nac":
            //falta crear funcion validar fecha_nac
		break;
		case "localidad":
			validarCampo(expresiones.localidad, e.target, 'localidad',"error_localidad");
		break;
		case "barrio":
			validarCampo(expresiones.barrio, e.target, 'barrio',"error_barrio","error_barrio");
		break;
		case "estadoCivil":
            //console.log('funciona');
        break;
		case "provincia":
            //console.log('funciona');
        break;
		case "nacionalidad":
            validarCampo(expresiones.nombre,e.target,'nacionalidad',"error_nacionalidad");
        break;
		case "imagen":
            //console.log('funciona');
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
		campos['contrasenia1'] = true;
	} else{
		inputPassword1.classList.add('is-invalid');
		var errorElement = document.getElementById("error_contrasenia1");
        errorElement.style.display='block';
		campos['contrasenia1'] = false;
	}
}

inputs.forEach((input) => {
 	input.addEventListener('keyup', validarFormulario);
 	input.addEventListener('blur', validarFormulario);
 });

formulario.addEventListener('submit', (e) => {
	e.preventDefault();
	try{
        if(campos.dni && campos.nombre && campos.apellido && campos.fecha_nac && campos.localidad && campos.barrio && campos.nomcalle && campos.numcalle && campos.pisodepto && campos.email && campos.contrasenia && campos.contrasenia1){
			var postData=$('#formulario').serialize();
            $.ajax({
				type:"post",
				url:'./Rutas/profesor-add.php',
				data:postData,
				succes:function(r){
					if(r==1){
						alert("agregado con exito");
					}else{
						alert("fallo el server");
					}
				}
			});
			return false;
            //formulario.reset();
        } else {
            e.preventDefault();
        }   
    }catch(ex){
        console.log(ex);
        e.preventDefault();
    }
});