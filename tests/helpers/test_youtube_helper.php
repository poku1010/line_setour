<?php
class Test_youtube_helper extends CodeIgniterUnitTestCase
{

    public function __construct()
    {
        parent::__construct('Nv_option_model');

        $this->load->helper('youtube_helper');
    }
    
    public function test_included()
    {
        $this->assertTrue(function_exists('grab_youtube_id_from_context'));
    }
    
    public function test_grab_youtube_id_from_context(){
        $text = '演 Yoshiro Osaka 及製作人 Nobu Awata 是甜梅號2008年去日本東京表演時認識的青年電影工作者，他們遠赴北海道拍攝深邃而­美麗的場景，將「站在太陽上」緩慢的流動感呈現於這支MV中，希望大家會喜歡！ 
            http://www.youtube.com/watch?v=MF4V6iG9ydI';
            
        $result = grab_youtube_id_from_context($text);
        $this->dump($result);
        $this->assertNotNull($result);      
    }

    public function test_grab_youtube_id_from_context_not_contains(){
        $text = '演 Yoshiro Osaka 及製作人 Nobu Awata 是甜梅號2008年去日本東京表演時認識的青年電影工作者，他們遠赴北海道拍攝深邃而­美麗的場景，將「站在太陽上」緩慢的流動感呈現於這支MV中，希望大家會喜歡！';          
        $result = grab_youtube_id_from_context($text);
        $this->dump($result);
        $this->assertNull($result);      
    }
    
    function test_make_youtube_iframe(){
        $text = '演 Yoshiro Osaka 及製作人 Nobu Awata 是甜梅號2008年去日本東京表演時認識的青年電影工作者，他們遠赴北海道拍攝深邃而­美麗的場景，將「站在太陽上」緩慢的流動感呈現於這支MV中，希望大家會喜歡！ 
            http://www.youtube.com/watch?v=MF4V6iG9ydI';
        $id = grab_youtube_id_from_context($text);
        $html = make_youtube_iframe($id, 300, 240);
        $this->dump($html);
        $this->assertNotNull($html);
    }
    
    function test_convert_url_to_a_tag(){
        $text = '演 Yoshiro Osaka 及製作人 Nobu Awata 是甜梅號2008年去日本東京表演時認識的青年電影工作者，他們遠赴北海道拍攝深邃而­美麗的場景，將「站在太陽上」緩慢的流動感呈現於這支MV中，希望大家會喜歡！ 
            http://www.youtube.com/watch?v=MF4V6iG9ydI';
            
        $result = convert_url_to_a_tag($text);
        $this->dump($result);
        $this->assertNotNull($result);
    }

    function test_convert_url_to_a_tag_without_url(){
        $text = '演 Yoshiro Osaka 及製作人 Nobu Awata 是甜梅號2008年去日本東京表演時認識的青年電影工作者，他們遠赴北海道拍攝深邃而­美麗的場景，將「站在太陽上」緩慢的流動感呈現於這支MV中，希望大家會喜歡！ ';            
        $result = convert_url_to_a_tag($text);
        $this->dump($result);
        $this->assertNotNull($result);
    }
    
}
