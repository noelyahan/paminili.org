<?php

class Comment_m extends MY_Model {
    
    const DB_TABLE = 'comment';
    const DB_TABLE_PK = 'comment_id';
    
    function add_comment($user_id, $post_id, $comment_description) {}
}
