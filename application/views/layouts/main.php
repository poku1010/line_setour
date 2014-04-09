<!DOCTYPE html>
<html>
  <head>
     
    <title>奈奈救台灣</title>
    <?php  if ( $this->uri->segment(1)=='posts' ){  ?>
      <meta property="og:title"  content="<?php echo $post['post_quote'] ?>" /> 
<!--       <meta property="og:description"  content="<?php echo $post['post_scenario'] ?>" />  -->
      <meta property="og:description"  content="<?php echo mb_substr( $post['post_content'], 0, 100, "utf-8") . '...'; ?>" /> 

      <meta property="og:image"  content="<?php echo base_url().'assets/upload/'.$post['post_coverphoto_url']; ?>" /> 
    <?php } else { ?>
      <meta property="og:title"  content="一個好方法，降低你與家人間的溝通成本" /> 
      <meta property="og:description"  content="溝通要用對方法！溝通，從訴說故事開始。不那麼急著尋求認同與肯定，不那麼快切入正反兩極。對於愛著我們的長輩，溝通，自充滿愛的故事開啟。溝通，從傳遞故事開始。說一個故事，然後讓這個故事傳出去。溝通，給愛著我們的長輩充滿愛的故事，讓他們把愛也傳遞出去。" /> 
      <meta property="og:image"  content="<?php echo base_url().'assets/img/main_cover.jpg'; ?>" /> 
    <?php } ?>
      
    <meta property="og:site_name" content="奈奈救台灣" />
    
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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-38360136-2', 'setour.org');
      ga('send', 'pageview');
    
    </script>
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
<!--               <li><a href="#">關於我們</a></li> -->
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
    .share_button img{
      width: 200px;
    }
  
  </style>

  
  <div id="footer">
    <div class="container">
      <p class="text-muted">© SETour. By <a href="http://facebook.com/poku1010" target="_blank">Poku Ku</a></p>
    </div>
  </div>
  
</html>
