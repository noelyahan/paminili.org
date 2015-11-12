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
            
    function get_all_posts() {
        $this->db->select('*');
        $this->db->from('post');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    /**
     * 
     * @param type $limit
     * @param type $offset
     */
    function get_posts($limit=0, $offset=0) {
        echo "SELECT * FROM ";
        $this->db->select('*');
        //For determine one or more tables to select from 
        $this->db->from('post');
        //For joining with another table, table name as first argument and condition string as second argument
        $this->db->join('comment', 'comment.post_id = post.post_id');
        $this->db->join('reply_comment','reply_comment.comment_id = comment.comment_id');
        $query = $this->db->get();
        var_dump($query);
//        foreach ($query->result() as $row) {
//            echo $row["post_id"];
//            echo $row["comment_id"];
//            echo $row["reply_id"];
//           ret     
//        }
    }
    
    function add_post($user_id, $post_description) {
        $this->post = $post_description;
        $this->user_id = $user_id;
        $this->timestamp = date('Y-m-d H:i:s');
        $this->save();        
    }
}
