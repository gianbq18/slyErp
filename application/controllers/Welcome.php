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
	
	
	
}
