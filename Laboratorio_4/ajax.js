<<<<<<< HEAD
function llamar (url) {
	
	var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if (ajax.readyState==4 && ajax.status==200) {
				document.getElementById("contenido").innerHTML=ajax.responseText;
			}
		};
		ajax.open("GET",url,true);
		ajax.send();		
}
function MostrarBorrar(id){
	var check = document.getElementById(id);
	if (check.checked==true) {
		document.getElementById('actualizar'+id).style.display = 'block';
	}
	else{
		document.getElementById('actualizar'+id).style.display = 'none';	
	}
}
function datos() {
		var destinario = document.getElementById("destinario");
		var asunto = document.getElementById("asunto");	
		var mensaje = document.getElementById("mensaje");
		return "destinario=" + encodeURIComponent(destinario.value) +
		"&asunto=" + encodeURIComponent(asunto.value)+
		"&mensaje=" + encodeURIComponent(mensaje.value);
	}
function enviar(){
		var cadena = datos(); 
		var ajax = new XMLHttpRequest();
		ajax.open("POST","guardar.php",true);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				llamar('enviados.php');
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
		ajax.send(cadena);
}
function borrar(id){
	var ajax = new XMLHttpRequest();
		ajax.open("GET","guardar.php?id="+id,true);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				llamar('recibidos.php');
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
		ajax.send(id);		
=======
function llamar (url) {
	
	var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if (ajax.readyState==4 && ajax.status==200) {
				document.getElementById("contenido").innerHTML=ajax.responseText;
			}
		};
		ajax.open("GET",url,true);
		ajax.send();		
}
function MostrarBorrar(id){
	var check = document.getElementById(id);
	if (check.checked==true) {
		document.getElementById('actualizar'+id).style.display = 'block';
	}
	else{
		document.getElementById('actualizar'+id).style.display = 'none';	
	}
}
function datos() {
		var destinario = document.getElementById("destinario");
		var asunto = document.getElementById("asunto");	
		var mensaje = document.getElementById("mensaje");
		return "destinario=" + encodeURIComponent(destinario.value) +
		"&asunto=" + encodeURIComponent(asunto.value)+
		"&mensaje=" + encodeURIComponent(mensaje.value);
	}
function enviar(){
		var cadena = datos(); 
		var ajax = new XMLHttpRequest();
		ajax.open("POST","guardar.php",true);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				llamar('enviados.php');
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
		ajax.send(cadena);
}
function borrar(id){
	var ajax = new XMLHttpRequest();
		ajax.open("GET","guardar.php?id="+id,true);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				llamar('recibidos.php');
			}
		}
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
		ajax.send(id);		
>>>>>>> 5fd5fee305339c809bbeb76e23d04e98807669a4
}