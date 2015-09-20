<?php

class Main extends CI_Controller
{
    function index()
    {
        $this->load->view('index');
    }

    function home()
    {
        $this->load->helper('url');
        $this->load->view('home');
    }

    function questions()
    {
        $this->load->view('questions');
    }

    function statistics()
    {
        $this->load->view('statistics');
    }

    public function loadBestRatedPoliceStations()
    {
        $this->load->view('graphs/bestRatedPoliceStations');
    }

    public function loadHighestChildAbuseComplains()
    {
        $this->load->view('graphs/highestChildAbuseComplains');
    }

    public function loadHighestDomesticViolenceComplains()
    {
        $this->load->view('graphs/highestDomesticViolenceComplains');
    }

    public function loadHighestOtherComplains()
    {
        $this->load->view('graphs/highestOtherComplains');
    }

    public function loadHighestRapeComplains()
    {
        $this->load->view('graphs/highestRapeComplains');
    }

    public function loadHighestTheftComplains()
    {
        $this->load->view('graphs/highestTheftComplains');
    }

    public function loadHighestTrafficOffenceComplains()
    {
        $this->load->view('graphs/highestTrafficOffencesComplains');
    }

    public function loadProblemTypesGraph()
    {
        $this->load->view('graphs/problemTypeCount');
    }

    public function loadWorstRatedPoliceStations()
    {
        $this->load->view('graphs/worstRatedPoliceStations');
    }
}