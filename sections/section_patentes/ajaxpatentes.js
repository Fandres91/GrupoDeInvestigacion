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
	//frmPatente es el nombre del form
	nombre_patente = document.frmPatente.nombre_patente.value;
	fecha_patente = document.frmPatente.fecha_patente.value;
	nombre_comercial_patente = document.frmPatente.nombre_comercial_patente.value;
	autores_patente = document.frmPatente.autores_patente.value;
	disponibilidad_patente = document.frmPatente.disponibilidad_patente.value;
	instfinanciera_patente = document.frmPatente.instfinanciera_patente.value;
	tipo_patente = document.frmPatente.tipo_patente.value;	
	id_grupo = document.frmPatente.id_grupo.value;
	//id_grupo = document.getElementsByName("id_grupo").value; 

	//alert("Datos" +idioma+" "+fecha+" "+nombre_revista+" "+categoria_revista);
	// instanciamos el objeto ajax 
	ajax= objetoAjax();

	if(accion=='N'){
		ajax.open("POST","../../model/crudPatente/registrarPatente.php",true);
	}else if(accion=='E'){
		
		ajax.open("POST","../../model/crudPatente/actualizarPatente.php",true);
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
	ajax.send("nombre_patente="+nombre_patente+"&fecha_patente="+fecha_patente+"&autores_patente="+autores_patente+"&nombre_comercial_patente="+nombre_comercial_patente+"&disponibilidad_patente="+disponibilidad_patente+"&instfinanciera_patente="+instfinanciera_patente+"&tipo_patente="+tipo_patente+"&id_grupo="+id_grupo+"&idP="+idP);
}
function Eliminar(idP)
{
	if(confirm("Eliminar??? "))
	{
		ajax= objetoAjax();
		ajax.open("POST","../../model/crudPatente/eliminarPatente.php",true);
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
			//sin accion
		}
}	