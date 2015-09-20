<?php

class Main extends CI_Controller {
    function index() {
        $this->load->view('index');
    }
    
    function home() {
        $this->load->helper('url');
        $this->load->view('home');
    }

    function questions() {
        $this->load->view('questions');
    }

    function statistics() {
        $this->load->view('statistics');
    }



}