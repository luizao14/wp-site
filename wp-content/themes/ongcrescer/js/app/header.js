window.onload = function(){ 
$(document).ready(function (){
$('#dash').click(function(){
$('#menu').toggle();
});
});

jQuery(document).ready(function(){
		jQuery('#link-login').click( function(){
			var dados = $(this).attr('href');
			jQuery.ajax({
				url: "wp-autentication.php?action=login",
                                type: "GET",
                                data: dados,
                
                beforeSend: function () {
                    $("#modal-login").html("<div class='load' style='position: absolute; margin-top: 6em; width: 100%;' ><div style=' margin: 0 auto; width: fit-content;'> <i class='fa fa-cog fa-spin fa-5x fa-fw'></i><span class='sr-only'>Loading...</span></div> </div>");
                    },
                                
                success: function(data)
                {
                    $("#modal-login").html(data);
                    
                
                }
                    
			});
			
			return false;
		});
	});
	
jQuery(document).ready(function(){
		jQuery('#link-cadastro').click( function(){
			var dados = $(this).attr('href');
			jQuery.ajax({
				url: "wp-autentication.php?action=register",
                                type: "GET",
                                data: dados,
                
                beforeSend: function () {
                    $("#modal-login").html("<div class='load' style='position: absolute; margin-top: 6em; width: 100%;' ><div style=' margin: 0 auto; width: fit-content;'> <i class='fa fa-cog fa-spin fa-5x fa-fw'></i><span class='sr-only'>Loading...</span></div> </div>");
                    },
                                
                success: function(data)
                {
                    $("#modal-login").html(data);
                    
                
                }
                    
			});
			
			return false;
		});
	});
	
	jQuery(document).ready(function(){
		jQuery('#formlogin').submit( function(){
			var form = $(this);
			var dados = form.serialize();
			jQuery.ajax({
				url: "wp-autentication.php?action=login",
                                type: "POST",
                                data: dados,
                
                beforeSend: function () {
                    $("#modal-login").html("<div class='load' style='position: absolute; margin-top: 6em; width: 100%;' ><div style=' margin: 0 auto; width: fit-content;'> <i class='fa fa-cog fa-spin fa-5x fa-fw'></i><span class='sr-only'>Loading...</span></div> </div>");
                    },
                                
                success: function(data)
                {
                    $("#modal-login").html(data);
                    
                
                }
                    
			});
			
			return false;
		});
	});
	

};