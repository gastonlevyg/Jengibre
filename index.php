<!DOCTYPE html>
<?php
if(isset($_GET['mailEnviado']) && $_GET['mailEnviado'] != ''){
	$seEnvio = $_GET['mailEnviado'];
}
?>
<html>
 	<head>
    	<title>Jengibre Te Viste</title>
    	<meta charset="utf-8" />
   		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="icon" href="img/favicon.ico" type="image/gif">
    	<!-- css -->
    	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="css/style.css" rel="stylesheet" media="screen">
		<script src="js/modernizr.custom.js"></script>
    </head>
  	<body>
		<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
				<ul class="dl-menu">
					<li>
						<a href="#intro">
							<img src="logo.png" alt="Jengibre Te Viste" title="Jengibre Te Viste" class="wow bounceIn" />
						</a>
					</li>
					<li>
						<a href="#productos" class="wow fadeInRight" data-wow-duration="500ms" data-wow-delay="100ms">Productos</a>
					</li>
					<li>
						<a href="#contact" class="wow fadeInRight" data-wow-duration="500ms" data-wow-delay="400ms">Contacto</a>
					</li>
				</ul>
			</div><!-- /dl-menuwrapper -->
		</div>	  
	 	<!-- Works -->
		<section id="banners" class="col-xs-12 home-section bg-gray">
			<video id="instrucciones" autoplay>
				<source src="img/instrucciones.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<div id="instrucciones-text" class="section-heading">
				<h2>¿Cómo Comprar?</h2>
				<p>
					1) Hacé click sobre el producto y se agregara automaticamente a la orden.<br>
					2) Completá con el talle y la cantidad que queres<br>
					3) Completá tus datos<br>
					4) Hacé click en "Realizar orden de compra"<br>
					<strong>Recibiremos tu mail y nos comunicaremos a la brevedad.</strong>
				</p>
			</div>
		</section>
		<section id="productos" class="col-xs-12 home-section bg-gray">
			<div class="col-md-6 col-xs-12 ellos">
				<h2>ELLOS</h2>
				<ul class="lb-album">
					<li class="col-xs-6">
						<a href="javascript: addToMessage('Zapatilla Jean con Tiras - Negro');">
							<img src="img/zapatilla-rayas-gris.jpg" alt="Zapatilla Jean con Tiras - Negro" title="Zapatilla Jean con Tiras - Negro">
							<div class="productInfo">
								<p class="nombre">
									Zapatilla Jean con Tiras - Negro
								</p>
								<p class="descripcion">
									Zapatillas urbanas, pegadas y cocidas muy buena calidad. Super comodas.<br>
									Jean + Simil cuero. Suela de goma
								</p>
								<span>Talles: 39 al 45</span>
								<strong>Precio: $890</strong>
							</div>
						</a>
					</li>
					<li class="col-xs-6">
						<a href="javascript: addToMessage('Zapatilla Jean con Tiras - Azul con bordo');">
							<img src="img/zapatilla-rayas-roja.jpg" alt="Zapatilla Jean con Tiras - Azul con bordo" title="Zapatilla Jean con Tiras - Azul con bordo">
							<div class="productInfo">
								<p class="nombre">
									Zapatilla Jean con Tiras - Azul con bordo
								</p>
								<p class="descripcion">
									Zapatillas urbanas, pegadas y cocidas muy buena calidad. Super comodas.<br>
									Jean + Simil cuero. Suela de goma
								</p>
								<span>Talles: 39 al 45</span>
								<strong>Precio: $890</strong>
							</div>
						</a>
					</li>
					<li class="col-xs-6">
						<a href="javascript: addToMessage('Chupin Negro');">
							<img src="img/chupin-negro.jpg" alt="Chupin Negro" title="Chupin Negro">
							<div class="productInfo">
								<p class="nombre">
									Chupin Negro
								</p>
								<p class="descripcion">
									Chupin de hombre, de gabardina elastizada. 2 bolsillos delanteros y 2 bolsillos traseros. Bragueta con cierre.<br>
									Gabardina elaztizada
								</p>
								<span>Talles: 38 al 46</span>
								<strong>Precio: $470</strong>
							</div>
						</a>
					</li>
					<li class="col-xs-6">
						<a href="javascript: addToMessage('Campera Lisa Gabardina - Beige (sand)');">
							<img src="img/campera-lisa-gabardina.jpg" alt="Campera Lisa Gabardina - Beige (sand)" title="Campera Lisa Gabardina - Beige (sand)">
							<div class="productInfo">
								<p class="nombre">
									Campera Lisa Gabardina - Beige (sand)
								</p>
								<p class="descripcion">
									Campera de gabardina, modelo a la cintura, con forro y bolsillo interno. Capucha con cierre.<br>
									Gabardina elaztizada
								</p>
								<span>Talles: L y XL</span>
								<strong>Precio: $999</strong>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-6 col-xs-12 ellas">
				<h2>ELLAS</h2>
				<ul class="lb-album">
					<li class="col-xs-6 col-md-offset-3">
						<a href="javascript: addToMessage('Borcego Simil Cuero Negro');">
							<img src="img/borcego-simil-cuero.jpg" alt="Borcego Simil Cuero Negro" title="Borcego Simil Cuero Negro">
							<div class="productInfo">
								<p class="nombre">
									Borcego Simil Cuero Negro
								</p>
								<p class="descripcion">
									Borcego de dama, super cómodo y de excelente calidad<br>
									Simil cuero + suela de goma
								</p>
								<span>Talles: 35 al 40</span>
								<strong>Precio: $790</strong>
							</div>
						</a>
					</li>
					<li class="col-xs-6 col-md-offset-3">
						<a href="javascript: addToMessage('Panchas doble cierre Negro');">
							<img src="img/panchas.jpg" alt="Panchas doble cierre Negro" title="Panchas doble cierre Negro">
							<div class="productInfo">
								<p class="nombre">
									Panchas doble cierre Negro
								</p>
								<p class="descripcion">
									Panchas urbanas con doble cierre, super cómodas para pasear por donde mas te guste<br>
									Simil cuero + suela de goma
								</p>
								<span>Talles: 35 al 40</span>
								<strong>Precio: $790</strong>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- Contact -->
	  	<section id="contact" class="col-xs-12 home-section bg-white">
	  		<div class="container">
			  	<div class="row">
				  	<div class="col-md-offset-2 col-md-8">
						<div class="section-heading">
							<h2>Contacto</h2>
						</div>
				 	 </div>
			  	</div>
	  			<div class="row">
	  				<div class="col-md-offset-1 col-md-10">
						<form class="form-horizontal" action="form.php" method="POST">
						  	<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
						  			<input type="text" class="form-control" name="inputName" id="inputName" placeholder="Nombre" required>
								</div>
				  			</div>
					  		<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
						  			<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required>
								</div>
					  		</div>
				  			<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
					  				<input type="text" class="form-control" name="inputPhone" id="inputPhone" placeholder="Telefono" required>
								</div>
				  			</div>
				 			<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
					  				<textarea id="message" name="message" class="form-control" rows="3" placeholder="Mensaje" required></textarea>
								</div>
				  			</div>
				  			<div class="form-group">
								<div class="col-md-offset-2 col-md-8">
					 				<button type="submit" class="btn btn-theme btn-lg btn-block">Realizar orden de compra</button>
								</div>
				  			</div>
							<?php
							if(isset($seEnvio)){
								if($seEnvio == 'no'){
							?>
							<p class="col-xs-12 mensaje error" style="color:red">
								Hubo un error, por favor volvé a intentarlo.
							</p>
							<?php
								}
								if($seEnvio == 'si'){
							?>
							<p class="col-xs-12 mensaje success" style="color:green">
								Recibimos tu orden, nos comunicaremos a la brevedad para finalizar la compra
							</p>
							<?php	
								}
							}
							?>
						</form>
	  				</div>
	  			</div>
				<div class="row mar-top30 ">
					<div class="col-md-offset-2 col-md-8">
						<ul class="social-network">
							<li>
								<a href="https://www.facebook.com/JengibreTeViste/" target="_blank">
									<span class="fa-stack fa-2x">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</li>
						</ul>
					</div>				
				</div>
	  		</div>
	  	</section>
	 	<!-- js -->
		<script src="js/jquery.js"></script>
		<script type="text/javascript">
		/*function alturaPlaca(){
			var altura = $('#instrucciones').css('height');
			alert(altura);
			document.getElementById("instrucciones-text").style.height = altura;
		}*/
		
		function addToMessage(messageToAdd){
			var mensaje = $('#message').val();
			mensaje = messageToAdd + ' - Talle: __ Cantidad: 1 \n' + mensaje;

			$('html, body').animate({
			    scrollTop: $("#message").offset().top,
			}, 600, function() {
				$('#message').css('box-shadow', '0 0 8px 1px red');
			    setTimeout(sombras, 1500);
			});

			var sombras = function(){
				$('#message').css('box-shadow', 'inherit');
			}

			$('#message').val(mensaje);
		}
		
		var instr = document.getElementById("instrucciones");
		instr.onended = function() {
			var altura = $('#instrucciones').css('height');
			$('#instrucciones-text').css('height', altura);
			altura = parseInt(altura);
			altura = (altura - (altura * 2)) - 5;
			altura = altura + "px";
			$('#instrucciones-text').css('margin-top', altura);
			$('#instrucciones-text').fadeIn();
			instr.play();
		};
		
		$(document).ready(function(){
			<?php
				if(!isset($seEnvio)){
			?>
				var hacerscroll = setTimeout(scrollear, 20000);
			<?php
				}else{
			?>
				$('html, body').animate({
					scrollTop: $('#contact .mensaje').offset().top,
				}, 600);
			<?php
				}
			?>
			var alturaPagina = $(window).height();
			alturaPagina = alturaPagina - 90;
			$('#instrucciones').css('height', alturaPagina);
			var anchoPagina = $(window).width();
			var anchoVideo = $('#instrucciones').css('width');
			var marginarVideo = setTimeout(mv(anchoPagina, anchoVideo), 750);
		});
		function scrollear(){
			var ellosellas = $('#productos').offset().top;
			ellosellas = parseInt(ellosellas) - 100;
			$('html, body').animate({
				scrollTop: ellosellas,
			}, 600);
		}
		function mv(anchoPagina, anchoVideo){
			var marginVideo = (parseInt(anchoVideo) - anchoPagina) / 2;
			marginVideo = marginVideo - (marginVideo * 2);
			
			var anchoVideo = $('#instrucciones').css('margin-left', marginVideo);
		}
		
		</script>
	    
	    <script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.smooth-scroll.min.js"></script>
		<script src="js/jquery.dlmenu.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>