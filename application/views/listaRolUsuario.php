<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ROLES ASOCIADOS</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/styleLogin.css" type="text/css"/>	
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.css" type="text/css"/>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/login.js"></script>
</head>
<body>
<input type="hidden"  id="base_url" value="<?php echo base_url(); ?>">   
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Roles Asociados</h1>
            <div class="account-wall">
			
				<form class="form-signin" id="idFormRolSeleccionado">
				
				<h1 class="text-center login-title" id="idLabelNombreUsuarioRA">
				<?php echo $nombreUsuario; ?>
                </h1>
				
				<span class="clearfix"></span>
				
				<label class="checkbox pull-left ">
                    <input type="checkbox" value="remember-me">
                    Admnistrador
                </label>
				<a href="javascript:void(0)" id="idASeleccionarRolUsuario" onclick="inicioSistemaRoles();"
				class="pull-right need-help ">
				ACEPTAR
				</a><span class="clearfix"></span>

				</form>
            </div>
        </div>
    </div>
</div>
</body>
</html>