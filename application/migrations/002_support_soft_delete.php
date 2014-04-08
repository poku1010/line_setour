<?php

class Migration_Support_soft_delete extends CI_Migration {
    public function up(){

        /*
         * st_posts
         * 
         */
        $fields = array(
            'post_delete' => array(
                'type' => 'BOOLEAN'
            )
        );

        $this->dbforge->add_column('st_posts', $fields);

    }
 
    public function down(){
        $this->dbforge->drop_column('st_posts', 'post_delete');
    }
}
