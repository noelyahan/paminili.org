<?php

class Login extends CI_Controller {

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
            $this->load->library('session');
            $this->session->set_userdata(array(
                'userId' => $results[0]->id,
                'userName' => $results[0]->name,
                'userRole' => $results[0]->user_role,
            ));



            $this->output->set_status_header('200');
            $this->output->set_output(json_encode($results));
        } else {
            $this->output->set_status_header('401');
        }
    }

}
