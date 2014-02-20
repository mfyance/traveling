;(function($,undefined){
	
	var app = {
		validar: function(){
			
			// {New Method}
			$.validator.addMethod(
				"caracteres",
				function(value, element, regexp) {
					var re = new RegExp(regexp);
					return this.optional(element) || re.test(value);
				}
			);

			// [Cloned]			
			$("#nombres").keyup(function(){
				if($(this).val()==""){
					$(this).closest('.control-clone').find('span.correcto').css('display','none');
				}else{
					$(this).closest('.control-clone').find('span.correcto').css('display','block');
					var txtclonado = $(this).val();            		
            		$(this).closest('.control-clone').find('.name-cloned').html(txtclonado);
				}
			});
			$("#apellidos").keyup(function(){
				if($(this).val()==""){
					$(this).closest('.control-clone').find('span.correcto').css('display','none');
				}else{
					$(this).closest('.control-clone').find('span.correcto').css('display','block');
					var txtclonado = $(this).val();            		
            		$(this).closest('.control-clone').find('.lastname-cloned').html(txtclonado);
				}
			});

			$("#empresa").keyup(function(){
				if($(this).val()==""){
					$(this).closest('.control-clone').find('span.correcto').css('display','none');
				}else{
					$(this).closest('.control-clone').find('span.correcto').css('display','block');
					var txtclonado = $(this).val();            		
            		$(this).closest('.control-clone').find('.empresa-cloned').html(txtclonado);
				}
			});

			// No Permitir Cortar,Copiar, Pegar en determinados inputs
			$('#password').on('cut copy paste', function(e){
				e.preventDefault();
			});


			// {index.php}			
			// [Form Persona Natural]
			$('#frm-to-natural').validate({
				rules: {
					natural: {
						required: true,
						caracteres:'^[a-zA-Z\u00E1\u00E9\u00ED\u00F3\u00FA \u00C1\u00C9\u00CD\u00D3\u00DA \u00F1\u00D1]+$'
					}
				},
				messages: {				
					natural: {
						required: 'requerido',
						caracteres:'requerido'
					}
				},		
				highlight: function(element) {
					$(element)
						.closest('.control-clone').removeClass('success').addClass('error');
				},
				success: function(element) {
					element.addClass('valid')
						.closest('.control-clone').removeClass('error').addClass('success')					
				},		
				submitHandler: function(){
					var $btn = $('#frm-to-natural').find('.submit');
					$btn.button('loading');			

					$('body').removeClass('overflow')
					
					$("h3").fitText(1.4, { minFontSize: '30px', maxFontSize: '80px' });
					$("h4").fitText(1.4, { minFontSize: '22px', maxFontSize: '30px' });
					$("h5").fitText(1.4, { minFontSize: '18px', maxFontSize: '22px' });

					$('#second').addClass('parallax');

					$('.creditos-oculto').remove();

					setTimeout(function(){
						$('#first').animate({
							top : '-300%'
						}, 1500)
					},1000);					

					$.cookie('valorCookie', $('#natural').val(), { expires: 7 });
					console.log( $('#frm-to-natural').serialize() );
				}
			});
			// [Form Empresa]
			$('#frm-to-empresa').validate({
				rules: {
					empresa: {
						required: true
					}
				},
				messages: {				
					empresa: {
						required: 'requerido'						
					}
				},		
				highlight: function(element) {
					$(element)
						.closest('.control-clone').removeClass('success').addClass('error');
				},
				success: function(element) {
					element.addClass('valid')
						.closest('.control-clone').removeClass('error').addClass('success')					
				},		
				submitHandler: function(){
					var $btn = $('#frm-to-empresa').find('.submit');
					$btn.button('loading');

					$('body').removeClass('overflow')

					$("h3").fitText(1.4, { minFontSize: '30px', maxFontSize: '80px' });
					$("h4").fitText(1.4, { minFontSize: '22px', maxFontSize: '30px' });
					$("h5").fitText(1.4, { minFontSize: '18px', maxFontSize: '22px' });					

					$('#second').addClass('parallax');

					$('.creditos-oculto').remove();

					setTimeout(function(){
						$('#first').animate({
							top : '-300%'
						}, 1500)
					},1000);

					$.cookie('valorCookie', $('#empresa').val(), { expires: 7 });
					console.log( $('#frm-to-empresa').serialize() );
				}
			});
		}
	}
	$(document).on('ready', app.validar);
})(jQuery);