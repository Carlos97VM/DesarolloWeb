<<<<<<< HEAD
//Seleccion del Formulario
//Conociendo el ID
var formulario=document.getElementById("miFomrmulario");
var formulario2=document.forms["miFomrmulario"];

//Coonociendo el numero de formulario que es en la pagina
var formulario3=document.getElementByTagName("form")[0];
var formulario4=document.forms[0];
//SELECCIONAR ELEMENTOS DE UN FORMULARIO
//.elements[] Devuelve un array con todos los input del formulario
//getElementById("idElemento") Devuelve un elemento con un id determinado
//getElementsByTagName("etiqueta") Devuelve un array con elementos de un tipo de etiqueta (input, select, etc.)
//getElementsByName("nombre") Devuelve un array con elementos que tienen el mismo nombre (por ejemplo, radiobutton).

window.onload = iniciar; //SIN PARENTESIS

function iniciar(){
	document.getElementById("enviar").addEventListenet('click',validar,false);
}
function validarNombre(){
	var elemento = document.getElementById("nombre");
	limpiarError(elemento);
	if (elemento.value == "") {
		alert("El campo no puede ser vacio");
		return false;
	}
	return true;
}
function validarApellido(){
	var elemento = document.getElementById("apellido");
	if (elemento.value == "") {
		alert("El campo no puede ser vacio");
		return false;
	}
	return true;
}
function validarTelefono(){
	var elemento = document.getElementById("telefono");
	if (isNAN(elemento.value)) {
		alert("El campo Telefono tiene que ser numerico");
		return false;
	}
	return true;
}
function validarFecha(){
	var dia = document.getElementById("dia").value;
	var mes = document.getElementById("mes").value;
	var ano = document.getElementById("ano").value;

	var fecha = new Date(ano, mes, dia);
	if(isNAN(fecha)){
		alert("Los campos de la fecha con incorrectos");
		return false;
	}
	return true;
}
function validarCheck(){
	var campoCheck = document.getElementById("mayor");
	if(!campoCheck.checked){
		alert("Debes ser mayor de edad");
		return false;
	}
	return true;
}
function validar(e) {
    if (validaNombre() && validaTelefono() && validaFecha() && validaCheck() && confirm("Pulsa aceptar si deseas enviar el formulario")) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function error(elemento) {
    elemento.className = "error";
    elemento.focus();
}

function limpiarError(elemento) {
    elemento.className = "";
=======
//Seleccion del Formulario
//Conociendo el ID
var formulario=document.getElementById("miFomrmulario");
var formulario2=document.forms["miFomrmulario"];

//Coonociendo el numero de formulario que es en la pagina
var formulario3=document.getElementByTagName("form")[0];
var formulario4=document.forms[0];
//SELECCIONAR ELEMENTOS DE UN FORMULARIO
//.elements[] Devuelve un array con todos los input del formulario
//getElementById("idElemento") Devuelve un elemento con un id determinado
//getElementsByTagName("etiqueta") Devuelve un array con elementos de un tipo de etiqueta (input, select, etc.)
//getElementsByName("nombre") Devuelve un array con elementos que tienen el mismo nombre (por ejemplo, radiobutton).

window.onload = iniciar; //SIN PARENTESIS

function iniciar(){
	document.getElementById("enviar").addEventListenet('click',validar,false);
}
function validarNombre(){
	var elemento = document.getElementById("nombre");
	limpiarError(elemento);
	if (elemento.value == "") {
		alert("El campo no puede ser vacio");
		return false;
	}
	return true;
}
function validarApellido(){
	var elemento = document.getElementById("apellido");
	if (elemento.value == "") {
		alert("El campo no puede ser vacio");
		return false;
	}
	return true;
}
function validarTelefono(){
	var elemento = document.getElementById("telefono");
	if (isNAN(elemento.value)) {
		alert("El campo Telefono tiene que ser numerico");
		return false;
	}
	return true;
}
function validarFecha(){
	var dia = document.getElementById("dia").value;
	var mes = document.getElementById("mes").value;
	var ano = document.getElementById("ano").value;

	var fecha = new Date(ano, mes, dia);
	if(isNAN(fecha)){
		alert("Los campos de la fecha con incorrectos");
		return false;
	}
	return true;
}
function validarCheck(){
	var campoCheck = document.getElementById("mayor");
	if(!campoCheck.checked){
		alert("Debes ser mayor de edad");
		return false;
	}
	return true;
}
function validar(e) {
    if (validaNombre() && validaTelefono() && validaFecha() && validaCheck() && confirm("Pulsa aceptar si deseas enviar el formulario")) {
        return true;
    } else {
        e.preventDefault();
        return false;
    }
}

function error(elemento) {
    elemento.className = "error";
    elemento.focus();
}

function limpiarError(elemento) {
    elemento.className = "";
>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
}