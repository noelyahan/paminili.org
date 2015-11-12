<?php


class Reply_m extends MY_Model {
    
    const DB_TABLE = 'reply_comment';
    const DB_TABLE_PK = 'reply_id';
    
    public $reply_id;
    public $description;
    public $timestamp;
    public $vote_up =0;
    public $vote_down =0;
    public $user_id;
    public $comment_id;
            
    function add_reply($user_id, $comment_id, $reply_description) {
        $this->description = $reply_description;
        $this->user_id = $user_id;
        $this->comment_id = $comment_id;
        $this->timestamp = date('Y-m-d H:i:s');
        $this->save();
    }
    
    function  get_reply($comment_id){
        $query = $this->db->get_where('reply_comment', array('comment_id' => $comment_id),0, 0);
        return $query->result_array();
    }
}
