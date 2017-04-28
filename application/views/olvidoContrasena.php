<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RECUPERAR CONTRASEÑA</title>
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
            <h1 class="text-center login-title">Recuperar Contraseña</h1>
            <div class="account-wall">
				<form class="form-signin">
				<h1 class="text-center login-title" id="idLabelNombreUsuarioOC">
				<?php echo $nombreUsuario; ?>
                </h1>
				<span class="clearfix"></span>
                <input type="text"  id="idInpCorreoAsociado"  class="form-control" placeholder="Correo Asociado" autofocus>
				<a href="javascript:void(0)" id="idARecuperarClave" onclick="generarClaveCorreo();"
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