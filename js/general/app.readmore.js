;(function($, undefined){
	"use strict";

	$.fn.myreadmore = function(options){
		


		/* this aquí es un objeto jQuery */
		this.each(function(indice, elem){
			var longitud= 50;         
            if($(this).text().length > longitud){         
                var texto=$(this).text().substring(0,longitud);
                var indiceUltimoEspacio= texto.lastIndexOf('');
                texto=texto.substring(0,indiceUltimoEspacio) +'<span class="points">...</span>';         
                var primeraParte = '<span class="text-visible">' + texto + '</span>';
                var segundaParte = '<span class="text-hidden">' + $(this).text().substring(indiceUltimoEspacio,$(this).text().length - 1) + '</span>';         
                $(this).html(primeraParte + segundaParte);
                $(this).after('<em class="cleaner btn-text-limited"><a href="javascript:void(0)">leer más</a></em>');  
            };
		});
	}

})(jQuery);