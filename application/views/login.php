<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/styleLogin.css" type="text/css"/>	
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.css" type="text/css"/>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/login.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Bienvenido</h1>
            <div class="account-wall">
                <img id="idImgFotoUsuario" class="profile-img" src="<?php echo base_url(); ?>images/sinPerfil.png" alt="sin perfil">
                <form class="form-signin">
				
				 <h1 class="text-center login-title" id="idLabelNombreUsuario">
					nombre usuario
                </h1>
				<span class="clearfix"></span>
				
                <input type="text"  id="idInpUsuario"  class="form-control" placeholder="Usuario" autofocus>
                <input type="password" id="idInpClave" class="form-control " placeholder="Password">
				<br>
				
				<a href="javascript:void(0)" id="idAVerificarUsuario" onclick="verificarUsuario();" 
				class="pull-right need-help">
				VERIFICAR
				</a><span class="clearfix"></span>
				 
				 
				<a href="javascript:void(0)" id="idAIngresarSistema" 
				class="pull-right need-help ">
				ACEPTAR
				</a><span class="clearfix"></span>
                <label class="checkbox pull-left " id="idLabelRecordarme">
                    <input type="checkbox" value="remember-me">
                    recordarme
                </label>
                <a href="#" id="idAOlvidoClave" class="pull-right need-help ">Recuperar Contraseña </a><span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>