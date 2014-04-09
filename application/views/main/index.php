<!-- Main component for index -->
<div class="jumbotron">
  <h3>《緣起》</h3>
  <hr>
  <p>溝通要用對方法！</p>
  <p>給長輩們一個不同的想法──由他們世代的人來說服，</p>
  <p>不立即從理性的觀點/口吻/角度切入，以免太早拉起警報。</p>
  <p>用LINE，散播這些屬於他們世代的故事。</p>
  <p>讓我們<b>「奈奈救台灣！」</b></p>
</div>

<div class="jumbotron">
  <h3>《說明》</h3>
  <hr>
  <p>請選擇長輩們會有共鳴的故事，</p>
  <p>點進去後，用LINE分享給他們。</p>
  <p>也可以參考我們的使用情境，</p>
  <p>選出適合你家長輩的故事。</p>
  <p>有任何想法，請聯絡我們：<a href="mailto:hi@setour.org">hi@setour.org</a> Kai先生</p>
  <p>謝謝！</p>
</div>

<?php if( count($posts) > 0 ): ?>
<?php foreach ($posts as $post): ?>      
<div class="jumbotron main_post">
  <h3>文章標題：<?php echo $post['post_title'] ?></h3>
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
    font-size: 16px;
  }
</style>
