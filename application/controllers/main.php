<?php

class Main extends CI_Controller {

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
        $this->controlUserViews('graphs/bestRatedPoliceStations');
    }

    public function loadHighestChildAbuseComplains() {
        $this->controlUserViews('graphs/highestChildAbuseComplains');
    }

    public function loadHighestDomesticViolenceComplains() {
        $this->controlUserViews('graphs/highestDomesticViolenceComplains');
    }

    public function loadHighestOtherComplains() {
        $this->controlUserViews('graphs/highestOtherComplains');
    }

    public function loadHighestRapeComplains() {
        $this->controlUserViews('graphs/highestRapeComplains');
    }

    public function loadHighestTheftComplains() {
        $this->controlUserViews('graphs/highestTheftComplains');
    }

    public function loadHighestTrafficOffenceComplains() {
        $this->controlUserViews('graphs/highestTrafficOffencesComplains');
    }

    public function loadProblemTypesGraph() {
        $this->controlUserViews('graphs/problemTypeCount');
    }

    public function loadWorstRatedPoliceStations() {
        $this->controlUserViews('graphs/worstRatedPoliceStations');
    }

    public function post_test() {
        $this->load->view('post_test');
    }
   

}
