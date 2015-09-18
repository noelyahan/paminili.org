<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PoliceStation extends CI_Controller {

    /**
     * Index page for Magazine controller.
     */
    public function index() {
        $this->load->view('addpolicestation');
        $this->load->model('PoliceStation_m');
        $policeStation = new PoliceStation_m();
        $policeStation->name = $this->input->post('name');
        $policeStation->province = $this->input->post('province');
        $policeStation->district = $this->input->post('district');
        $policeStation->save();
    }

    public function add() {
        $this->load->view('addpolicestation');
        $this->load->model('PoliceStation_m');
        $policeStation = new PoliceStation_m();
        $policeStation->name = $this->input->post('name');
        $policeStation->province = $this->input->post('province');
        $policeStation->district = $this->input->post('district');
        $policeStation->save();
    }

    public function getByProvince($value) {
        $this->load->model('PoliceStation_m');
        $policeStation = new PoliceStation_m();
        echo json_encode($policeStation->loadByColumn('province', $value));
    }

    public function getByDistrict($value) {
        $this->load->model('PoliceStation_m');
        $policeStation = new PoliceStation_m();
        echo json_encode($policeStation->loadByColumn('district', $value));
    }

    public function getByName($value) {
        $this->load->model('PoliceStation_m');
        $policeStation = new PoliceStation_m();
        echo json_encode($policeStation->loadByColumn('name', $value));
    }
    public function getById($id) {
        $data = array();
        $this->load->model('PoliceStation_m');
        $policeStation = new PoliceStation_m();
        $policeStation->load($id);
        $data['policestation'] = $policeStation;
        echo json_encode($data);
    }

}
