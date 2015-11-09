<?php


class User extends CI_Controller {
    
    
    function add_post() {
//        $user_id, $description
    }
    
    
    function add_comment() {
//        $user_id, $post_id, $description
    }
    
    
    function add_reply() {
//        $user_id, $comment_id, $description
    }
    
    
    /**
     * This is a generic function to
     * add any type of vote (like/dislike)
     * and also this will update the vote count
     * of particular table type (post, comment, reply)
     */
    function add_vote() {
//      $table_type => (comment, post, reply)
//      $id => particular table type id (comment, post, reply)
        
//      $user_id, $id, $table_type, $vote_type
    }
    
}
