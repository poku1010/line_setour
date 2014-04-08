<!DOCTYPE html>
<html>
  <head>
    <title>奈奈救台灣管理後台</title>
    <meta charset='utf8' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php echo $template['metadata']; ?>
    
    <!-- Use Google CDN for jQuery and jQuery UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
    
    <!-- Google Font and style definitions -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/whitelabel/style.css">
    
    <!-- include the skins (change to dark if you like) -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/whitelabel/light/theme.css" id="themestyle">
    
    <!-- tag-it plugin -->
    <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css">
    <link href="<?php echo base_url();?>assets/css/jquery.tagit.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    
    <!-- some basic functions -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/functions.js"></script>
    
    <!-- all Third Party Plugins and Whitelabel Plugins -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/plugins.js"></script>
    
    
    <!-- configuration to overwrite settings -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/config.js"></script>
    
    <!-- Whitelabel Plugins -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/editor.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/calendar.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/flot.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/elfinder.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/datatables.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Alert.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Autocomplete.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Breadcrumb.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Calendar.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Chart.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Color.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Date.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Editor.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_File.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Dialog.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Form.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Gallery.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Multiselect.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Number.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Password.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Slider.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Store.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Time.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Valid.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Widget.js"></script>
    
    <!-- the script which handles all the access to plugins etc... -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/script.js"></script>
    
    <!-- tag-it plugin -->
    <script src="<?php echo base_url();?>assets/js/tag-it.js" type="text/javascript" charset="utf-8"></script>
    

  </head>
  
  <body>
    <div id="pageoptions">
      <ul>
        <li><a href="<?php echo base_url();?>admin/logout">登出</a></li>
      </ul>
    </div>
  
    <header>
      <div id="logo">
        <a href="<?php echo base_url();?>admin/dashboard">奈奈救台灣管理後台</a>
      </div>
    </header>
  
    <nav>
      <ul id="nav">
        <li class="i_create_write"><a href="<?php echo base_url();?>admin/post_add"><span>新增文章</span></a></li>
        <li class="i_table"><a href="<?php echo base_url();?>admin/post_manage"><span>文章管理</span></a></li>
      </ul>
    </nav>

    <?php echo $template['body']; ?>
    <footer>© SETour. By <a href="http://facebook.com/poku1010" target="_blank">Poku Ku</a></footer>
  </body>
</html>
