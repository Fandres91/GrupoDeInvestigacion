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
	//frmGrupo es el nombre del form
	nombre_grupos = document.frmGrupo.nombre_grupos.value;
	categoria = document.frmGrupo.categoria.value;
	ano_creacion = document.frmGrupo.ano_creacion.value;
	descripcion= document.frmGrupo.descripcion.value;
	linea_investigacion = document.frmGrupo.linea_investigacion.value;
	programas_vincula = document.frmGrupo.programas_vincula.value;
	facultad = document.frmGrupo.facultad.value;
	sede = document.frmGrupo.sede.value;

	//alert("Datos" +categoria+" "+linea_investigacion+" "+programas_vincula+" "+sede);
	// instanciamos el objeto ajax 
	ajax= objetoAjax();

	if(accion=='N'){
		ajax.open("POST","../../model/crudGrupo/registrarGrupo.php",true);
	}else if(accion=='E'){
		
		ajax.open("POST","../../model/crudGrupo/actualizarGrupo.php",true);
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
	ajax.send("categoria="+categoria+"&ano_creacion="+ano_creacion+"&descripcion="+descripcion+"&linea_investigacion="+linea_investigacion+"&programas_vincula="+programas_vincula+"&facultad="+facultad+"&sede="+sede+"&nombre_grupos="+nombre_grupos+"&idP="+idP);
}
function Eliminar(idP)
{
	if(confirm("Eliminar??? "))
	{
		ajax= objetoAjax();
		ajax.open("POST","../../model/crudGrupo/eliminarGrupo.php",true);
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