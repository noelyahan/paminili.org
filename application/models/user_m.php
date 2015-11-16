<?php

class User_m extends CI_Model {

    public function authenticate($userName,$password) {
        $query = $this->db->query(" SELECT * FROM user u
                                    WHERE u.name='$userName'
                                    AND u.password='$password'");
        return $query->result();
    }
    public function authenticateAsAnonymous($userName) {
        $query = $this->db->query(" SELECT * FROM user u
                                    WHERE u.name='$userName'
                                    ");
        return $query->result();
    }
    
    function getUserName($userid){
        $query = $this->db->query(" SELECT name FROM user
                                    WHERE id=$userid
                                    ");
        return  $query->result_array();
    }

}
