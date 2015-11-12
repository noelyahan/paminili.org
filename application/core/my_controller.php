<?php

class My_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function controlUserViews($view) {

        if ($this->isAuthenticated()) {
            if ($this->isPermitted()) {
                $this->load->view($view);
            } else {
                $this->load->view('permissionError');
            }
        } else {
            $this->loginAsAnonymous('anonymous');
            if ($this->isPermitted()) {
                $this->load->view($view);
            } else {
                $this->load->view('permissionError');
            }
        }
    }

    public function controlUserRequests() {

        if ($this->isAuthenticated()) {
            if ($this->isPermitted()) {
                return true;
            } else {
                $this->load->view('permissionError');
            }
        } else {
            $this->load->view('login');
        }
    }

    private function isAuthenticated() {
        $this->load->library('session');
        $userid = $this->session->userdata('userId');
        if (isset($userid) && $userid != '' && $userid > 0) {
            return true;
        }
        return false;
    }

    private function isPermitted() {
        $uri = current_url();
        if (in_array(strtolower($uri), $this->session->userdata('permissions'))) {
            return true;
        }
        return false;
    }

    private function loginAsAnonymous($userName) {

        $this->load->model('user_m');
        $user = new User_m();
        $results = $user->authenticateAsAnonymous($userName);
        if (count($results) == 1) {
            $this->load->library('session');
            $this->session->set_userdata(array(
                'userId' => $results[0]->id,
                'userName' => $results[0]->name,
                'userRole' => $results[0]->user_role,
            ));
            $this->load->model('permission_m');
            $permision = new Permission_m();

            $results = $permision->getAlowedURLsByUserRole($results[0]->user_role);
            $resultsArray = array();
            foreach ($results as $key => $value) {
                $resultsArray[] = $value->url;
            }

            $this->session->set_userdata(array(
                'permissions' => $resultsArray,
            ));

            $this->output->set_status_header('200');
        } else {
            $this->output->set_status_header('401');
        }
    }

}
