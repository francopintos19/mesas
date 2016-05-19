
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/siu.css">

	<title>Ingresar</title>
</head>

<hr><br>
<div class="container">
	<h1 class="titulo_pagina">Iniciar sesión: Ingresar al sistema</h1>
</div>
<div class="ayuda_rapida">

				<div class="ayuda_rapida_titulo">
						Ayuda
				</div>
			
				<div class="ayuda_rapida_contenido">
					Ingresá tu identificación y tu clave.
				</div>
</div>

<div class="login">

	<center>
	<?php 
    if($error) echo '<p class="error">'. $error .'</p>';
    echo form_open(); 
    echo form_label('Identificacion', 'email') .'<br />';
    echo form_input(array('name' => 'email', 'value' => set_value('email'))) .'<br />';
    echo form_error('email');
    echo form_label('Clave', 'password') .'<br />';
    echo form_password(array('name' => 'password', 'value' => set_value('password'))) .'<br />';
    echo form_error('password');
    echo form_submit(array('type' => 'submit', 'value' => 'Aceptar'));
    echo form_close();
    ?>
</center>
</div>
<p><a href="<?php echo site_url('auth/signup'); ?>">Sign Up</a> | <a href="<?php echo site_url('auth/forgot'); ?>">Olvidaste tu contraseña?</a></p>

