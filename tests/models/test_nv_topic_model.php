<?php
class Test_nv_topic_model extends CodeIgniterUnitTestCase
{
    protected $rand ;
    protected $valid_topic_id;

    public function __construct()
    {
        parent::__construct('Nv_topic_model');

        $this->load->model('nv_topic_model');

        $this->rand = rand(500,15000);
    }
    
    public function setUp()
    {
      //  $this->db->truncate('nv_topics');
        /*
        $insert_data = array(
              'topic_title' => 'demo'.$this->rand.'@demo.com',
              'topic_description' => 'test_'.$this->rand,
              'topic_coverphoto_url' => 'demo_'.$this->rand,
              'topic_available_votespoll' => time(),
              'topic_start_time'	=> 1,
              'topic_end_time'	=> 1
          );
        */
       // $user_id = $this->nv_topic_model->create($this->rand, $this->rand, $this->rand, $this->rand, $this->rand, $this->rand );
    //    $this->user = $this->users_model->get_user($user_id);
    }  

    public function test_included()
    {
        $this->assertTrue(class_exists('Nv_topic_model'));
    }
    /*
    public function test_insert_into_topic()
    {
        $title = $this->rand . '_title';
        $description = $this->rand . '_descrption';
        $photo_url = $this->rand . '_photo_url';
        $available_votespoll = $this->rand;
         $start_time = date("Y-m-d H:i:s");
        $end_time = date("Y-m-d H:i:s");
        $id = $this->nv_topic_model->insert_into_topic($title, $description,
            $photo_url, $available_votespoll, $start_time, $end_time);
        $this->assertTrue($id);
    }*/
    
    public function test_create()
    {
        $topic_data = array();
        $topic_data['title'] = $this->rand . '_title';
        $topic_data['description'] = $this->rand . '_descrption';
        $topic_data['photo_url'] = $this->rand . '_photo_url';
        $topic_data['available_votespoll'] = $this->rand;
        $topic_data['start_time'] = date("Y-m-d H:i:s");
        $topic_data['end_time'] = date("Y-m-d H:i:s");
        
        $group_names = ['學生組', '校友組'];
        
        $id = $this->nv_topic_model->create($topic_data, $group_names);
        $this->assertTrue($id);
        $this->valid_topic_id = $id;
    }
    
    function test_remove_with_invalid_id(){
        $this->expectException();
        $this->nv_topic_model->remove(-1);
    }


    function test_get_all(){
        $topics = $this->nv_topic_model->get_all();
        $this->assertTrue($topics);
    }

    public function test_modify()
    {
        $topic_data = array();
        $topic_data['title'] = $this->rand . '_title2';
        $topic_data['description'] = $this->rand . '_descrption2';
        $topic_data['photo_url'] = $this->rand . '_photo_url2';
        $topic_data['available_votespoll'] = $this->rand;
        $topic_data['start_time'] = date("Y-m-d H:i:s");
        $topic_data['end_time'] = date("Y-m-d H:i:s");
        
        $group_names = ['學生組', '校友組2'];
        
        $result = $this->nv_topic_model->modify($this->valid_topic_id, $topic_data, $group_names);
        $this->assertTrue($result);
    }

    public function test_modify_without_photo()
    {
        $topic_data = array();
        $topic_data['title'] = $this->rand . '_title3';
        $topic_data['description'] = $this->rand . '_descrption3';
        $topic_data['photo_url'] = '';
        $topic_data['available_votespoll'] = $this->rand;
        $topic_data['start_time'] = date("Y-m-d H:i:s");
        $topic_data['end_time'] = date("Y-m-d H:i:s");
        
        $group_names = ['學生組', '校友組3'];
        
        $result = $this->nv_topic_model->modify($this->valid_topic_id, $topic_data, $group_names);
        $this->assertTrue($result);
    }


    
    function test_remove(){
        $result = $this->nv_topic_model->remove($this->valid_topic_id);
        $this->assertTrue($result);
    }
    
    /*
    public function test_create_with_wrong_arguments()
    {
        $this->expectException();
        $topic_data = array();
        $topic_data['title'] = $this->rand . '_title';
        // make this buggy
        $topic_data['description'] = '';
        $topic_data['photo_url'] = $this->rand . '_photo_url';
        $topic_data['available_votespoll'] = $this->rand;
        $topic_data['start_time'] = date("Y-m-d H:i:s");
        $topic_data['end_time'] = date("Y-m-d H:i:s");
        $id = $this->nv_topic_model->create($topic_data, []);
    }
    */
    /*
    public function test_insert_into_group()
    {
        $topic_id = 1;
        $group_name = $this->rand . '_name';
        $id = $this->nv_topic_model->insert_into_group($topic_id, $group_name);
        $this->assertTrue($id);
    }
    */
    
  /*


    public function tearDown()
	{

    }


	public function test_add_user()
	{
		$insert_data = array(
			    'user_email' => 'demo'.$this->rand.'@demo.com',
			    'user_username' => 'test_'.$this->rand,
			    'user_password' => 'demo_'.$this->rand,
			    'user_join_date' => time(),
				'user_group'	=> 1
			);
		$user_id = $this->users_model->add_user($insert_data);

		//$this->dump($user_id);
		$this->assertEqual($user_id, 1, 'user id = 1');
	}

	public function test_get_user_by_id()
	{
		$user = $this->users_model->get_user(1);
		$this->assertEqual($user['user_id'], 1);
	}

	public function test_get_user_by_username()
	{
		$user = $this->users_model->get_user('test_'.$this->rand);
		$this->assertEqual($user['user_id'], 1);
	}

	public function test_edit_user()
	{
		$insert_data = array(
			    'user_email' => 'edit_demo'.$this->rand.'@demo.com',
			);
		$user = $this->users_model->edit_user(1, $insert_data);
		$this->assertTrue($user);
	}

	public function test_delete_user()
	{
		$user = $this->users_model->delete_user(1);
		$this->assertTrue($user);
	}

	public function test_username_exists()
	{
		$user = $this->users_model->username_check('test_'.$this->rand);
		$this->assertFalse($user);
	}

	public function test_username_does_not_exists()
	{
		$user = $this->users_model->username_check('my_super_test_'.$this->rand);
		$this->assertTrue($user);
	}

	public function test_email_exists()
	{
		$user = $this->users_model->email_check('demo'.$this->rand.'@demo.com');
		$this->assertFalse($user);
	}

	public function test_email_does_not_exists()
	{
		$user = $this->users_model->email_check('my_super_test_'.$this->rand.'@demo.com');
		$this->assertTrue($user);
	}
  */
}

/* End of file test_users_model.php */
/* Location: ./tests/models/test_users_model.php */
