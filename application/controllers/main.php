<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
    
  public function index()
	{
      $this->load->model('st_posts_model');
      $data['posts'] = $this->st_posts_model->as_array()->get_all();
      $this->template->set_layout('main');
      $this->template->build('main/index', $data);
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */
