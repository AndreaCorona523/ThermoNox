<?php 
	if(isset($_POST['enviar'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$user_type=$_POST['user_type'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zip_code=$_POST['zip_code'];
		$country=$_POST['country'];
		$send_copy='No solicitada';
		$privacy_policy='No aceptada';
		$language='es';
	}
?>

<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contacto - ThermoNox</title>
		<link href="../assets/images/favicon-32x32.png" rel="shortcut icon" type="image/jpg">
		<link href="../assets/css/general_index.css" rel="stylesheet" type="text/css">
		<script src="../assets/js/index.js" defer></script>
	</head>
	<body>
		<header class="header_container">
			<div class="language_container">
			  <div class="contact">
				<a href="tel:4621030321" class="contact__item">Llámanos al 462 103 0321</a>
				<span class="contact__item" >|</span>
				<a class="contact__item" href="./contacto.php">Escríbenos</a>
			  </div>
			  <div class="language_menu">
				<div class="language_menu__select">
				  <div class="language_icon">
					<i class="bi-globe globe-icon"></i>
				  </div>
				  <div class="selected_language"><p>Español&nbsp;</p><i class="bi-chevron-down"></i></div>
				</div>
				<ul class="language_menu__dropdown">
				  <li class="language_menu__option"><a href="../en/contact.php">English</a></li>
				  <li class="language_menu__option"><a href="./contacto.php">Español</a></li>
				</ul>
			  </div>
			</div>
			<div class="header">
			  <i class="bi-list menu-icon" id="menu-icon"></i>
			  <a class="header__logo_container" href="./">
				<img class="header__logo" src="../assets/images/thermonox-neu-logo-xl.png" alt="ThermoNox Logo">
			  </a>
			  <ul class="navbar">
				<li class="navbar__item"><a href="./">INICIO</a></li>
				<li><span class="navbar__break-line" >|</span></li>
				<li class="navbar__item">
				  <a href="./acerca_thermonox.html">THERMONOX®</a>
				  <ul class="navbar__dropdown">
					<li class="dropdown__option"><a href="./funcionamiento.html">Funcionamiento</a></li>
					<li class="dropdown__option"><a href="./aplicaciones.html">Aplicaciones</a></li>
					<li class="dropdown__option"><a href="./seguridad.html">Seguridad</a></li>
				  </ul>
				</li>
				<li><span class="navbar__break-line" >|</span></li>
				<li class="navbar__item">
				  <a href="./acerca_thermonoxilo.html">THERMONOXILO</a>
				</li>
				<li><span class="navbar__break-line" >|</span></li>
				<li class="navbar__item navbar__item--selected"><a href="./contacto.php">CONTACTO</a></li>
			  </ul>
			</div>
		  </header>
		<div class="general_container">
		        <div class="top_margin_remove principal_img_container">
			        <img src="../assets/images/contacto/contacto_imagenPrincipal.jpg" alt="Principal Image">
			    </div>
				<div class="general_title_container">
					<h1 class="top_margin_remove general_title">Contacto & Colaboraciones</h1>	
				</div>
				<div class="main_info_container">
					<div class="support_info_container">
						<p class="subtitle1">Contacto</p>
						<p class="subtitle3">Soporte técnico</p>
						<p>Adaptamos nuestros servicios perfectamente a sus necesidades prácticas y para cumplir las expectativas de los clientes lo mejor posible.</p>
						<p>En conjunto con los tratamiento, nuestro servicio otorga un completo asesoramiento técnico, valoramos especialmente el contacto directo con nuestros cliente para adaptar nuestros servicios perfectamente a sus exigencias prácticas y para cumplir las expectativas de los clientes lo mejor posible, así como el seguimiento post-servicio.</p>
					</div>
					<div class="colaborations_container">
						<p class="subtitle1">Colaboraciones</p>
						<p class="subtitle3">Latinoamérica / Norteamérica</p>
						<p>ThermoNox® GmbH es el exclusivo proveedor de tratamientos de calor para el sector alimentario y otros afines, en Latinoamérica y Norteamérica, el servicio es proporcionado en colaboración con Grupo La Moderna de manera profesional y especializada en la tecnología del tratammiento. </p>
						<p class="subtitle3">Europa / Asia / África / Oceanía</p>
						<p>Para informes de colaboración de ThermoNox® en estas regiones, puede contactar con Thermonox Gobal: <a href="https://www.thermonox.de" class="contact_global_link" target="_blank">thermonox.de</a> Nosotros alquilamos y vendemos equipos ThermoNox®. Adicionalmente ofrecemos un amplio asesoramiento técnico, formación y seminarios.</p>
					</div>
				</div>
				<div class="contact_container">
					<p class="subtitle2">¿Necesita mayores informes o cotización?</p>	
					<p>* Campo requerido</p>
					<div class="contact_form_container">
						<form name="contacto_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<ul class="contacto_form_list">
								<li>
									<label for="name" >Nombre *</label>
									<input type="text" name="name" id="name" value="<?php if(isset($name)) echo $name ?>">
								</li>
								<li>
									<label for="email">Correo electrónico *</label>
									<input type="text" name="email" id="email" value="<?php if(isset($email)) echo $email ?>">
								</li>
								<li>
									<label for="subject">Asunto *</label>
									<input type="text" name="subject" id="subject" value="<?php if(isset($subject)) echo $subject ?>"></td>
								</li>
								<li>
									<label for="message">Mensaje *</label>
									<textarea name="message" id="message" cols="50" rows="10"><?php if(isset($message)) echo $message ?></textarea>
								</li>
								<li>
									<label for="send_copy" >Envíame una copia <br>(opcional) </label>
									<input type="checkbox" name="send_copy" id="send_copy" value="Solicitada">
								</li>
								<li>
									<label for="user_type"  class="campo_title">Soy una </label>
									<select name="user_type" id="user_type">
										<option value="No seleccionado">Selecciona una opción</option>
										<option value="particular">particular</option>
										<option value="profesional">profesional</option>
										<option value="empresa">empresa</option>
										<option value="controlador de plagas">controlador de plagas</option>
									</select>
								</li>
								<li>
									<label for="city">Municipio *</label>
									<input type="text" name="city" id="city" value="<?php if(isset($city)) echo $city ?>">
								</li>
								<li>
									<label for="state">Estado *</label>
									<input type="text" name="state" id="state" value="<?php if(isset($state)) echo $state ?>">
								</li>
								<li>
									<label for="zip_code">Código Postal *</label>
									<input type="text" name="zip_code" id="zip_code" value="<?php if(isset($zip_code)) echo $zip_code ?>">
								</li>
								<li>
									<label for="country">País *</label>
									<input type="text" name="country" id="country" value="<?php if(isset($country)) echo $country ?>">
								</li>
								<li>
									<label for="privacy_policy">Aviso de privacidad<br>(opcional)</label>
									<label id="privacy_policy_label">
										<input type="checkbox" name="privacy_policy" id="privacy_policy" value="Aceptada">
										He leído y entendido la <a href="./aviso_privacidad.html" class="privacy_policy_link" target="_blank">política de privacidad.</a> 
									</label>
								</li>
								<li>
									<button type="submit" class="send_button" name="enviar">Enviar</button>
								</li>
							</ul>
						</form>
						
                        <?php 
							if(isset($_POST['enviar'])){
								include("../assets/php/validacion.php");
							}
                        ?>
					</div>
				</div>
			</div>
			<div class="footer">
				<div  class="footer__item">
				<a class="footer__sub__item" href="./aviso_privacidad.html">Aviso de privacidad</a>
      <a class="footer__sub__item" href="./preguntas_frecuentes.html">Preguntas Frecuentes</a>
				</div>

				<div  class="footer__item">
    				<p class="footer__sub__item">Contacto </p> 
    				<ul>
                      <li><i class="bi-telephone-fill"></i> <a class="footer__sub__item" href="tel:4621030321">462 103 0321</a></li>
                    </ul>
				</div>
				
				<a class="footer__sub__item" href="https://www.thermonox.de/" target="_blank">Visítanos en Thermonox.de</a>
			</div>
			<div class="offcanvas">
				<ul class="offcanvas_language">
				  <li class="offcanvas_language__item"><a href="../en/contact.php">EN</a></li>
				  <li class="offcanvas_language__item">|</li>
				  <li class="offcanvas_language__item"><a href="./contacto.php">ES</a></li>
				</ul>
				<ul class="offcanvas_nav">
				  <li class="offcanvas_nav__item"><a href="./">INICIO</a></li>
				  <li class="offcanvas_nav__item">
					<a href="./acerca_thermonox.html">THERMONOX®</a>
					  <ul class="offcanvas_subnav">
						<li class="offcanvas_subnav__item"><a href="./funcionamiento.html">Funcionamiento</a></li>
						<li class="offcanvas_subnav__item"><a href="./aplicaciones.html">Aplicaciones</a></li>
						<li class="offcanvas_subnav__item"><a href="./seguridad.html">Seguridad</a></li>
					  </ul>
				  </li>
				  <li class="offcanvas_nav__item">
					<a href="./acerca_thermonoxilo.html">THERMONOXILO</a>
				  </li>
				  <li class="offcanvas_nav__item offcanvas_nav__item--selected"><a href="./contacto.php">CONTACTO</a></li>
				  <li class="offcanvas_nav__item"><a href="tel:4621030321">LLÁMANOS</a></li>
				</ul>
			</div>
			<div class="cover" id="cover"></div>
	</body>
</html>