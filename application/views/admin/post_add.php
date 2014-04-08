<section id="content">
      
  <div class="g12">
    <form id="post_form" action="<?php echo base_url();?>admin/post_add_db" method="post" autocomplete="off">
      <fieldset>
        <label>新增文章</label>
        <section><label for="post_title">標題</label>
          <div><input type="text" id="post_title" name="post_title" placeholder="ex. 【諾拉與秀春的故事】"  
                      data-errortext="喔喔 你忘記輸入標題囉！" required ></div>
        </section>
        <section><label for="post_quote">引言</label>
          <div><input type="text" id="post_quote" name="post_quote"  placeholder="ex. 他們怎麼可以這樣！在欺負過我之後，再去欺負別人。"  
                      data-errortext="喔喔 你忘記輸入引言囉！" required ></div>
        </section>
        <section><label for="post_source">文章來源</label>
          <div><input type="text" id="post_source" name="post_source" 
                      placeholder="ex. One more story  撰稿人：許銘義  攝影：陳板  編修：Hank"></div>
        </section>
        <section><label for="post_scenario">使用情境</label>
          <div>
            <textarea id="post_scenario" name="post_scenario" data-autogrow="true" >使用情境描述</textarea>
          </div>
        </section>
        <section><label for="post_content">文章正文</label>
          <div>
            <textarea id="post_content" name="post_content" data-autogrow="true" >文章正文內容</textarea>
          </div>
        </section>
        <section><label for="post_coverphoto_url">文章圖片上傳</label>
          <div><input type="file" id="post_coverphoto_url" name="post_coverphoto_url"></div>
        </section>
        <section>
          <div>
            <button class="submit">送出</button>
          </div>
        </section>
      </fieldset>
      
    </form>  
    </div>
</section><!-- end div #content -->