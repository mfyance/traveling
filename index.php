<!doctype html>
<html lang="en">
<head>
	<?php include 'includes/seo.php' ;?>	
	<!-- ======================
	[[Estilos para esta página]]
	======================== -->
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/especificos.css">
	<style>
		#second{
			background-image: url('imagenes/banners/banner1.jpg') ;			
		}
	</style>
	<!-- ==============================
	[[fin de Estilos para esta página]]
	=============================== -->

	<!-- {Estilos para IE, va en todas las páginas}	 -->
	<!--[if IE]>
		<link href="privado/css/ie.css" rel="stylesheet" type="text/css" />
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->	
	<title>Intercorp - Sitio web</title>	
</head>
<body class="overflow">
	<section id="jSplash">
		<div class="img">
			<img src="imagenes/general/logo.png" alt="Interconsult" title="Interconsult">
		</div>
	</section>	

	<section id="first" class="cleaner container-fluid">
		<article id="top" class="cleaner">
			<div class="header noingresado row-fluid cleaner">
				<div class="span12 cleaner">
					<div  class="cleaner contenedor row-fluid cleaner">
						<div class="branding span4 cleaner">
							<a href="javascript:void(0)" class="cleaner">
								<img class="cleaner" src="imagenes/general/logo.png" title="Interconsult" alt="Interconsult">
								<h1>Interconsult</h1>
							</a>
						</div>
						<div class="span8 cleaner">
							<div class="row-fluid cleaner">							
								<div class="span4 offset8 cleaner">
									<div class="idiomas cleaner">
										<p>¿En qué idiomas nos comunicamos?</p>
										<p>What language do you speak?</p>
										<p>#"#$#R!?</p>
									</div>
									<div class="banderas cleaner">
										<div class="myhover-toico cleaner">
											<a href="javascript:void(0)" class="cleaner" alt="Español" title="Español">
												<i class="myicon-castellano"></i>
											</a>
										</div>
										<div class="myhover-toico cleaner">
											<a href="javascript:void(0)" class="cleaner" alt="Chenesse" title="Chenesse">
												<i class="myicon-chino"></i>
											</a>
										</div>
										<div class="myhover-toico cleaner">
											<a href="javascript:void(0)" class="cleaner" alt="English" title="English">
												<i class="myicon-ingles"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="main-slider" class="cleaner row-fluid">
				<div id="slider-text" class="flexslider span12 cleaner">
					<ul class="slides cleaner">
						<li>
							<div class="cleaner">
								<h2>Te ayudamos a tramitar tu visa 1</h2>
							</div>
						</li>
						<li>
							<div class="cleaner">
								<h2>Te ayudamos a tramitar tu visa 2</h2>
							</div>
						</li>
						<li>
							<div class="cleaner">
								<h2>Te ayudamos a tramitar tu visa 3</h2>
							</div>
						</li>						
					</ul>
				</div>
			</div>
		</article>
		<article  id="bottom" class="cleaner row-fluid">
			<div id="caja-natural" class="caja cleaner hi-icon-effect">
				<div class="content cleaner">
					<div class="cleaner hi-icon-main">
						<i class="myicon-to-natural "></i>
					</div>
					<div class="cleaner">
						<h6>Personal Natural</h6>
					</div>
					<div class="cleaner tobutton control-clone">
						<form action="" id="frm-to-natural" class="cleaner">
							<input type="text" class="myinput style1 cleaner txt-nombre" placeholder="Cuál es tu nombre" name="natural" id="natural">
							<div class="tobut cleaner">
								<button type="submit" class="mybut ingresar cleaner submit" data-loading-text="Enviando...">Ingresar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="caja-empresa" class="caja cleaner hi-icon-effect">
				<div class="content cleaner">
					<div class="cleaner hi-icon-main">
						<i class="myicon-to-empresa"></i>
					</div>
					<div class="cleaner">
						<h6>Para empresas</h6>
					</div>					
					<div class="cleaner tobutton control-clone">
						<form action="" id="frm-to-empresa" class="cleaner">
							<input type="text" class="myinput style1 cleaner txt-nombre" placeholder="Nombre de empresa" name="empresa" id="empresa">
							<div class="tobut cleaner">
								<button type="submit" class="mybut ingresar cleaner submit" data-loading-text="Enviando...">Ingresar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</article>
		<aside class="cleaner creditos-oculto">
			<!-- Aqui se clonará el footer -->			
		</aside>
	</section>

	<section id="second" class="cleaner container-fluid">
		<div class="capa cleaner"></div>		
		<div class="row-fluid cleaner contenedor">
			<div class="row-fluid cleaner">
				<div class="span12 cleaner">
					<div class="logo cleaner">
						<img src="imagenes/general/logo_white.png" alt="Interconsult" title="Interconsult">
					</div>					
				</div>
			</div>
			<div class="row-fluid cleaner textoeditar">
				<div class="span12 cleaner">
					<div class="cleaner">
						<h3>Bienvenido</h3>
					</div>
					<div class="nombre">
						<h4></h4>
					</div>
					<div class="linea cleaner"></div>
					<div class="descripcion cleaner">
						<h5>We are a close-knit team of thinkers, designers and developers crafting the web, worldwide.</h5>
					</div>
					<div class="cleaner flecha">
						<a href="javascript:void(0)" id="show-third"><i class="myicon-arrow-bottom"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="third" class="cleaner container-fluid" style="display:none">		
		<?php include 'includes/header_home.php' ?>
		<article class="row-fluid cleaner contenedor">
			<div class="span12 cleaner">
				<div class="saludo row-fluid cleaner">
					<div class="span12 cleaner">
						<div class="cleaner nombre">
							<em></em><span>, escoge</span>
						</div>
						<div class="cleaner">
							<h6>el servicio que necesites</h6>
						</div>
					</div>
				</div>
				<div class="listaservicios cleaner row-fluid">
					<div class="span12 cleaner">
						<div class="opciones cleaner">
							<!-- [1] Opcion 1 -->
							<div id="op1" class="opcion cleaner myhover-toico">
								<a href="servicio_detalle.php" class="cleaner">
									<!-- [1.1] Imágen de opción -->
									<div class="circulo cleaner" style="opacity: 0">
										<img src="imagenes/servicios/1.jpg" title="servicios" alt="servicios">
									</div>
									<div class="graficas cleaner">
										<!-- [1.2] Icono -->
										<div class="icono cleaner"><i class="myicon-select-service animated"style="opacity: 0"></i></div>
										<!-- [1.3] Lineas -->
										<div class="secciones cleaner">
											<div class="cleaner"></div>
											<div class="cleaner" style="width: 0%"></div>
										</div>
									</div>
									<div class="titulito cleaner" style="opacity: 0">
										<em>Visa de trabajo</em>
									</div>
								</a>
							</div>
							<!-- Opcion 2 -->
							<div id="op2" class="opcion cleaner myhover-toico">
								<a href="servicio_detalle.php" class="cleaner">
									<!-- [2.1] Imágen de opción -->
									<div class="circulo cleaner" style="opacity:0">
										<img src="imagenes/servicios/2.jpg" title="servicios" alt="servicios">
									</div>
									<div class="graficas cleaner">
										<!-- [2.2] Icono -->
										<div class="icono cleaner"><i class="myicon-select-service animated" style="opacity: 0"></i></div>
										<!-- [2.3] Lineas -->
										<div class="secciones cleaner">
											<div class="cleaner" style="width: 0%"></div>
											<div class="cleaner" style="width: 0%"></div>
										</div>
									</div>
									<div class="titulito cleaner" style="opacity: 0">
										<em>Visa de familia</em>
									</div>
								</a>
							</div>
							<div id="op3" class="opcion cleaner myhover-toico">
								<a href="servicio_detalle.php" class="cleaner">
									<!-- [3.1] Imágen de opción -->
									<div class="circulo cleaner" style="opacity:0">
										<img src="imagenes/servicios/3.jpg" title="servicios" alt="servicios">
									</div>
									<div class="graficas cleaner">
										<!-- [3.2] Icono -->
										<div class="icono cleaner"><i class="myicon-select-service animated" style="opacity: 0"></i></div>
										<!-- [3.2] Lineas -->
										<div class="secciones cleaner">
											<div class="cleaner" style="width: 0%"></div>
											<div class="cleaner" style="width: 0%"></div>
										</div>										
									</div>
									<div class="titulito cleaner" style="opacity: 0">
										<em>Prórroga de residencia</em>
									</div>
								</a>
							</div>
							<div id="op4" class="opcion cleaner myhover-toico">
								<a href="servicio_detalle.php" class="cleaner">
									<!-- [4.1] Imagen de opcion -->
									<div class="circulo cleaner" style="opacity:0">
										<img src="imagenes/servicios/4.jpg" title="servicios" alt="servicios">
									</div>
									<div class="graficas cleaner">
										<!-- [4.2] Icono -->
										<div class="icono cleaner"><i class="myicon-select-service animated" style="opacity:0"></i></div>
										<!-- [4.3] Lineas -->
										<div class="secciones cleaner">
											<div class="cleaner" style="width: 0%"></div>
											<div class="cleaner" style="width: 0%"></div>
										</div>
									</div>
									<div class="titulito cleaner" style="opacity: 0">
										<em>Otros tipos de visas</em>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="main-button row-fluid cleaner">
					<div class="span4 cleaner">&nbsp;</div>
					<div class="span4 cleaner"><a href="servicios.php" class="cleaner mybut but-servicios">ver más servicios</a></div>
					<div class="span4 cleaner">&nbsp;</div>
				</div>
			</div>
		</article>
		<?php include 'includes/footer.php' ?>
	</section>
	
	<!-- ===================================
	[[Plugins que van en todas las páginas]]
	==================================== -->
	<script src="js/general/jquery.1.9.1.min.js"></script>
	<script src="js/general/bootstrap.min.js"></script>	
	<!-- [Jquery Validations] -->
	<script src="js/general/jquery.validate.js"></script>
	<!-- [Placeholder] -->
	<script src="js/general/jquery.placeholder.js"></script>
	<!-- [Loading Page] -->
	<script src="js/general/jquery.jpreloader.js"></script>
	<!-- [Font responsive] -->
	<script src="js/general/jquery.fiftext.js"></script>
	<!-- {Modernizr} -->
	<script src="js/general/jquery.modernizr.js"></script>
	<!-- [My App General] -->
	<script src="js/general/app.general.js"></script>
	<script src="js/general/app.readmore.js"></script>
	<script src="http://ashishblog.com/ash/source/jquery.cookie.js"></script>
	<!-- ==========================================
	[[fin de Plugins que van en todas las páginas]]
	=========================================== -->

	<!-- ==================================
	[[Plugins que van solo en esta página]]
	=================================== -->
	<!-- {Flexslider responsive} -->
	<script src="js/jquery.flexslider.js"></script>	
	<!-- {Grids Photos} -->
	<script src="js/jquery.imagesloaded.js"></script>
	<script src="js/jquery.wookmark.js"></script>
	<!-- {Inview Content} -->
	<script src="js/jquery.inview.js"></script>
	<script src="js/jquery.transit.js"></script>
	<script src="js/app.inview.js"></script>
	<!-- {Transition} -->
	<script type="text/javascript" src="js/jquery.easing.js"></script>
	<!-- {My validations} -->
	<script type="text/javascript" src="js/app.validations.js"></script>
	<!-- {BG Parallax} -->
	<script type="text/javascript" src="js/jquery.parallax.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll.min.js"></script>
	<script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
	<!-- =========================================
	[[fin de Plugins que van solo en esta página]]
	========================================== -->
	<script>
		$(window).on({
			load: function(){
				var w = $(window).width();
				var h = $(window).height();				
				var topContent = $('#first #top').height();				
				var bottomContent = h - topContent;
				var totalfirstContent = topContent + bottomContent;

				if(w > 780 && h>600){
					$('body').addClass('overflow');
					$('#first').height(h);
					$('#second').height(h);
					$('#first #bottom').height(bottomContent);
					$('html,body').css({						
						height: h
					});
				}else{
					$('body').removeClass('overflow');
					$('#first').height(totalfirstContent);
					$('#second').height(h);
					$('#first #bottom').css('height','auto');
					$('html,body').css({						
						height: h
					});

					$('.circulo, .titulito ').removeAttr('data-start data-delay data-finish data-transit style');
				}				
			},
			resize: function(){
				var w = $(window).width();
				var h = $(window).height();				
				var topContent = $('#first #top').height();				
				var bottomContent = h - topContent;
				var totalfirstContent = topContent + bottomContent;

				if(w > 780 && h>600){
					$('body').addClass('overflow');				
					$('#first').height(h);
					$('#second').height(h);
					$('#first #bottom').height(bottomContent);
					$('html,body').css({						
						height: h
					});
				}else{
					$('body').removeClass('overflow');
					$('#first').height(totalfirstContent);
					$('#second').height(h);
					$('#first #bottom').css('height','auto');
					$('html,body').css({						
						height: h
					});
					
					$('.circulo, .titulito ').removeAttr('data-start data-delay data-finish data-transit style');

				}
			}
		});

		
		$(document).ready(function(){			
			var valorCookie = $.cookie('valorCookie');
			if(valorCookie != ""){
				alert('Ya tenemos nombre; y es' + valorCookie);

			}else{

			}



			$('.banderas a').hover(
				function(){
					$('.banderas a').addClass('disabled')
					$(this).removeClass('disabled');
					console.log('asdsad')
				},
				function(){
					$('.banderas a').removeClass('disabled')
					$(this).removeClass('disabled');	
				}
			);
			
			$('.opciones .opcion a').hover(
				function(){
					$('.opciones .opcion a').addClass('disabled')
					$(this).removeClass('disabled');
					console.log('asdsad')
				},
				function(){
					$('.opciones .opcion a').removeClass('disabled')
					$(this).removeClass('disabled');	
				}
			);

			// Clonar footer
			var footer = $('#piedepagina').clone();
			footer.appendTo('.creditos-oculto');

			$('.creditos-oculto').on({
				'mouseover': function(){
					$(this).addClass('ver');
				},
				'mouseout' : function(){
					$(this).removeClass('ver');
				}
			})

			// Parallax a la vista de saludo
			$('#second').parallax("50%", 0.1);

			// Clonar nombre
			$('#natural').keyup(function(){
				if($(this).val()!=""){
					var txtclonado = $('#natural').val();
            		$('.textoeditar .nombre h4').html(txtclonado);
            		$('.saludo .nombre em').html(txtclonado);
				}
			})
			
			$('#empresa').keyup(function(){
				if($(this).val()!=""){
					var txtclonado = $('#empresa').val();
            		$('.textoeditar .nombre h4').html('Empresa '+ txtclonado);
            		$('.saludo .nombre em').html(txtclonado); 
				}
			});

				

				

			// Ver la tercera parte
			$('#show-third').on('click',function(e){
				e.preventDefault();

				$('#third').show();
				var $mytop = $('#third');
				$('html, body').stop().animate({
					scrollTop: $mytop.offset().top
				},1400, 'swing');

				servicio1();
			});			
			
			$("h2").fitText(2, { minFontSize: '20px', maxFontSize: '34px' });

			$('#slider-text').flexslider({
				directionNav: false,
				animationLoop: true,
				slideshow: true,
			   	slideshowSpeed: 5000
			});
		});	
		
		
		
		function servicio1(){
			var bolita1 = $('#op1 .icono i');			
			var titulo1 = $('#op1 .titulito');
			var circulo1 = $('#op1 .circulo');			
			var raya1_der = $('#op1 .secciones>div:last-child');

			setTimeout(function(){
				$(bolita1).animate({
					opacity: '1'
				}, 0, function(){
					$(titulo1).animate({
						opacity : '1'
					}, 0, function(){
						$(circulo1).animate({
							opacity: '1'
						}, 0, function(){
							$(raya1_der).animate({
								width : '50%'
							}, 500, servicio2)
						})
					})
				})
			}, 2000)

			$('#op1 a').hover(
	            function(){ $(this).find('i').addClass('bounceIn') },
	            function(){ $(this).find('i').removeClass('bounceIn') }
	        );
		}	
		
		function servicio2(){
			var bolita2 = $('#op2 .icono i');			
			var titulo2 = $('#op2 .titulito');
			var circulo2 = $('#op2 .circulo');
			var raya2_izq = $('#op2 .secciones>div:first-child');
			var raya2_der = $('#op2 .secciones>div:last-child');		
	
			$(raya2_izq).animate({
				width : '50%'
			}, 500, function(){
				$(bolita2).delay(500).animate({
					opacity: '1'
				}, 0, function(){
					$(titulo2).animate({
						opacity : '1'
					}, 0, function(){
						$(circulo2).animate({
							opacity: '1'
						}, 0, function(){
							$(raya2_der).animate({
								width : '50%'
							}, 500, servicio3)
						})
					})
				})
			})

			$('#op2 a').hover(
	            function(){ $(this).find('i').addClass('bounceIn') },
	            function(){ $(this).find('i').removeClass('bounceIn') }
	        );
		}	

		function servicio3(){
			var bolita3 = $('#op3 .icono i');			
			var titulo3 = $('#op3 .titulito');
			var circulo3 = $('#op3 .circulo');
			var raya3_izq = $('#op3 .secciones>div:first-child');
			var raya3_der = $('#op3 .secciones>div:last-child');
			
			var raya4_izq = $('#op4 .secciones>div:first-child');					
	
			$(raya3_izq).animate({
				width : '50%'
			}, 500, function(){
				$(bolita3).delay(500).animate({
					opacity: '1'
				}, 0, function(){
					$(titulo3).animate({
						opacity : '1'
					}, 0, function(){
						$(circulo3).animate({
							opacity: '1'
						}, 0, function(){
							$(raya3_der).animate({
								width : '50%'
							}, 500, servicio4)
						})
					})
				})
			})

			$('#op3 a').hover(
	            function(){ $(this).find('i').addClass('bounceIn') },
	            function(){ $(this).find('i').removeClass('bounceIn') }
	        );
		}

		function servicio4(){
			var bolita4 = $('#op4 .icono i');			
			var titulo4 = $('#op4 .titulito');
			var circulo4 = $('#op4 .circulo');
			var raya4_izq = $('#op4 .secciones>div:first-child');			
	
			$(raya4_izq).animate({
				width : '50%'
			}, 500, function(){
				$(bolita4).delay(500).animate({
					opacity: '1'
				}, 0, function(){
					$(titulo4).animate({
						opacity : '1'
					}, 0, function(){
						$(circulo4).animate({
							opacity: '1'
						}, 0, function(){
							$(raya4_der).animate({
								width : '50%'
							}, 500)
						})
					})
				})
			})

			$('#op4 a').hover(
	            function(){ $(this).find('i').addClass('bounceIn') },
	            function(){ $(this).find('i').removeClass('bounceIn') }
	        );
		}	
	</script>	
	</body>
</html>
