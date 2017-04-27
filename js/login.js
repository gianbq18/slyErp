$(document).ready(function () {
	/**ocultar las siguientes opciones**/
	ocultarOpcionesLogin();	
});
/**oculta las opciones del login**/
function ocultarOpcionesLogin() {
	$('#idInpClave').hide();
	$('#idAIngresarSistema').hide();
	$('#idAOlvidoClave').hide();
	$('#idLabelRecordarme').hide();
}

/**mostrar las opciones del login**/
function mostrarOpcionesLogin() {
	$('#idInpClave').show(200);
	$('#idAIngresarSistema').show(200);
	$('#idAOlvidoClave').show(200);
	$('#idLabelRecordarme').show(200);
}
/**oculta las opciones del login verificar usuario**/
function ocultarOpcionesLoginInicio() {
	$('#idInpUsuario').hide();
	$('#idAVerificarUsuario').hide();
}

/**se verifica si existe el usuario ingresado**/
function verificarUsuario() {
	usuario=$('#idInpUsuario').val();
	if(usuario.trim()!=''){
		ocultarOpcionesLoginInicio();
		mostrarOpcionesLogin();
	}else{
		alert('El campo Usuario se encuentra en blanco.');
		$('#idInpUsuario').focus();
	}
	
}