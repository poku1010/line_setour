<!DOCTYPE html>
<html>
	<head>
		<title>奈奈救台灣</title>
    <meta charset='utf8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
		<?php echo $template['metadata']; ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
		<link href="<?php echo base_url() ?>/assets/css/navbar.css" rel="stylesheet">
		
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/js/jquery-1.10.2.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>      
	</head>
	
	<body>
    <div class='container'>
      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>">奈奈救台灣</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">關於我們</a></li>
              <li><a href="mailto:hi@setour.org">聯絡我們</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
      <?php echo $template['body']; ?>
    </div>
	</body>
	
	<style>
    body{
      font-family: 微軟正黑體;
    }
    .share_button{
      text-align: center;
    }
  
  </style>

	
	<div id="footer">
    <div class="container">
      <p class="text-muted">© SETour</p>
    </div>
  </div>
  
</html>
