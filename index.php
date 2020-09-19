<!DOCTYPE html>
<html>
	<head>
		<title>Clínica Odontológica Falcão Ferrari| Home</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Clinica Odontologia, odontologia, Dentista, cirurgião dentista, Ortodontista, Ortodontia, próteses" />
		<meta name="description" content="Dentista/Clínica Odontológica - Falcão Ferrari - SBC">
		<script type="application/x-javascript">
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); }
		</script>
		<!-- //for-mobile-apps -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/lazysizes.min.js"></script>
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
		<!-- nome-nome consultório-->
		<?php include_once('includes/nome-consultorio.php'); ?>
		<!--// nome-consultório -->
		</div>
		<!-- Fone e e-mail-->
		<?php include_once('includes/fone-email.php'); ?>

		<!-- //header -->
		<!-- banner -->
		<div class="banner">
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

						<!-- Collect the nav links, forms, and other content for toggling -->
						<!-- Menu -->
						<?php include_once('includes/menu.php'); ?>
						<!--// menu -->

					</nav>
					<!-- Slider-starts-Here -->
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
						});

						});
					</script>
					<!--//End-slider-script -->
					<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
						<ul class="rslides" id="slider3">
							<li>
								<div class="banner-info">
									<h2>Odontologia</h2>
									<p>O dentista clínico geral é o profissional da saúde capacitado na área de odontologia, entre as suas competências estão prevenção, diagnóstico, prognostico,	tratamento de uma ampla variedade de condições, desordens e doenças dos dentes e gengivas.</p>
									<a href="single.html" class="hvr-shutter-out-horizontal">Saiba mais</a>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h2>Tratamento Ortodontico</h2>
									<p>Ortodontia é uma especialidade odontológica que corrige a posição dos dentes e dos ossos maxilares posicionados de forma inadequada. Dentes tortos ou dentes que não se encaixam corretamente são difíceis de serem mantidos limpos, podendo ser perdidos precocemente, devido à deterioração e à doença periodontal.</p>
									<a href="single.html" class="hvr-shutter-out-horizontal">Saiba mais</a>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h2>Obturações</h2>
									<p>A obturação dentária permite que um dente cariado ou partido seja restaurado, voltando a ter a sua forma e função normal. Quando um dentista trata uma cárie dentária, ele começa por remover toda a zona corrompida, limpa a área afetada e, em último lugar, obtura essa cavidade com um material restaurado.</p>
									<a href="single.html" class="hvr-shutter-out-horizontal">Saiba mais</a>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h2>Proteses Dentárias</h2>
									<p>As próteses dentárias são soluções feitas nas medidas para aquelas pessoas que tiveram algum problema e precisam repor algum dente que foi extraído, que não tenha nascido ou até tenha se quebrado. Para isso, existem diferentes tipos de prótese dentária que se adaptam às necessidades específicas de cada paciente.</p>
									<a href="single.html" class="hvr-shutter-out-horizontal">Saiba mais</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!-- //banner -->
	<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container">
				<div class="banner-bottom-grids">
					<div class="banner-bottom-grid-left">
						<div class="banner-bottom-grid-left-grid">
							<a href="images/1.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/1.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="banner-bottom-grid-left-grid">
							<a href="images/2.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/2.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="banner-bottom-grid-left-grid">
							<a href="images/3.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/3.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="banner-bottom-grid-left-grid">
							<a href="images/4.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/4.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="clearfix"> </div>
						<div class="banner-bottom-grid-left-grid">
							<a href="images/5.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="banner-bottom-grid-left-grid">
							<a href="images/6.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/6.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="banner-bottom-grid-left-grid">
							<a href="images/7.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/7.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="banner-bottom-grid-left-grid">
							<a href="images/8.jpg" class="b-link-stripe b-animate-go1   swipebox"  title="">
								<img src="images/8.jpg" alt=" " class="img-responsive" />
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<div class="banner-bottom-grid-right">
						<div class="banner-bottom-grid-right-grid">
							<h3>Facebook</h3>
							<p> Agende sua consulta pela nossa paina do Face!</p>
							<!-- <form>
								<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Mensagem...</textarea>
								<input type="submit" value="Enviar	" >
							</form> -->
						</div>
					</div>
					<link rel="stylesheet" href="css/swipebox.css">
						<script src="js/jquery.swipebox.min.js"></script>
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
							</script>
				</div>
			</div>
		</div>
	<!-- //banner-bottom -->
	<!-- banner-bottom-video -->
		<div class="banner-bottom-video">
			<div class="container">
				<div class="banner-bottom-video-grids">
					<div class="banner-bottom-video-grid-left">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Lista de Serviços
									</a>
								</h4>
								</div>
								<!-- <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Conheça todos as nossas especialidades
									</div>
								</div> -->
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Obturações
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										A obturação dentária permite que um dente cariado ou partido seja restaurado, voltando a ter a sua forma e função normal. Quando um dentista trata uma cárie dentária, ele começa por remover toda a zona corrompida, limpa a área afetada e, em último lugar, obtura essa cavidade com um material restaurado.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Ortodontia
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										Ortodontia é uma especialidade odontológica que corrige a posição dos dentes e dos ossos maxilares posicionados de forma inadequada. Dentes tortos ou dentes que não se encaixam corretamente são difíceis de serem mantidos limpos, podendo ser perdidos precocemente, devido à deterioração e à doença periodontal.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Dentística
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
										Dentística ou odontologia estética é o ramo da odontologia que atua na área da cosmética e restauração dental. Entre outros serviços, nós profissionais desta especialidade tratamos o clareamento dos dentes, uso de resinas diretas, facetas, lentes de contato dental, e restaurações estéticas.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Implantes
									</a>
								</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body">
										Essa é a oportunidade de realizar o seu sonho de ter um sorriso branco e saudável! Nós oferecemos toda a tecnologia necessária e profissionais especialistas para trazer os melhores resultados em implantes dentários!
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingSix">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									Avaliação Dentária
									</a>
								</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
									<div class="panel-body">
										A avaliação odontológica tem como objetivo identificar o estado de saúde bucal dos pacientes, com atenção tanto para os sintomas de disfunções quanto para as queixas em relação à função dos dentes e à estética.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingSeven">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									Odontopediatria
									</a>
								</h4>
								</div>
								<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
									<div class="panel-body">
										Essa especialidade fornece formação técnica e científica para o dentista diagnosticar, prevenir, tratar e controlar os problemas de saúde bucal do bebê, da criança e do adolescente.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingEight">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									Apicectomia
									</a>
								</h4>
								</div>
								<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
									<div class="panel-body">
										Apicectomia é um procedimento que envolve o corte do ápice do dente, que, por sua vez, é a ponta da raiz do elemento dental.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="banner-bottom-video-grid-right">
						<h4>Aqui você tem todos os tratamentos</h4>
						<div class="banner-bottom-video-grid-rgt">
							<img src="images/7.jpg" alt=" " class="img-responsive" />
							<div class="caption">
								<h3>Várias Especialidades</h3>
								<p>A Clínica do Dr Anderson Ferrari, esta preparada para atender de forma eficiente todas as situações no ramo da odontologia.</p>
								<p><a href="#" class="btn atque btn-primary hvr-shutter-out-horizontal" role="button">Saiba mais</a></p>
							</div>
						</div>
						<div class="banner-bottom-video-grid-rgt">
							<ul>
								<li><a href="#">Disfunção Temporomandibular e Dor Orofacial</a></li>
								<li><a href="#">Cirurgia e Traumatologia Buco-Maxilo-Facial</a></li>
								<li><a href="#">Radiologia Odontológica e Imaginologia</a></li>
								<li><a href="#">Estomatologia</a></li>
								<li><a href="#">Ortopedia Funcional dos Maxilares</a></li>
								<li><a href="#">Prótese Bucomaxilofacial</a></li>
								<li><a href="#">Prótese Dentária</a></li>
								<li><a href="#">Saúde Coletiva</a></li>
								<li><a href="#">Patologia Bucal</a></li>
								<li><a href="#">Odontologia do Trabalho</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!-- //banner-bottom-video -->
	<!-- featured-services -->
		<div class="featured-services">
			<div class="container">
				<div class="featured-services-left">
					<h3>Assista nosso vídeo</h3>
					<div class="featured-services-video">
						<div id="small-dialog" class="mfp-hide">
							<iframe src="https://player.vimeo.com/video/7361599" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
					<h3>Prescrição de medicamentos</h3>
					<p>A Lei nº 5.081/66 (que regula o Exercício da Odontologia) em seu artigo 6º, II, dispõe que compete ao Cirurgião-Dentista prescrever e aplicar especialidades farmacêuticas de uso interno e externo, indicadas em Odontologia.</p>
				</div>
				<div class="featured-services-right">
					<h3>Notícias</h3>
					<img src="images/dr-anderson.jpg" alt="Dr Anderson, Cirurgião Dentista " class="img-responsive" />
					<h4>Reabertura do Consultório</h4>
					<p>Informamos o consultório encontra-se em funcionamento em horário normal e que estamos atendendo os casos mais urgentes. </p>
					<div class="text-date">
						<p><span>Fechado os domingos e feriados</span></p>

					</div>
					<div class="load">
						<a href="cirurgiao-dentista.php" class="btn atque btn-primary hvr-shutter-out-horizontal" role="button">Saiba Mais</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	<!-- //featured-services -->
	<!-- view -->
		<div class="view">
			<div class="container">
				<div class="view-left">
					<p>A Odontologia é uma profissão que se exerce em benefício da
						saúde do ser humano, da coletividade e do meio ambiente, sem discriminação
						de qualquer forma ou pretexto.</p>
				</div>
				<div class="view-right">
					<a href="includes/constituicao.pdf" class="btn atque btn-primary hvr-shutter-out-horizontal" role="button">Saiba mais</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<!-- //view -->
	<!-- map -->
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.8136043450677!2d-46.57422168537986!3d-23.718349473292665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce416049ad3efb%3A0x10dc3a3c1a54b6e9!2sR.%20Vin%C3%A3%20Del%20Mar%2C%20534%20-%20Jardim%20Brasilandia%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009810-710!5e0!3m2!1spt-BR!2sbr!4v1595974158542!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	<!-- //map -->
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