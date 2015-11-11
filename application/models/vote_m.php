<?php

class Vote_m extends MY_Model {
    
    const DB_TABLE = 'vote';
    const DB_TABLE_PK = 'vote_id';
    
    public $vote_id;
    public $post_id;
    public $comment_id;
    public $user_id;
    public $reply_id;
    public $vote;




    /**
     * 
     * @param type $user_id => FK
     * @param type $vote_type => post, comment, reply
     * @param type $id => post_id, comment_id, reply_id
     */
    function add_vote($user_id, $vote_type, $id, $vote_table) {
        $this->user_id = $user_id;
        $query_str = "";
        if($vote_table == "post"){
            $this->post_id = $id;
            $query_str = $this->create_query($vote_table, $vote_type, $id, "post_id");
        }  else if($vote_table == "comment") {
            $this->comment_id = $id;
            $query_str = $this->create_query($vote_table, $vote_type, $id, "comment_id");
        }else{
            $this->reply_id = $id;
            $query_str = $this->create_query($vote_table, $vote_type, $id, "reply_id");
        }
        $this->vote = $vote_type;
        $this->save();
        $query = $this->db->query($query_str);
    }
    
    function create_query($vote_table,$vote_type,$id,$id_type){
        if($vote_type == 1){
            $query = "UPDATE $vote_table SET vote_up=(vote_up+1) WHERE $id_type=$id";
            return $query;
        }else{
            $query = "UPDATE $vote_table SET vote_down=(vote_down+1) WHERE $id_type=$id";
            return $query;
        }
    }
    
}
