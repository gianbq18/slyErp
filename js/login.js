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

