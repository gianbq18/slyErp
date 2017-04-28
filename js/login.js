$(document).ready(function () {
	base_url=$('#base_url').val();
	/**ocultar las siguientes opciones**/
	ocultarOpcionesLogin();	
});
/**oculta las opciones del login**/
function ocultarOpcionesLogin() {
	$('#idInpClave').hide();
	$('#idAIngresarSistema').hide();
	$('#idAOlvidoClave').hide();
	$('#idLabelRecordarme').hide();
	$('#idLabelNombreUsuario').hide();
	$('#idAVolverInicio').hide();
}

/**mostrar las opciones del login**/
function mostrarOpcionesLogin() {
	$('#idInpClave').show(400);
	$('#idAIngresarSistema').show(400);
	$('#idAOlvidoClave').show(400);
	$('#idLabelRecordarme').show(400);
	$('#idLabelNombreUsuario').show(400);
	$('#idAVolverInicio').show(400);
}
/**oculta las opciones del login verificar usuario**/
function ocultarOpcionesLoginInicio() {
	$('#idInpUsuario').hide();
	$('#idAVerificarUsuario').hide();
}
/**mostrar las opciones del login verificar usuario**/
function mostrarOpcionesLoginInicio() {
	$('#idInpUsuario').show(400);
	$('#idAVerificarUsuario').show(400);
}
/**se verifica si existe el usuario ingresado**/
function verificarUsuario() {
	usuario=$('#idInpUsuario').val();
	if(usuario.trim()!=''){
		ocultarOpcionesLoginInicio();
		mostrarOpcionesLogin();
		$('#idLabelNombreUsuario').html(usuario);
		
	}else{
		alert('El campo Usuario se encuentra en blanco.');
		$('#idInpUsuario').focus();
	}
	
}

/**volver a la opcion de login inicial**/
function volverLoginInicio() {
	ocultarOpcionesLogin();	
	mostrarOpcionesLoginInicio();
	$('#idLabelNombreUsuario').html('');
	$('#idInpUsuario').val('');
}

/**redirecciona a la pagina para recuperar clave**/
function ingresoOlvidoClave()
{
	nombreUsuario=$('#idInpUsuario').val();
	location.href=base_url+"index.php/welcome/ingresoOlvidoClave/"+nombreUsuario;
}

/**envia informacion al controlador para generar clave y enviar un correo**/
function generarClaveCorreo(){
	
	
}
/**Nos permite actualizar la clave**/
function actualizarClave(){
	/**verificamos que las contraseñas sean iguales**/
	claveNueva=$("#idInpClaveNueva").val();
	claveNuevaRepetir=$("#idInpClaveNuevaRepetir").val();
	if(claveNueva!='' && claveNuevaRepetir!=''){
		if(claveNueva==claveNuevaRepetir){
			
		}else{
			alert('contraseñas no son iguales');
		}
	}else{
		alert('contraseña se encuentra en blanco');
	}
}

