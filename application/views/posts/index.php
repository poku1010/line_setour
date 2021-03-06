<!-- Main component for posts-->
<div class="jumbotron">
  <div class="share_button">
    <p>
      <a href="http://line.naver.jp/R/msg/text/?<?php echo $post['post_quote'] ?>%20%0a<?php echo base_url().'posts/'.$post['post_id']; ?>" target="_blank">
      <img src="<?php echo base_url() ?>assets/img/linebutton_290x44.png"></a>
    </p>
    <p>
      <a href="http://m.facebook.com/sharer.php?u=<?php echo base_url().'posts/'.$post['post_id']; ?>" target="_blank">
      <img src="<?php echo base_url() ?>assets/img/button-fb-share.png"></a>
    </p>
  </div>
  <h3><?php echo $post['post_title']; ?></h3>
  <?php if($post['post_coverphoto_url']!='n'){ ?>
  <div class="post_coverphoto_url"><img src="<?php echo base_url().'assets/upload/'.$post['post_coverphoto_url']; ?>" /></div>
  <?php } ?>
  <hr>
  
  <div class="post_content">
    <pre><?php echo $post['post_content']; ?></pre>
  </div>
  
  <hr>
  <div class="post_source"> <small> <?php echo $post['post_source']; ?> </small> </div>
  <hr>
  
  <div class="share_button">
    <p>
      <a href="http://line.naver.jp/R/msg/text/?<?php echo $post['post_quote'] ?>%20%0a<?php echo base_url().'posts/'.$post['post_id']; ?>" target="_blank">
      <img src="<?php echo base_url() ?>assets/img/linebutton_290x44.png"></a>
    </p>
    <p>
      <a href="http://m.facebook.com/sharer.php?u=<?php echo base_url().'posts/'.$post['post_id']; ?>" target="_blank">
      <img src="<?php echo base_url() ?>assets/img/button-fb-share.png"></a>
    </p>
  </div>
</div>

<style>
  .post_coverphoto_url img{
    width: 100%;
  }
  .post_content pre{
    font-size: 20px;
  }
</style>
