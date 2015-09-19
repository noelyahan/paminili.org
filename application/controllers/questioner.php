<?php

class Questioner extends CI_Controller {
    function index() {
        $data = $this->input->post('name');
        echo 'Welcome ' . $data;
        
    }
    public function add() {
        $this->load->model('Questioner_m');
        $questioner = new Questioner_m();
        $questioner->police_station_id = $this->input->post('police_station_id');
        $questioner->complain_type = $this->input->post('complain_type');
        $questioner->is_complain_written = $this->input->post('is_complain_written');
        $questioner->complain_record_time = $this->input->post('complain_record_time');
        $questioner->is_your_language = $this->input->post('is_your_language');
        $questioner->provide_female_officer = $this->input->post('provide_female_officer');
        $questioner->time_taken_to_medical_service = $this->input->post('time_taken_to_medical_service');
        $questioner->efficient = $this->input->post('efficient');
        $questioner->friendly = $this->input->post('friendly');
        $questioner->intimidating = $this->input->post('intimidating');
        $questioner->humiliating = $this->input->post('humiliating');
        $questioner->score = $this->input->post('score');
        $questioner->save();
    }
    
    function get($id) {
        $this->load->model('Questioner_m');
        $questioner = new Questioner_m();
        $questioner->load($id);
        var_dump(json_encode($questioner));
    }
}