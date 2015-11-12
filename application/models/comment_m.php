<?php

class Comment_m extends MY_Model {
    
    const DB_TABLE = 'comment';
    const DB_TABLE_PK = 'comment_id';
    
    public $comment_id;
    public $description;
    public $vote_up = 0;
    public $vote_down = 0;
    public $timestamp;	
    public $post_id;
    public $user_id;
    
    function add_comment($user_id, $post_id, $comment_description) {
        $this->user_id = $user_id;
        $this->post_id = $post_id;
        $this->description = $comment_description;
        $this->timestamp = date('Y-m-d H:i:s');
        $this->save();
    }
    
    function view_all_comments() {
        $data = $this->get();
        var_dump($data);
    }
    
    function  get_comments($post_id){
        $query = $this->db->get_where('comment', array('post_id' => $post_id),0, 0);
        return $query->result_array();
    }
}
