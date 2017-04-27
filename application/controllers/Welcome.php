<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('login');
	}
	
	
	/**se verifica si existe el usuario ingresado**/
	public function verificarUsuario()
	{
		
	}
	
	/**logica para ingresar al sistema**/
	public function ingresoSistema()
	{
		
	}
	
	/**verificacion de usuario y clave**/
	public function verificarUsuarioClave()
	{
		
	}
	
	/**verificacion de usuario primer Inicio**/
	public function verificarUsuarioPrimerInicio()
	{
		
	}
	
	/**verificacion de usuario si caduco su clave en un tiempo determinado**/
	public function verificarUsuarioInicioCaduco()
	{
		
	}
	
	/**verificacion de usuario si numero de intentos para acceder supera al permitido**/
	public function verificarUsuarioIntentosInvalidos()
	{
		
	}
	
	/**logica para cambiar clave**/
	public function ingresoCambiarClave()
	{
		
	}
	
	/**actualizar clave**/
	public function actualizarClave()
	{
		
	}
	
	
	
	/**logica de olvido su contraseña**/
	public function ingresoOlvidoClave()
	{
		
	}
	
	/**logica de nuevo envio de clave a correo y verificacion**/
	public function generarClaveCorreo()
	{
		
	}
	
}
