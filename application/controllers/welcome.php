<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
      $this->template->title('TEMPLATE DEMO');
      $this->template->build('welcome/demo');
	}
  function test(){
      $this->load->model('nv_topic_model');
      $data = array();
      $data['topic'] = $this->nv_topic_model->as_array()->get(1);
      
      $this->template->set_layout('dashboard');
      $this->template->build('admin/vote_edit', $data);    
  }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
