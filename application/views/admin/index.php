<!-- the script which handles all the access to plugins etc... -->
<script type="text/javascript">

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

</script>

<body id="login">

  <header>
    <div id="logo">
      <a href="<?php echo base_url();?>admin/index">台大投票系統管理後台</a>
    </div>
  </header>
  <section id="content">
    <form action="submit.php" id="loginform">
      <fieldset>
        <section><label for="username">帳號 </label>
          <div><input type="text" id="username" name="username" autofocus></div>
        </section>
        <section><label for="password">密碼 </label>
          <div>
            <input type="password" id="password" name="password">
          </div>
          <!--div>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember" class="checkbox">記住我</label>
          </div-->
        </section>
        <section>
          <div><button class="fr submit">登入</button></div>
        </section>
      </fieldset>
    </form>
  </section>
  <footer>Copyright by ntu.edu.tw 2014</footer>
</body>
