<?php 
  class Upload extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function do_upload()
    {
        $this->load->library("uploadhandler");
    }
    
    public function index()
    {
        echo 'this is upload controller';
        echo FCPATH;
    }
  }
?>