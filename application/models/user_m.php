<?php

class User_m extends CI_Model {

    public function authenticate($userName,$password) {
        $query = $this->db->query(" SELECT * FROM user u
                                    WHERE u.name='$userName'
                                    AND u.password='$password'");
        return $query->result();
    }

}
