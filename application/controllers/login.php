<?php


class Login extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->auth();
    }

    

    private function auth() {
        $userName = $this->input->post('userName');
        $password = $this->input->post('password');

        $this->load->model('user_m');
        $user = new User_m();
        $results = $user->authenticate($userName, $password);
        if (count($results) == 1) {
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

    public function logout() {
        $this->session->unset_userdata('userId');
        $this->session->unset_userdata('userName');
        $this->session->unset_userdata('userRole');
        $this->session->unset_userdata('permissions');
        $this->session->sess_destroy();
        $this->load->view('login');
    }

}
