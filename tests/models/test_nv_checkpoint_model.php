<?php
class Test_nv_checkpoint_model extends CodeIgniterUnitTestCase
{
    protected $rand ;
    protected $topic_id;
    protected $valid_group_ids;
    protected $option_ids;
    protected $too_much_option_ids;

    public function __construct()
    {
        parent::__construct('Nv_checkpoint_model');

        $this->load->model('nv_topic_model');
        $this->load->model('nv_topic_group_model');        
        $this->load->model('nv_checkpoint_model');
        $this->load->model('nv_option_model');
        
        /*
        $this->load->model('nv_topic_model');

        $this->rand = rand(500,15000);
        $topic = $this->nv_topic_model->get_all()[0];
        $this->valid_topic_id = $topic->id;
        
        $this->valid_group_id = $this->db->from('nv_topic_groups')
                                                              ->where('topic_id', $topic->id)
                                                              ->get()->result()[0]->group_id;
        */
    }
    
    function setUp(){
        $rand = rand(1,10000);
      
        $topic_data = array();
        $topic_data['title'] = $rand . '_title';
        $topic_data['description'] = $rand . '_descrption';
        $topic_data['photo_url'] = $rand . '_photo_url';
        $topic_data['available_votespoll'] = 3;
        $topic_data['start_time'] = date("Y-m-d H:i:s");
        $topic_data['end_time'] = date("Y-m-d H:i:s");
        
        $group_names = [ $rand . "_學生組", $rand . "_校友組"];
        
        $id = $this->nv_topic_model->create($topic_data, $group_names);
        $this->topic_id = $id;
        
        $groups = $this->nv_topic_group_model->get_many_by('topic_id', $id);
        $this->valid_group_ids = array();
        $this->option_ids = array();
        $this->too_much_option_ids = array();
        foreach($groups as $group){
            array_push($this->valid_group_ids, $group->group_id);
        
            for( $i = 0; $i < 6; $i++ ){
                $option_data = array();
                $option_data['group_id'] = $group->group_id;
                $option_data['topic_id'] = $this->topic_id;
                $option_data['option_department'] = $i . '_' . $rand . '_department';
                $option_data['option_author'] = $i . '_' . $rand . '_author';
                $option_data['option_grade'] = $rand;
                $option_data['option_title'] = $i . '_' . $rand . '_title';
                $option_data['option_description'] = $i . '_' . $rand . '_description';
                $option_data['option_attachment_url'] = $i . '_' . $rand . '_url';
                        
                $option_id = $this->nv_option_model->create($option_data);              
                
                array_push($this->too_much_option_ids, $option_id);
                if ($i < 3){
                    array_push($this->option_ids, $option_id);
                }
            }        
        }
    }
    function tearDown(){
        $this->nv_topic_model->remove($this->topic_id);
    }
    public function test_included()
    {
        $this->assertTrue(class_exists('Nv_checkpoint_model'));
    }
    
    public function test_user_vote_twice(){
        $this->expectException();
        $user_id = rand(1, 10000);
        $this->nv_checkpoint_model->create($user_id, $this->option_ids);
        $this->nv_checkpoint_model->create($user_id, $this->option_ids);
    }
    
    public function test_invalid_option(){
        $this->expectException();
        $user_id = rand(1, 10000);
        $this->nv_checkpoint_model->create($user_id, array(-1));
    }
    
    public function test_too_much_option(){
        $this->expectException();
        $user_id = rand(1, 10000);
        $this->nv_checkpoint_model->create($user_id, $this->too_much_option_ids);
    }

}

/* End of file test_users_model.php */
/* Location: ./tests/models/test_users_model.php */
