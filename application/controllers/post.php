<?php


class Post extends CI_Controller {
    
    // if limit == 0 get all posts
    function get_all_posts() {
//        $limit
        //get all posts
        //get all comments according to the post
        //get all replies according to the comment
        $this->load->model('post_m');
        $post_m = new Post_m();
        $all_post = $post_m->get_all_posts();
        
        $this->load->model('comment_m');
        $comment_m = new Comment_m();
        
        $this->load->model('reply_m');
        $reply_m = new Reply_m();
       
        for( $i = 0 ; $i < count($all_post) ; $i++ ) {
            $comments = $comment_m->get_comments($all_post[$i]["post_id"]);
            for($j = 0 ; $j < count($comments) ; $j++){
                 $replies = $reply_m->get_reply($comments[$j]["comment_id"]);
                 $comments[$j]["replies"] = $replies;
            }
            $all_post[$i]["comments"] = $comments;
        }
       //var_dump($all_post);
//       for($i = 0 ; $i < count($all_post) ; $i++){
//           echo $all_post[$i]["post"]."</br>";
//           $comments = $all_post[$i]["comments"];
//           for($j = 0 ; $j < count($comments) ; $j++){
//               echo "\t".$comments[$j]["description"]."</br>";
//               $replies = $comments[$j]["replies"];
//               for($k = 0 ; $k < count($replies) ; $k++){
//                   echo "\t \t".$replies[$k]["description"]."</br>";
//               }
//           }
//       }
       $data["all_posts"] = $all_post;
       $data["user_name"] = "Sachith Ushan";
       $this->load->view('post_test',$data);
    }
}
