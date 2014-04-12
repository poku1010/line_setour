<!-- Main component for index -->
<div class="jumbotron">
  <h3>《緣起》</h3>
  <hr>
  <p><b>溝通要用對方法！</b></p>
  <p>溝通，從訴說故事開始。不那麼急著尋求認同與肯定，不那麼快切入正反兩極。對於愛著我們的長輩，溝通，自充滿愛的故事開啟。</p>
  <p>溝通，從傳遞故事開始。說一個故事，然後讓這個故事傳出去。溝通，給愛著我們的長輩充滿愛的故事，讓他們把愛也傳遞出去。</p>
</div>

<div class="jumbotron">
  <h3>《說明》</h3>
  <hr>
  <p><b>一鍵分享！</b></p>
  <hr>
  <p>〈心有靈犀法〉</p>
  <p>閱讀這些故事，想想和心中的哪一位長輩產生共鳴，一鍵分享，開展對話。</p>
  <hr>
  <p>〈對症下藥法〉</p>
  <p>長輩也許表達了一些不滿，一些不耐，或者一些不以為然。如果發現以下情境出現，一鍵分享，寄送真情。</p>
  <hr>
  <p>有任何想法，請聯絡我們：</p>
  <p><a href="mailto:hi@setour.org">hi@setour.org</a> Kai先生</p>
  <p>謝謝！</p>
</div>

<?php if( count($posts) > 0 ): ?>
<?php foreach ($posts as $post): ?>      
<div class="jumbotron main_post">
  <div class="post_thumbnail"><img src="<?php echo base_url().'assets/upload/thumbnails/'.$post['post_coverphoto_url']; ?>" /></div>
  <h3><?php echo $post['post_title'] ?></h3>
  <hr>
  <h3>使用情境</h3>
  <div class="post_scenario">
    <pre><?php echo $post['post_scenario'] ?></pre>
  </div>
  <hr>
  <div class="share_button">
    <p><a class="btn btn-lg btn-primary" href="<?php echo base_url().'posts/'.$post['post_id']; ?>" role="button">觀看全文 &raquo;</a></p>
    <hr>
    <p>
      <a href="http://line.naver.jp/R/msg/text/?<?php echo $post['post_quote'] ?>%20%0a<?php echo base_url().'posts/'.$post['post_id']; ?>">
      <img src="<?php echo base_url() ?>/assets/img/linebutton_290x44.png"></a>
    </p>
    <p>
      <a href="http://m.facebook.com/sharer.php?u=<?php echo base_url().'posts/'.$post['post_id']; ?>" target="_blank">
      <img src="<?php echo base_url() ?>assets/img/button-fb-share.png"></a>
    </p>
  </div>
</div>

<?php endforeach ?>
<?php endif ?>  

<style>
  .post_scenario pre{
    font-size: 20px;
  }
  .main_post .post_thumbnail{
    float: left;
    padding: 6px;
  }
  .main_post .post_thumbnail img{
    border-radius: 10px;
  }
</style>
