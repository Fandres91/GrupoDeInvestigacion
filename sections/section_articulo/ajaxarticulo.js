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
	//frmArticulo es el nombre del form
	nombre_arti = document.frmArticulo.nombre_arti.value;
	idioma = document.frmArticulo.idioma.value;
	autores = document.frmArticulo.autores.value;
	numero_issn = document.frmArticulo.numero_issn.value;
	fecha = document.frmArticulo.fecha.value;
	nombre_revista = document.frmArticulo.nombre_revista.value;
	categoria_revista = document.frmArticulo.categoria_revista.value;
	medio_divul = document.frmArticulo.medio_divul.value;
	linkarticulo = document.frmArticulo.linkarticulo.value;
	id_grupo = document.frmArticulo.id_grupo.value;
	//id_grupo = document.getElementsByName("id_grupo").value; 

	//alert("Datos" +idioma+" "+fecha+" "+nombre_revista+" "+categoria_revista);
	// instanciamos el objeto ajax 
	ajax= objetoAjax();

	if(accion=='N'){
		ajax.open("POST","../../model/crudArticulo/registrarArticulo.php",true);
	}else if(accion=='E'){
		
		ajax.open("POST","../../model/crudArticulo/actualizarArticulo.php",true);
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
	ajax.send("idioma="+idioma+"&autores="+autores+"&numero_issn="+numero_issn+"&linkarticulo="+linkarticulo+"&fecha="+fecha+"&nombre_revista="+nombre_revista+"&categoria_revista="+categoria_revista+"&nombre_arti="+nombre_arti+"&medio_divul="+medio_divul+"&id_grupo="+id_grupo+"&idP="+idP);
}
function Eliminar(idP)
{
	if(confirm("Eliminar??? "))
	{
		ajax= objetoAjax();
		ajax.open("POST","../../model/crudArticulo/eliminarArticulo.php",true);
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