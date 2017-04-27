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
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Bienvenido</h1>
            <div class="account-wall">
                <img id="idImgFotoUsuario" class="profile-img" src="" alt="">
                <form class="form-signin">
                <input type="text"  id="idInpUsuario"  class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" id="idInpClave" class="form-control" placeholder="Password" required>
                <button id="idButtonVerificarUsuario" class="btn btn-lg btn-primary btn-block">
                    Verificar</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" id="idAOlvidoClave" class="pull-right need-help">Recuperar Contraseña </a><span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>