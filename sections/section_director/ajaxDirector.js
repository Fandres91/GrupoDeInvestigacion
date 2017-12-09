function objetoAjax()
{// con esta clase de ajax abre la conexion el servidor para realizar el envio de datos 
	var xmlhttp= false; 
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");

	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E){
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;

}
/*function A(){
	
}*/
function Registrar(idP, accion)
{
	// variables para capturar los datos
	//frmDirector es el nombre del form
	cedula = document.frmDirector.cedula.value;
	nombre = document.frmDirector.nombre.value;
	telefono = document.frmDirector.telefono.value;
	correo = document.frmDirector.correo.value;
	contrasena = document.frmDirector.contrasena.value;
	profesion = document.frmDirector.profesion.value;
	id_grupo = document.frmDirector.id_grupo.value;

	//alert("Datos" +nombre+" "+telefono+" "+correo+" "+contrasena);
	// instanciamos el objeto ajax 
	ajax= objetoAjax();

	if(accion=='N'){
		ajax.open("POST","../../model/crudDirector/registrarDirector.php",true);
	}else if(accion=='E'){
		
		ajax.open("POST","../../model/crudDirector/actualizarDirector.php",true);
	}
	
	ajax.onreadystatechange = function()
	{
		if(ajax.readyState)
		{
			
			window.location.reload(true);
		}
	}
	// se encarga de codificar los valores enviados
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// se establece los datos que se van a enviar al archivo  
	ajax.send("nombre="+nombre+"&telefono="+telefono+"&correo="+correo+"&contrasena="+contrasena+"&profesion="+profesion+"&cedula="+cedula+"&id_grupo="+id_grupo);

}
function Eliminar(idP)
{
	if(confirm("Eliminar??? "))
	{
		ajax= objetoAjax();
		ajax.open("POST","../../model/crudDirector/eliminarDirector.php",true);
		ajax.onreadystatechange = function()
	{
		if(ajax.readyState==4)
		{
			alert("Datos eliminados con exito");
			window.location.reload(true);
		}
	}
	// se encarga de codificar los valores enviados
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	// se establece los datos que se van a enviar al archivo  
	ajax.send("idP="+idP);
	}else 
		{
			
		}
}	