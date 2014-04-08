<?php

class Migration_Login_table extends CI_Migration {
    public function up(){
        /*
         * st_users
         */
        $fields = array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 9,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('user_id');
        $this->dbforge->create_table('st_users');      

    }
 
    public function down(){
        $this->dbforge->drop_table('st_users');
    }
}
