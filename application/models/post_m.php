<?php

class Post_m extends MY_Model {
    
    const DB_TABLE = 'post';
    const DB_TABLE_PK = 'post_id';
    
    public $post_id;

    public $post;
    
    public  $vote_up = 0;
            
    public $vote_down = 0;
    
    public $timestamp;
    
    public $user_id;
            
    function get_all_posts() {}
    
    /**
     * 
     * @param type $limit
     * @param type $offset
     */
    function get_posts($limit=0, $offset=0) {}
    
    function add_post($user_id, $post_description) {
        $this->post = $post_description;
        $this->user_id = $user_id;
        $this->timestamp = date('Y-m-d H:i:s');
        $this->save();        
    }
}
