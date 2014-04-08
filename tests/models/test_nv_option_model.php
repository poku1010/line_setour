<?php
class Test_nv_option_model extends CodeIgniterUnitTestCase
{
    protected $rand ;
    protected $valid_topic_id;
    protected $valid_group_id;
    protected $option_id;

    public function __construct()
    {
        parent::__construct('Nv_option_model');

        $this->load->model('nv_option_model');
        $this->load->model('nv_topic_model');

        $this->rand = rand(500,15000);
        $topic = $this->nv_topic_model->get_all()[0];
        $this->valid_topic_id = $topic->id;
        
        $this->valid_group_id = $this->db->from('nv_topic_groups')
                                                              ->where('topic_id', $topic->id)
                                                              ->get()->result()[0]->group_id;
    }
    
    public function test_included()
    {
        $this->assertTrue(class_exists('Nv_option_model'));
    }
    
    public function test_create()
    {
        $option_data = array();
        $option_data['group_id'] = $this->valid_group_id;
        $option_data['topic_id'] = $this->valid_topic_id;
        $option_data['option_department'] = $this->rand . '_department';
        $option_data['option_author'] = $this->rand . '_author';
        $option_data['option_grade'] = $this->rand;
        $option_data['option_title'] = $this->rand . '_title';
        $option_data['option_description'] = $this->rand . '_description';
        $option_data['option_attachment_url'] = $this->rand . '_url';
                
        $this->option_id = $this->nv_option_model->create($option_data);
        $this->assertTrue($this->option_id);
    }
    function test_wrong_topic_id_create(){
        $this->expectException();
        $option_data = array();
        $option_data['group_id'] = $this->valid_group_id;
        $option_data['topic_id'] = -1;
        $option_data['option_department'] = $this->rand . '_photo_url';
        $option_data['option_author'] = $this->rand . '_author';
        $option_data['option_grade'] = $this->rand;
        $option_data['option_title'] = $this->rand . '_title';
        $option_data['option_description'] = $this->rand . '_description';
        $option_data['option_attachment_url'] = $this->rand . '_url';
        $option_data['option_count'] = 0;
        $option_data['option_delete'] = FALSE;
                
        $id = $this->nv_option_model->create($option_data);      
    }
    function test_wrong_group_id_create(){
        $this->expectException();
        $option_data = array();
        $option_data['group_id'] = -1;
        $option_data['topic_id'] = $this->valid_topic_id;
        $option_data['option_department'] = $this->rand . '_department';
        $option_data['option_author'] = $this->rand . '_author';
        $option_data['option_grade'] = $this->rand;
        $option_data['option_title'] = $this->rand . '_title';
        $option_data['option_description'] = $this->rand . '_description';
        $option_data['option_attachment_url'] = $this->rand . '_url';
        $option_data['option_count'] = 0;
        $option_data['option_delete'] = FALSE;
                
        $id = $this->nv_option_model->create($option_data);
    }
    
    function test_remove_with_invalid_id(){
        $this->expectException();
        $this->nv_option_model->remove(-1);
    }
    
    function test_modify(){
        $option_data = array();
        $option_data['group_id'] = $this->valid_group_id;
        $option_data['option_department'] = $this->rand . '_department_modify';
        $option_data['option_author'] = $this->rand . '_author_modify';
        $option_data['option_grade'] = $this->rand;
        $option_data['option_title'] = $this->rand . '_title_modify';
        $option_data['option_description'] = $this->rand . '_description_modify';
        $option_data['option_attachment_url'] = $this->rand . '_url_modify';
                
        $result = $this->nv_option_model->modify($this->option_id, $option_data);
        $this->assertTrue($result);
    }

    function test_modify_with_wrong_group_id(){
        $this->expectException();
      
        $option_data = array();
        $option_data['group_id'] = -1;
        $option_data['option_department'] = $this->rand . '_department_modify';
        $option_data['option_author'] = $this->rand . '_author_modify';
        $option_data['option_grade'] = $this->rand;
        $option_data['option_title'] = $this->rand . '_title_modify';
        $option_data['option_description'] = $this->rand . '_description_modify';
        $option_data['option_attachment_url'] = $this->rand . '_url_modify';
                
        $result = $this->nv_option_model->modify($this->option_id, $option_data);
    }

    function test_remove(){
        $result = $this->nv_option_model->remove($this->option_id);
        $this->assertTrue($result);
    }    
    
    /*

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

    

    */

}

/* End of file test_users_model.php */
/* Location: ./tests/models/test_users_model.php */
