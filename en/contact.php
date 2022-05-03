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
		$send_copy='Not requested';
		$privacy_policy='Not accepted';
		$language='en';
	}

?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact - ThermoNox</title>
		<link href="../assets/images/favicon-32x32.png" rel="shortcut icon" type="image/jpg">
		<link href="../assets/css/general_index.css" rel="stylesheet" type="text/css">
		<script src="../assets/js/index.js" defer></script>
	</head>
	<body>
	<header class="header_container">
			<div class="language_container">
			  <div class="contact">
				<a href="tel:4621030321" class="contact__item">Call us at 462 103 0321</a>
				<span class="contact__item" >|</span>
				<a class="contact__item" href="./contact.php">Contact us</a>
			  </div>
			  <div class="language_menu">
				<div class="language_menu__select">
				  <div class="language_icon">
					<i class="bi-globe globe-icon"></i>
				  </div>
				  <div class="selected_language"><p>English&nbsp;</p><i class="bi-chevron-down"></i></div>
				</div>
				<ul class="language_menu__dropdown">
				  <li class="language_menu__option"><a href="./contact.php">English</a></li>
				  <li class="language_menu__option"><a href="../es/contacto.php">Español</a></li>
				</ul>
			  </div>
			</div>
			<div class="header">
			  <i class="bi-list menu-icon" id="menu-icon"></i>
			  <a class="header__logo_container" href="./">
				<img class="header__logo" src="../assets/images/thermonox-neu-logo-xl.png" alt="ThermoNox Logo">
			  </a>
			  <ul class="navbar">
				<li class="navbar__item"><a href="./">HOME</a></li>
				<li><span class="navbar__break-line" >|</span></li>
				<li class="navbar__item">
				  <a href="./about_thermonox.html">THERMONOX®</a>
				  <ul class="navbar__dropdown">
					<li class="dropdown__option"><a href="./functioning.html">Functioning</a></li>
					<li class="dropdown__option"><a href="./application.html">Application</a></li>
					<li class="dropdown__option"><a href="./safety.html">Safety</a></li>
				  </ul>
				</li>
				<li><span class="navbar__break-line" >|</span></li>
				<li class="navbar__item">
				  <a href="./about_thermonoxilo.html">THERMONOXILO</a>
				<li><span class="navbar__break-line" >|</span></li>
				<li class="navbar__item navbar__item--selected"><a href="./contact.php">CONTACT</a></li>
			  </ul>
			</div>
		</header>
		<div class="general_container">
		        <div class="principal_img_container">
			        <img src="../assets/images/contacto/contacto_imagenPrincipal.jpg" alt="Principal Image">
			    </div>
				<div class="general_title_container">
					<h1 class="top_margin_remove general_title">Contact & Network</h1>	
				</div>
				<div class="main_info_container">
					<div class="support_info_container">
						<p class="subtitle1">Contact</p>
						<p class="subtitle3">Technical support</p>
						<p>We tailor our services perfectly to your practical needs and to meet customer expectations as well as possible.</p>
						<p>In conjunction with the treatment, our service provides complete technical advice, we especially value direct contact with our clients to adapt our services perfectly to their practical demands and to meet the expectations of the clients as best as possible, as well as post-service follow-up.</p>
					</div>
					<div class="colaborations_container">
						<p class="subtitle1">Network</p>
						<p class="subtitle3">Latin America / North America</p>
						<p>ThermoNox® GmbH is the exclusive provider of heat treatments for the food sector and other related sectors in Latin America and North America. The service is provided in collaboration with Grupo La Moderna in a professional and specialized manner in treatment technology. </p>
						<p class="subtitle3">Europe / Asia / Africa / Oceania</p>
						<p>For ThermoNox® collaboration reports in these regions, you can contact Thermonox Global: <a href="https://www.thermonox.de" class="contact_global_link" target="_blank">thermonox.de</a> We rent and sell ThermoNox® equipment. Additionally, we offer extensive technical advice, training and seminars.</p>
					</div>
				</div>
				<div class="contact_container">
					<p class="subtitle2">Do you need more information or a quote?</p>	
					<p>* Required field</p>
					<div class="contact_form_container">
						<form name="contacto_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							<ul class="contacto_form_list">
								<li>
									<label for="name" >Name *</label>
									<input type="text" name="name" id="name" value="<?php if(isset($name)) echo $name ?>">
								</li>
								<li>
									<label for="email">Email  *</label>
									<input type="text" name="email" id="email" value="<?php if(isset($email)) echo $email ?>">
								</li>
								<li>
									<label for="subject">Subject *</label>
									<input type="text" name="subject" id="subject" value="<?php if(isset($subject)) echo $subject ?>"></td>
								</li>
								<li>
									<label for="message">Message *</label>
									<textarea name="message" id="message" cols="50" rows="10"><?php if(isset($message)) echo $message ?></textarea>
								</li>
								<li>
									<label for="send_copy" >Send me a copy <br>(optional) </label>
									<input type="checkbox" name="send_copy" id="send_copy" value="Requested">
								</li>
								<li>
									<label for="user_type"  class="campo_title">I am a</label>
									<select name="user_type" id="user_type">
										<option value="Not selected">Select an option</option>
										<option value="private person">private person</option>
										<option value="professional">professional</option>
										<option value="enterprise">enterprise</option>
										<option value="pest controller">pest controller</option>
									</select>
								</li>
								<li>
									<label for="city">City *</label>
									<input type="text" name="city" id="city" value="<?php if(isset($city)) echo $city ?>">
								</li>
								<li>
									<label for="state">State *</label>
									<input type="text" name="state" id="state" value="<?php if(isset($state)) echo $state ?>">
								</li>
								<li>
									<label for="zip_code">Zip Code *</label>
									<input type="text" name="zip_code" id="zip_code" value="<?php if(isset($zip_code)) echo $zip_code ?>">
								</li>
								<li>
									<label for="country">Country *</label>
									<input type="text" name="country" id="country" value="<?php if(isset($country)) echo $country ?>">
								</li>
								<li>
									<label for="privacy_policy">Privacy Policy<br>(optional)</label>
									<label id="privacy_policy_label">
										<input type="checkbox" name="privacy_policy" id="privacy_policy" value="Accepted">
										I have read and understood the <a href="./privacy_policy.html" class="privacy_policy_link" target="_blank">privacy policy.</a> 
									</label>
								</li>
								<li>
									<button type="submit" class="send_button" name="enviar">Send</button>
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
				<a class="footer__sub__item" href="./privacy_policy.html">Privacy Policy</a>
				<a class="footer__sub__item" href="./frequently_asked_questions.html">Frequently Asked Questions</a>
			</div>
			<div  class="footer__item">
				<p class="footer__sub__item">Contact </p> 
			    <ul>
                  <li><i class="bi-telephone-fill"></i> <a class="footer__sub__item" href="tel:4621030321">462 103 0321</a></li>
                </ul>
			</div>
			<a class="footer__sub__item" href="https://www.thermonox.de/" target="_blank">Visit us on Thermonox.de</a>
		</div>
		<div class="offcanvas">
			<ul class="offcanvas_language">
			  <li class="offcanvas_language__item"><a href="./contact.php">EN</a></li>
			  <li class="offcanvas_language__item">|</li>
			  <li class="offcanvas_language__item"><a href="../es/contacto.php">ES</a></li>
			</ul>
			<ul class="offcanvas_nav">
			  <li class="offcanvas_nav__item"><a href="./">HOME</a></li>
			  <li class="offcanvas_nav__item">
				<a href="./about_thermonox.html">THERMONOX®</a>
				  <ul class="offcanvas_subnav">
					<li class="offcanvas_subnav__item"><a href="./functioning.html">Functioning</a></li>
					<li class="offcanvas_subnav__item"><a href="./application.html">Application</a></li>
					<li class="offcanvas_subnav__item"><a href="./safety.html">Safety</a></li>
				  </ul>
			  </li>
			  <li class="offcanvas_nav__item">
				<a href="./about_thermonoxilo.html">THERMONOXILO</a>
			  </li>
			  <li class="offcanvas_nav__item offcanvas_nav__item--selected"><a href="./contact.php">CONTACT</a></li>
			  <li class="offcanvas_nav__item"><a href="tel:4621030321">CALL US</a></li>
			</ul>
		</div>
		<div class="cover" id="cover"></div>
	</body>
</html>