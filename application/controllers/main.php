<?php

class Main extends CI_Controller {
    function index() {
        $this->load->view('index');
    }
    
    function home() {
        $this->load->view('home');
    }
}