<?php

class Post_m extends MY_Model {
    
    const DB_TABLE = 'post';
    const DB_TABLE_PK = 'post_id';
    
    function get_all_posts() {}
    
    /**
     * 
     * @param type $limit
     * @param type $offset
     */
    function get_posts($limit=0, $offset=0) {}
    
    function add_post($user_id, $post_description) {}
}
