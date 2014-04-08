<!-- Main component for posts-->
<div class="jumbotron">
  <div class="share_button">
    <p>
      <a href="http://line.naver.jp/R/msg/text/?<?php echo $post['post_quote'] ?>%20%0a<?php echo base_url().'posts/'.$post['post_id']; ?>">
      <img src="<?php echo base_url() ?>assets/img/linebutton_290x44.png"></a>
    </p>
  </div>
  <h2><?php echo $post['post_title']; ?></h2>
  <div class="post_coverphoto_url"><img src="<?php echo base_url().'assets/upload/thumbnails/'.$post['post_coverphoto_url']; ?>" /></div>
  <hr>
  
  <div class="post_content">
    <pre><?php echo $post['post_content']; ?></pre>
  </div>
  
  <hr>
  <div class="post_source"> <small> <?php echo $post['post_source']; ?> </small> </div>
  <hr>
  
  <div class="share_button">
    <p>
      <a href="http://line.naver.jp/R/msg/text/?<?php echo $post['post_quote'] ?>%20%0a<?php echo base_url().'posts/'.$post['post_id']; ?>">
      <img src="<?php echo base_url() ?>assets/img/linebutton_290x44.png"></a>
    </p>
  </div>
</div>

<style>
  .post_coverphoto_url img{
    width: 100%;
  }
  .post_content pre{
    font-size: 16px;
  }
</style>
