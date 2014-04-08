<!-- the script which handles all the access to plugins etc... -->
<script type="text/javascript">

$(document).ready(function() {
               
               
  var $body = $('body'),
    $content = $('#content'),
    $form = $content.find('#loginform');
  
    
    //IE doen't like that fadein
    if(!$.browser.msie) $body.fadeTo(0,0.0).delay(500).fadeTo(1000, 1);
    
    
    $("input").uniform();
    
});

</script>

<body id="login">

  <header>
    <div id="logo">
      <a href="<?php echo base_url();?>admin/index">奈奈救台灣管理後台</a>
    </div>
  </header>
  <section id="content">
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
      <fieldset>
        <section><label for="username">帳號 </label>
          <div><input type="text" id="username" name="username" autofocus></div>
        </section>
        <section><label for="password">密碼 </label>
          <div>
            <input type="password" id="password" name="password">
          </div>
        </section>
        <section>
          <div><button class="fr submit">登入</button></div>
        </section>
      </fieldset>
    </form>
  </section>
  <footer>© SETour. By <a href="http://facebook.com/poku1010" target="_blank">Poku Ku</a></footer>
</body>
