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
	public function inicioSistemaPrincipal()
	{
		$urlSiguiente='';
		$nombreUsuario=$this->input->post('idInpUsuario');
		
		$isRoles=true;
		$rolSeleccionado=0;
		if($isRoles){
			echo 'listaRolAsociados';
		}else{
			/**asociamos rol y redireccionamos a vista del sistema Principal**/
			$this->rolUsuarioSeleccionado($rolSeleccionado);
			echo 'inicioVistaGeneral';
		}
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
	public function ingresoOlvidoClave($nombreUsuario)
	{
		$data['nombreUsuario']=$nombreUsuario;
		$this->load->view('olvidoContrasena',$data);
	}
	
	/**logica de nuevo envio de clave a correo y verificacion**/
	public function generarClaveCorreo()
	{
		
	}
	
	/**mostrar pagina para selccionar rol si contempla muchos**/
	public function listaRolAsociados()
	{
		$nombreUsuario='nombre usuario';
		$data['nombreUsuario']=$nombreUsuario;
		$this->load->view('listaRolUsuario',$data);
		
	}
	
	
	
	/**desarrolla el inicio del sistema apartir de la seleccion de un rol del listado**/
	public function inicioSistemaRoles($rolSeleccionado)
	{
		$this->rolUsuarioSeleccionado($rolSeleccionado);
		echo 'inicioVistaGeneral';
	}
	
	/**rol usuario seleccionado/ lo ingresa como session datos del rol seleccionado**/
	public function rolUsuarioSeleccionado($rolSeleccionado)
	{
		
	}
	
	
	
	/**mostrar pagina de inicio del sistema**/
	public function inicioVistaGeneral()
	{
		$this->load->view('principal/index');
	}
	
	
}
