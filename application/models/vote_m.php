<?php

class vote_m extends MY_Model {
    
    const DB_TABLE = 'vote';
    const DB_TABLE_PK = 'vote_id';
    
    /**
     * 
     * @param type $user_id => FK
     * @param type $vote_type => post, comment, reply
     * @param type $id => post_id, comment_id, reply_id
     */
    function add_vote($user_id, $vote_type, $id) {
        
    }
    
}
