<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index.php');
	}

	function loadBestRatedPoliceStations(){
		$this->load->view('graphs/bestRatedPoliceStations');
	}

	function loadHighestChildAbuseComplains(){
		$this->load->view('graphs/highestChildAbuseComplains');
	}

	function loadHighestDomesticViolenceComplains(){
		$this->load->view('graphs/highestDomesticViolenceComplains');
	}

	function loadHighestOtherComplains(){
		$this->load->view('graphs/highestOtherComplains');
	}

	function loadHighestRapeComplains(){
		$this->load->view('graphs/highestRapeComplains');
	}

	function loadHighestTheftComplains(){
		$this->load->view('graphs/highestTheftComplains');
	}

	function loadHighestTrafficOffenceComplains(){
		$this->load->view('graphs/highestTrafficOffencesComplains');
	}

	function loadProblemTypesGraph(){
		$this->load->view('graphs/problemTypeCount');
	}

	function loadWorstRatedPoliceStations(){
		$this->load->view('graphs/worstRatedPoliceStations');
	}

}
