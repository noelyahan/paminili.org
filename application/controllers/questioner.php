<?php

class Questioner extends My_Controller {
    function index() {
        $data = $this->input->post('name');
        echo 'Welcome ' . $data;
        
    }
    public function add() {
        $this->load->model('Questioner_m');
        $questioner = new Questioner_m();
        $questioner->police_station_id = $this->input->get('police_station_id');
        $questioner->complain_type = $this->input->get('complain_type');
        $questioner->is_complain_written = $this->input->get('is_complain_written');
        $questioner->complain_record_time = $this->input->get('complain_record_time');
        $questioner->is_your_language = $this->input->get('is_your_language');
        $questioner->provide_female_officer = $this->input->get('provide_female_officer');
        $questioner->time_taken_to_medical_service = $this->input->get('time_taken_to_medical_service');
        $questioner->efficient = $this->input->get('efficient');
        $questioner->friendly = $this->input->get('friendly');
        $questioner->intimidating = $this->input->get('intimidating');
        $questioner->humiliating = $this->input->get('humiliating');
        $questioner->score = $this->input->get('score');
        $questioner->save();
        echo 'echo';
    }
    
    function get($id) {
        $this->load->model('Questioner_m');
        $questioner = new Questioner_m();
        $questioner->load($id);
        var_dump(json_encode($questioner));
    }
}