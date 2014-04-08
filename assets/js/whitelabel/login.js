$(document).ready(function() {
						   
						   
	var $body = $('body'),
		$content = $('#content'),
		$form = $content.find('#loginform');
	
		
		//IE doen't like that fadein
		if(!$.browser.msie) $body.fadeTo(0,0.0).delay(500).fadeTo(1000, 1);
		
		
		$("input").uniform();
		

		$form.wl_Form({
			status:false,
			onBeforeSubmit: function(data){
				$form.wl_Form('set','sent',false);
				if(data.username || data.password){
					//location.href="dashboard";
					location.href="<?php echo base_url();?>admin/dashboard";
				}else{
					$.wl_Alert('帳號或密碼忘記輸入囉!','info','#content');
				}
				return false;
			}							  
		});
		
		
});
