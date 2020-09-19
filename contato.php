<!DOCTYPE html>
<html>
	<head>
		<title>Clínica Odontológica | Contato</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Dental Clinic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
				function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<!-- //js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
	</head>

	<body>
	<!-- header -->
		<div class="header">
			<!-- nome-nome consultorio-->
			<?php include_once('includes/nome-consultorio.php'); ?>
			<!--// nome-consultorio -->
		</div>
		<!-- Fone e e-mail-->
	<?php include_once('includes/fone-email.php'); ?>
	<!-- //header -->
	<!-- banner1 -->
		<div class="banner1">
			<div class="container">
				<div class="banner-nav">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							</div>

							<!-- Menu -->
							<?php include_once('includes/menu.php'); ?>
							<!--// menu -->
						</nav>
				</div>
			</div>
		</div>
	<!-- //banner1 -->
	<!-- contact -->
		<div class="contact">
			<div class="container">
				<div class="contact-form">
					<h3>Contato</h3>
					<div class="col-md-4 contact-form-left">
						<h4>Informações de contato</h4>
						<p>Utilize a melhor forma para realizar seu contato conosco.</p>
						<h5>Endereço:</h5>
						<p>R. Vinã Del Mar, 534</p>
						<p>Jardim Brasilandia.</p>
						<p>São Bernardo do Campo - SP.</p>
						<p>CEP: 09810-710</p>
						<a href="https://wa.me/+551198934-227">Whats App</a>
					</div>
					<div class="col-md-8 contact-form-right">
						<h4>Formulário</h4>
						<form>
							<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
							<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Mensagem...</textarea>
							<input type="submit" value="Enviar" >
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.8136043450677!2d-46.57422168537986!3d-23.718349473292665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce416049ad3efb%3A0x10dc3a3c1a54b6e9!2sR.%20Vin%C3%A3%20Del%20Mar%2C%20534%20-%20Jardim%20Brasilandia%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009810-710!5e0!3m2!1spt-BR!2sbr!4v1595974158542!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	<!-- //contact -->
	<!-- footer -->
	<?php include_once('includes/footer.php'); ?>
	<!-- //footer -->
	<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
				};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
	<!-- //here ends scrolling icon -->
	<!-- for bootstrap working -->
			<script src="js/bootstrap.js"> </script>
	<!-- //for bootstrap working -->
	</body>
</html>