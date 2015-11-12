<?php


class User extends My_Controller {
    
    
    function add_post() {
        $this->load->model('post_m');
        $post_m = new Post_m();
        $user_id = $this->session->userdata('userId');
        $post = $this->input->post('post');        
        
        if($user_id) {
            $post_m->add_post($user_id, $post);
        }else {
            echo "error";
        }
    }
    
    
    function add_comment() {
       $user_id = $this->session->userdata('userId');
       $post_id = $this->input->post('post_id');
       $comment = $this->input->post('comment');
       
       $this->load->model("Comment_m");
       $comment_m = new Comment_m();       
       
       if($user_id) {
            $comment_m->add_comment($user_id, $post_id, $comment);
        }else {
            echo "error";
        }
    }
    
    
    function add_reply() {
        $this->load->model('reply_m');
        $reply_m = new Reply_m();
        $comment_id = $this->input->post('comment_id');
        $reply = $this->input->post('reply');
        $user_id = $this->session->userdata('userId');
        
        if($user_id) {
            $reply_m->add_reply($user_id, $comment_id, $reply);
        }else {
            echo "error";
        }
        
    }
    
    
    /**
     * This is a generic function to
     * add any type of vote (like/dislike)
     * and also this will update the vote count
     * of particular table type (post, comment, reply)
     */
    function add_vote() {
        $this->load->model('vote_m');
        $vote_m = new Vote_m();
        $vote_m->add_vote(2,1,3,"post");
    }
    
}
