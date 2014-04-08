<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('Asia/Taipei');
session_start(); //we need to call PHP's session object to access it through CI

class Admin extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *     http://example.com/index.php/welcome
   *  - or -  
   *     http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  
/*
  public function index()
  {
    $this->template->set_layout('dashboard');
    $this->template->build('admin/dashboard');
  }
*/

  public function index()
  {
    $this->load->helper(array('form'));
    $this->template->set_layout('admin');
    $this->template->build('admin/index');
  }
  
  public function dashboard()
  {
    if($this->session->userdata('logged_in'))
    {
      $this->template->set_layout('dashboard');
      $this->template->build('admin/dashboard');
    }
    else
    {
      //If no session, redirect to login page
      redirect('admin', 'refresh');
    }
  }
  
  public function post_add()
  {
    if($this->session->userdata('logged_in'))
    {
      $this->template->set_layout('dashboard');
      $this->template->build('admin/post_add');
    }
    else
    {
      //If no session, redirect to login page
      redirect('admin', 'refresh');
    }
  }
  
  
  public function post_add_db()
  {
    if($this->session->userdata('logged_in'))
    {
      $data = $this->input->post();
      $data['post_coverphoto_url'] = $data['post_coverphoto_url'][0];
      $data['post_created_time'] = date('Y-m-d H:i:s');
      $this->load->model('st_posts_model');
      $status = $this->st_posts_model->insert($data);
      
      if($status){
        $path = base_url() ."admin/post_manage";
        //header('Refresh: 1; URL='.$path);
        echo "\n<script type=\"text/javascript\">alert('文章送出成功!');</script>\n";
        echo "\n<script type=\"text/javascript\">window.location.replace('$path');</script>\n";
      } else {
        echo "something error please contact poku1010@gmail.com";
      }
    }
    else
    {
      //If no session, redirect to login page
      redirect('admin', 'refresh');
    }

  }
  
  public function post_edit($post_id)
  {
    if($this->session->userdata('logged_in'))
    {
      $this->load->model('st_posts_model');
      $data['post'] = $this->st_posts_model->as_array()->get($post_id);
      $this->template->set_layout('dashboard');
      $this->template->build('admin/post_edit', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('admin', 'refresh');
    }
  }
  
  public function post_edit_db()
  {
    if($this->session->userdata('logged_in'))
    {
      $data = $this->input->post();
      if($data['post_coverphoto_url'][0]){
        $data['post_coverphoto_url'] = $data['post_coverphoto_url'][0];
      }
      $this->load->model('st_posts_model');
      $status = $this->st_posts_model->update($data['post_id'], $data);
      
      if($status){
        //echo "文章修改成功! 1秒後跳至文章管理頁";
        $path = base_url() ."admin/post_manage";
        //header('Refresh: 1; URL='.$path);
        echo "\n<script type=\"text/javascript\">alert('文章修改成功!');</script>\n";
        echo "\n<script type=\"text/javascript\">window.location.replace('$path');</script>\n";
      } else {
        echo "something error please contact poku1010@gmail.com";
      }
    }
    else
    {
      //If no session, redirect to login page
      redirect('admin', 'refresh');
    }
  }
  
  public function post_manage()
  {
    if($this->session->userdata('logged_in'))
    {
      $this->load->model('st_posts_model');
      $data['posts'] = $this->st_posts_model->as_array()->get_all();
      $this->template->set_layout('dashboard');
      $this->template->build('admin/post_manage', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('admin', 'refresh');
    }
  }
  
  public function post_delete($delete_id)
  {
    if($this->session->userdata('logged_in'))
    {
      $this->load->model('st_posts_model');
      try{
          $this->st_posts_model->remove($delete_id);
      }catch (Exception $e){
          echo 'Something went wrong...';
      }
      redirect( base_url().'admin/post_manage');
    }
    else
    {
      //If no session, redirect to login page
      redirect('admin', 'refresh');
    }
  }
  
  public function example()
  {
      $this->template->set_layout('admin');
      $this->template->build('admin/example');
  }
  
  function logout()
  {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('admin', 'refresh');
  }

  
  
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
