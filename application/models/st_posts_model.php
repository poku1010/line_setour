<?php
class St_posts_model extends MY_Model {
    
    protected $soft_delete = TRUE;
    protected $soft_delete_key = 'post_delete';  
    public $primary_key = 'post_id';
    
    /*  
     * Use this method to create a new topic and its groups.
     * 
     * usage:
     *     $topic_data need these fields: 
     *         title, description, photo_url, available_votespoll, start_time, end_time
     * 
     *     $group_name_array = ['學生組', '校友組'];
     * 
     * @return Integer (topic_id)
     * @author howtomakeaturn
     */
     
     
    function create($topic_data, $group_name_array){
        $id = $this->insert_into_topic($topic_data['title'], $topic_data['description'],
            $topic_data['photo_url'], $topic_data['available_votespoll'],
            $topic_data['start_time'], $topic_data['end_time']);
        
            
        foreach ($group_name_array as $group_name){
            $this->insert_into_group($id, $group_name);
        }
            
        return $id;
    }
    
    /*
     * this method would soft delete the tuple in database
     * 
     * @todo maybe we should forbid admin from removing it while it's in voting period?
     * 
     * @param Integer $topic_id
     * @return Boolean
     * @author howtomakeaturn
     * 
     */
    
    function remove($topic_id){
        $topic = $this->get($topic_id);
        if (empty($topic)){
            throw new Exception('Topic id not exist: ' . $topic_id);
        }
        /*
         * throw exception if this topic is runnning?
         * 
         */
        
        $this->delete($topic_id);
        return TRUE;
    }
    
    /*
     * update the topic fields.
     * 
     * @todo not allow deleting groups if  there's option in it?
     *           not allow admin to update if the topic is running?
     * 
     * @param $topic_id. others the same as create function
     * @author howotmakeaturn
     */
    
    function modify($topic_id, $topic_data, $group_name_array){
        $topic = $this->get($topic_id);
        if (empty($topic)){
            throw new Exception('Topic id not exist: ' . $topic_id);
        }
        
        $this->update_topic($topic_id, $topic_data['title'], $topic_data['description'],
            $topic_data['photo_url'], $topic_data['available_votespoll'],
            $topic_data['start_time'], $topic_data['end_time']);


        // to update the groups correctly, we need to do two things.

        // 1. delete the tuple originally in database, but not appear in the new groups
        $this->delete_group_if_needed($topic_id, $group_name_array);

        // 2. insert tuple only if it's not there before
        foreach ($group_name_array as $group_name){
            $this->insert_group_if_needed($topic_id, $group_name);
        }
        
        return TRUE;
    }
  
    /*
     * this function should only be called by create function
     * 
     * @author howtomakeaturn
     */
  
    private function insert_into_topic($title, $description, $photo_url,
        $available_votespoll, $start_time, $end_time)
    {
        if (empty($title) || empty($description) ||
            empty($available_votespoll) || empty($start_time) ||
            empty($end_time))
        {
            throw new Exception('Invalid parameters');
        }
        
        $data = array( 'topic_title' => $title, 'topic_description' => $description,
            'topic_coverphoto_url' => $photo_url, 'topic_available_votespoll' => $available_votespoll,
            'topic_start_time' => $start_time, 'topic_end_time' => $end_time);
        
        $this->insert($data);
        $id = $this->db->insert_id();
        return $id;
    }

    /*
     * this function should only be called by create function
     * 
     * @author howtomakeaturn
     */
    
    private function insert_into_group($topic_id, $group_name){
        if (empty($topic_id) || empty($group_name) ){
            throw new Exception('Invalid parameters');
        }
        
        $topic = $this->get($topic_id);
        if (empty($topic)){
            throw new Exception('Topic id not exist: ' . $topic_id);
        }
        
        $data = array( 'topic_id' => $topic_id, 'group_name' => $group_name);
        $this->db->insert('nv_topic_groups', $data);
        return $this->db->insert_id();
    }
    
    /*
     * this function should only be called by modify function
     * 
     * @author howtomakeaturn
     */
  
    private function update_topic($id, $title, $description, $photo_url,
        $available_votespoll, $start_time, $end_time)
    {
        if (empty($title) || empty($description) ||
            empty($available_votespoll) || empty($start_time) ||
            empty($end_time))
        {
            throw new Exception('Invalid parameters');
        }
        
        // don't override if no photo_url provided
        if (empty($photo_url)){
            $data = array( 'topic_title' => $title, 'topic_description' => $description,
                'topic_available_votespoll' => $available_votespoll,
                'topic_start_time' => $start_time, 'topic_end_time' => $end_time);        
        }
        else{
            $data = array( 'topic_title' => $title, 'topic_description' => $description,
                'topic_coverphoto_url' => $photo_url, 'topic_available_votespoll' => $available_votespoll,
                'topic_start_time' => $start_time, 'topic_end_time' => $end_time);
        }
        
        
        $this->update($id, $data);
        return TRUE;
    }    

    /*
     * this function should only be called by modify function
     * 
     * @author howtomakeaturn
     */
    
    private function insert_group_if_needed($topic_id, $group_name){
        if (empty($topic_id) || empty($group_name) ){
            throw new Exception('Invalid parameters');
        }
        
        $topic = $this->get($topic_id);
        if (empty($topic)){
            throw new Exception('Topic id not exist: ' . $topic_id);
        }
        
        // check if the topic already has the group with the same name
        $rows = $this->db->from('nv_topic_groups')
                                        ->where('topic_id', $topic_id)
                                        ->where('group_name', $group_name)
                                        ->get()->result();
        
        if (count($rows) != 0){
            //since it's already there, return immediately
            return $rows[0]->group_id;
        }
        
        $data = array( 'topic_id' => $topic_id, 'group_name' => $group_name);
        $this->db->insert('nv_topic_groups', $data);
        return $this->db->insert_id();
    }

    /*
     * this function should only be called by modify function
     * 
     * @author howtomakeaturn
     */
    
    private function delete_group_if_needed($topic_id, $group_name_array){
        if (empty($topic_id) || empty($group_name_array) ){
            throw new Exception('Invalid parameters');
        }
        
        $topic = $this->get($topic_id);
        if (empty($topic)){
            throw new Exception('Topic id not exist: ' . $topic_id);
        }
        
        $old_groups = $this->db->from('nv_topic_groups')
                                                      ->where('topic_id', $topic_id)
                                                      ->get()->result();        
        
        foreach($old_groups as $group){
            // delete the tuple in database if it's not in the new array
            if ( !in_array($group->group_name, $group_name_array) ){
                $this->db->where('group_id', $group->group_id)
                                  ->delete('nv_topic_groups');
            }
            else{
                // do nothing since it's in the new array  :)
            }
        }
        
        return TRUE;
    }
}
