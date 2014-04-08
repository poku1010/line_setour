<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
  
  public function index($post_id=false)
	{
    
    if($post_id) {
      $data = array();
      $this->load->model('st_posts_model');
      $data['post'] = $this->st_posts_model->as_array()->get($post_id);
      $this->template->set_layout('main');
      $this->template->build('posts/index', $data);
    } else {
      echo 'dwqdwdqw';
      //redirect( base_url() );
    }
	}
	
}

/* End of file post.php */
/* Location: ./application/controllers/post.php */
