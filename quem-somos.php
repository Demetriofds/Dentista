<!DOCTYPE html>
<html>
<head>
<title>Clínica Odontológica | Sobre</title>
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
	<!-- breadcrumbs -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Quem Somos</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- //banner1 -->
<!-- about -->
	<div class="about" id="about">
	<div class="container">
		<h3>Especialistas</h3>
		<div class="about-grids">
			<div class="col-md-4 about-grid">
				<img src="images/3.jpg" alt=" " class="img-responsive" />
				<div class="img-bottom">
					<p>Dr A</p>
				</div>
			</div>
			<div class="col-md-4 about-grid">
				<img src="images/5.jpg" alt=" " class="img-responsive" />
				<div class="img-bottom">
					<p>Dra B</p>
				</div>
			</div>
			<div class="col-md-4 about-grid">
				<img src="images/7.jpg" alt=" " class="img-responsive" />
				<div class="img-bottom">
					<p>Dra C</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="about-grids-bottom">
			<div class="col-md-4 about-us">
				<h4>Cirurgião</h4>
				<p>Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
				nisl tempus convallis quis ac lactusnisl tempus convallis quis ac
				lactus.Sed porttitor lactus nibhSed porttitor lactus nibh.Proin
					eget tortor risus.Nulla porttitor accumsan tincidunt.</p>
			</div>
			<div class="col-md-4 about-us">
				<h4>Ortodontista</h4>
				<p>Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
				nisl tempus convallis quis ac lactus.Sed porttitor lactus nibh.</p>
			</div>
			<div class="col-md-4 about-us">
				<h4>Psicologa</h4>
				<p>Donec rutrum congue leo eget malesuada.Curabitur non nulla sit amet
				nisl tempus convallis quis ac lactusnisl tempus convallis quis ac
				lactus.Sed porttitor lactus nibhSed porttitor lactus nibh.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<div class="subscribe">
	<div class="container">
		<div class="sub-new">
			<h4>Inscreva-se em nosso informativo</h4>
			<form>
				<input type="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
				<input type="submit" value="SUBSCRIBE">
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
	</div>
<!-- //about -->
<!-- footer -->
<?php include_once('includes/footer.php'); ?>
	<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"> </script>
<!-- //for bootstrap working -->
</body>
</html>