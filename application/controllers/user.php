<?php


class User extends CI_Controller {
    
    
    function add_post() {
        $this->load->model('post_m');
        $post_m = new Post_m();
//        $post = $this->input->get('post');
//        $user_id = $this->input->get('user_id');
        $post_m->add_post(2,"This is my test post");
    }
    
    
    function add_comment() {
       $user_id = $this->input->post('user_id');
       $post_id = $this->input->post('post_id');
       $comment_description = $this->input->post('post_description');
       
       $this->load->model("Comment_m");
       $comment = new Comment_m();
       $comment->add_comment($user_id, $post_id, $comment_description);
    }
    
    
    function add_reply() {
        $this->load->model('reply_m');
        $reply_m = new Reply_m();
//        $description = $this->input->get('reply_description');
//        $user_id = $this->input->get('user_id');
//        $comment_id = $this->input->get('comment_id');  
        $reply_m->add_reply(2,2,"This is my test reply comment");
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
