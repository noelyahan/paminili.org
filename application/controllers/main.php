<?php

class Main extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->controlUserViews('index');
    }

    function home() {
        $this->controlUserViews('home');
    }

    function questions() {
        $this->controlUserViews('questions');
    }

    function statistics() {
        $this->controlUserViews('statistics');
    }

    function loadBestRatedPoliceStations() {
        //$this->controlUserViews('graphs/bestRatedPoliceStations');
        $this->load->view('graphs/bestRatedPoliceStations');
    }

    public function loadHighestChildAbuseComplains() {
        //$this->controlUserViews('graphs/highestChildAbuseComplains');
        $this->load->view('graphs/highestChildAbuseComplains');
    }

    public function loadHighestDomesticViolenceComplains() {
        //$this->controlUserViews('graphs/highestDomesticViolenceComplains');
        $this->load->view('graphs/highestDomesticViolenceComplains');
    }

    public function loadHighestOtherComplains() {
        //$this->controlUserViews('graphs/highestOtherComplains');
        $this->load->view('graphs/highestOtherComplains');
    }

    public function loadHighestRapeComplains() {
        //$this->controlUserViews('graphs/highestRapeComplains');
        $this->load->view('graphs/highestRapeComplains');
    }

    public function loadHighestTheftComplains() {
        //$this->controlUserViews('graphs/highestTheftComplains');
        $this->load->view('graphs/highestTheftComplains');
    }

    public function loadHighestTrafficOffenceComplains() {
        //$this->controlUserViews('graphs/highestTrafficOffencesComplains');
        $this->load->view('graphs/highestTrafficOffencesComplains');
    }

    public function loadProblemTypesGraph() {
        //$this->controlUserViews('graphs/problemTypeCount');
        $this->load->view('graphs/problemTypeCount');
    }

    public function loadWorstRatedPoliceStations() {
        //$this->controlUserViews('graphs/worstRatedPoliceStations');
        $this->load->view('graphs/worstRatedPoliceStations');
    }

    public function post_test() {
        $this->load->view('post_test');
    }

}
