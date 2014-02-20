$(window).on({
	load: function(){		
		// [x] Cargador de página de inicio
		var timer;
		$('body').jpreLoader({
			splashID: "#jSplash",
			showPercentage: false,
			autoClose: true,
			closeBtnText: 'Inicio'
		}, function() {				
			clearInterval(timer);
			$('#logo img').animate({"opacity":'1'}, 800, function() {
				$('.bg-noresponsive').animate({"opacity":'1'},1200);
				$('footer').animate({"opacity":'1'},3200);			

			});
		});
	},
	resize: function(){
		var w = $(window).width();
		if(w>600){
			$('#menu>nav').removeAttr('style');
		}
	}
})

;(function($,undefined){
	"use strict";
	$(document).one('ready', iniciar);

	// [1] {Función} Iniciar todo el contenido
	function iniciar(){

		// Cargar Google Maps
		loadGmaps();
		
		// [x] Menu normal y responsivo
		$(document).bind('click', function(e) {	
			var w = $(window).width();
			
			if(w < 600) {
				var	menu 			= $('#menu>nav');
				var click 			= $(e.target);
				
				if (click.hasClass("menu-hidden")){
					menu.slideToggle(500);
					$('.menu-hidden').addClass('active')
				}else{
					menu.fadeOut('slow');
					$('.menu-hidden').removeClass('active')
				}
			}
		});	

		// [x] Animación de iconos
		$('.play, .toplayvideo').hover(
            function(){ $(this).find('i').addClass('bounceIn') },
            function(){ $(this).find('i').removeClass('bounceIn') }
        );

        // [x] Limitar textos por clases         
        myReadmore(2, 'saludo');

        // satisfaccion
        myReadmore(500, 'satisfaction');

        // Servicio Detalle
        myReadmore(100, 'servicio-detalle-texto');

        // [x] Placeholder IE
		$('input, textarea').placeholder();
	}

	// [2] {Función} Limitación de textos
	function myReadmore(textoMax, claseContenedor){		
		var contenedor = $('.'+claseContenedor+'.text-limited p');		
		$(contenedor).each(function(){
            if($(this).text().length > textoMax){         
                var texto=$(this).text().substring(0,textoMax);
                var indiceUltimoEspacio= texto.lastIndexOf('');
                texto=texto.substring(0,indiceUltimoEspacio)+'<span class="points">...</span>';         
                var primeraParte = '<span class="text-visible">' + texto + '</span>';
                var segundaParte = '<span class="text-hidden">' + $(this).text().substring(indiceUltimoEspacio,$(this).text().length) + '</span>';
                $(this).html(primeraParte + segundaParte);
                $(this).after('<em class="cleaner btn-text-limited"><a href="javascript:void(0)">Leer todo</a></em>');  
            };
        });

       	$('.'+claseContenedor+ ' .btn-text-limited').on('click',function(e){
            e.preventDefault();
            if($(this).prev().find('.text-hidden').css('display') == 'none'){
                $(this).prev().find('.text-hidden').fadeIn('slow');
                $(this).prev().find('.points').css('display','none');
                $(this).text('Leer menos');
            }else{
                $(this).prev().find('.text-hidden').fadeOut('slow');
                $(this).prev().find('.points').fadeIn('slow');
                $(this).html('Leer todo');
            };
        });
	}


	// [3] {Función} Comprobar el navegador
	function verNavegador(){		
      	var is_safari = navigator.userAgent.toLowerCase().indexOf('safari/') > -1;
        var is_chrome= navigator.userAgent.toLowerCase().indexOf('chrome/') > -1;
        var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox/') > -1;
        var is_ie = navigator.userAgent.toLowerCase().indexOf('msie ') > -1;
	
	    // Servicio detalle
	    if ( is_firefox){
	    	$('#slider .izq>div').addClass('moz');
        }else{
        	$('#slider>.izq>div').removeClass('moz');	        	
        }
	}
})(jQuery);