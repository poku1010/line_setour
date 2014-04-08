<section id="content">
    
  <div class="g12">
    <h1>文章管理</h1>
    
    <table class="datatable">
      <thead>
        <tr>
          <th>編號</th><th>文章標題</th><th>文章引言</th><th>管理選項</th>
        </tr>
      </thead>
      <tbody>
      <?php if( count($posts) > 0 ): ?>
      <?php foreach ($posts as $post): ?>
        <tr id="post_<?php echo $post['post_id']; ?>" class="gradeA">
          <td><?php echo $post['post_id']; ?></td>
          <td><?php echo $post['post_title']; ?></td>
          <td><?php echo $post['post_quote']; ?></td>
          <td>
            <a class="btn small" href="<?php echo base_url();?>admin/post_edit/<?php echo $post['post_id']; ?>">修改</a>
            <a class="btn small red" href="<?php echo base_url();?>admin/post_delete/<?php echo $post['post_id']; ?>"
              onclick="return confirm('確定刪除?');" >刪除</a>
          </td>
        </tr>
      <?php endforeach ?>
      <?php else: ?>
        <tr id="post_" class="gradeA">
          <td>目前尚無資料</td>
          <td>目前尚無資料</td>
          <td>目前尚無資料</td>
          <td>目前尚無資料</td>
        </tr>
      <?php endif ?>  
      </tbody>
    </table>
  </div>
      
</section><!-- end div #content -->