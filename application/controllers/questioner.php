<?php

class Questioner extends CI_Controller {
    function index() {
        $data = $this->input->post('name');
        echo 'Welcome ' . $data;
        
    }
    
    function get($id) {
        $data = array();
        $this->load->model('Questioner_m');
        $questioner = new Questioner_m();
        $questioner->load($id);
        var_dump(json_encode($questioner));
    }
}