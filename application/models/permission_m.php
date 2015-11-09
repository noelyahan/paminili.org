<?php

class Permission_m extends CI_Model {

    public function getAlowedURLsByUserRole($userRoleId) {
        $query = $this->db->query("SELECT p.url FROM permission p
                                    WHERE p.permission_category IN(
                                    SELECT rp.permission_category FROM user_role_permission_category rp,
                                    user_role r
                                    WHERE r.id=$userRoleId
                                    AND rp.user_role=r.id
                                    )");
        return $query->result();
    }

}
