<!DOCTYPE html>
<html>
  <head>
    <title>台大投票系統管理後台</title>
    <meta charset='utf8' />
    <?php echo $template['metadata']; ?>
    
    <!-- Use Google CDN for jQuery and jQuery UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
    
    <!-- Google Font and style definitions -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/whitelabel/style.css">
    
    <!-- include the skins (change to dark if you like) -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/whitelabel/light/theme.css" id="themestyle">
    
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    
    <!-- some basic functions -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/functions.js"></script>
    
    <!-- all Third Party Plugins and Whitelabel Plugins -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/plugins.js"></script>
    
    <!-- Whitelabel Plugins -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Alert.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Dialog.js"></script>
    <script src="<?php echo base_url();?>assets/js/whitelabel/wl_Form.js"></script>
    
    <!-- configuration to overwrite settings -->
    <script src="<?php echo base_url();?>assets/js/whitelabel/config.js"></script>
    
  </head>
  
  <?php echo $template['body']; ?>
  
</html>
