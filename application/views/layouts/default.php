<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $template['title']; ?></title>
		<?php echo $template['metadata']; ?>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>      
	</head>
	<body>
		<h1><?php echo $template['title']; ?></h1>
		<?php echo $template['body']; ?>
	</body>
</html>
