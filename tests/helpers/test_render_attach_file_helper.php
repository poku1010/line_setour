<?php
class Test_render_attach_file_helper extends CodeIgniterUnitTestCase
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('render_attach_file_helper');
    }
    
    public function test_included()
    {
        $this->assertTrue(function_exists('make_image_html'));
    }
    
    function test_make_image_html(){
        $url = 'http://ntuvote.local/assets/upload/Yingjeou_Ma.jpg';
        $result = make_image_html($url, 'responsive_img');
        $this->dump($result);
        $this->assertNotNull($result);
    }
    
    function test_is_image(){
        $url = '/aa/aaa/aaa.jpg';
        $result = is_image($url);
        $this->assertTrue($result);
    }
    
}
