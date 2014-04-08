<?php

class Migration_Init_schema extends CI_Migration {
    public function up(){
        /*
         * st_posts
         */
        $fields = array(
            'post_id' => array(
                'type' => 'INT',
                'constraint' => 9,
                'auto_increment' => TRUE
            ),
            'post_title' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'post_quote' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'post_scenario' => array(
                'type' => 'LONGTEXT'
            ),
            'post_content' => array(
                'type' => 'LONGTEXT'
            ),
            'post_coverphoto_url' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'post_source' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'post_created_time' => array(
                'type' => 'datetime'
            ),
            
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('post_id');
        $this->dbforge->create_table('st_posts');      

    }
 
    public function down(){
        $this->dbforge->drop_table('st_posts');
    }
}
