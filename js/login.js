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
	$('#idInpClave').show(200);
	$('#idAIngresarSistema').show(200);
	$('#idAOlvidoClave').show(200);
	$('#idLabelRecordarme').show(200);
	$('#idLabelNombreUsuario').show(200);
	$('#idAVolverInicio').show(200);
}
/**oculta las opciones del login verificar usuario**/
function ocultarOpcionesLoginInicio() {
	$('#idInpUsuario').hide();
	$('#idAVerificarUsuario').hide();
}
/**mostrar las opciones del login verificar usuario**/
function mostrarOpcionesLoginInicio() {
	$('#idInpUsuario').show(200);
	$('#idAVerificarUsuario').show(200);
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

