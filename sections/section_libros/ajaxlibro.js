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
	titulo_libro = document.frmArticulo.titulo_libro.value;
	autor_libro = document.frmArticulo.autor_libro.value;
	fecha_libro = document.frmArticulo.fecha_libro.value;
	isbn_libro = document.frmArticulo.isbn_libro.value;
	lugar_publica = document.frmArticulo.lugar_publica.value;
	medio_divul_libro = document.frmArticulo.medio_divul_libro.value;
	link_libro = document.frmArticulo.link_libro.value;
	id_grupo = document.frmArticulo.id_grupo.value;
	//id_grupo = document.getElementsByName("id_grupo").value; 

	//alert("Datos" +idioma+" "+fecha+" "+nombre_revista+" "+categoria_revista);
	// instanciamos el objeto ajax 
	ajax= objetoAjax();

	if(accion=='N'){
		ajax.open("POST","../../model/crudLibros/registrarLibros.php",true);
	}else if(accion=='E'){
		
		ajax.open("POST","../../model/crudLibros/actualizarLibros.php",true);
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
	ajax.send("titulo_libro="+titulo_libro+"&autor_libro="+autor_libro+"&fecha_libro="+fecha_libro+"&isbn_libro="+isbn_libro+"&lugar_publica="+lugar_publica+"&medio_divul_libro="+medio_divul_libro+"&link_libro="+link_libro+"&id_grupo="+id_grupo+"&idP="+idP);
}
function Eliminar(idP)
{
	if(confirm("Eliminar??? "))
	{
		ajax= objetoAjax();
		ajax.open("POST","../../model/crudLibros/eliminarLibros.php",true);
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