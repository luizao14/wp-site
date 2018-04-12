jQuery(document).ready(function(){
		jQuery('#form-fale-conosco').submit( function(){
                        var form = $(this);
			var dados = form.serialize();
			jQuery.ajax({
				url: "mensagem.php",
                                type: "POST",
                                data: dados,
                                
                beforeSend: function (data) {
                    $("#mensagem-faleConosco").html("Carregando...");
                    },
                                
                success: function(data)
                {
                    var mostrar = $("#mensagem-faleConosco");
                    mostrar.html(data);
                    form.trigger('reset');
                    
                }
                    
			});
			
			return false;
		});
	});