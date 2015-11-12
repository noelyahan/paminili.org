<?php

class Statistics extends My_Controller {
    function index() {
      
    }
    public function getAverageScoreVsPoliceStationData() {
    $this->load->model('Statistics_m');
    $statistics = new Statistics_m();
    echo json_encode($statistics->getAverageScoreVsPoliceStationData());
}
    public function getWorstRatedPoliceStation() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getWorstRatedPoliceStation());
    }
    public function getProbilemTypeVsNoOfComplaints() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getProbilemTypeVsNoOfComplaints());
    }
    public function getHighestRapeComplaintCountByPoliceStation() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getHighestRapeComplaintCountByPoliceStation());
    }
    public function getHighestChildAbuseComplaintCountByPoliceStation() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getHighestChildAbuseComplaintCountByPoliceStation());
    }

    public function getHighestDomesticViolenceComplaintCountByPoliceStation() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getHighestDomesticViolenceComplaintCountByPoliceStation());
    }
    public function getHighestSexualHarasmentComplaintCountByPoliceStation() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getHighestSexualHarasmentComplaintCountByPoliceStation());
    }
    public function getHighestTheftComplaintCountByPoliceStation() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getHighestTheftComplaintCountByPoliceStation());
    }
    public function getHighestTrafficOffencesComplaintCountByPoliceStation() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getHighestTrafficOffencesComplaintCountByPoliceStation());
    }
    public function getHighestOtherComplaintCountByPoliceStation() {
        $this->load->model('Statistics_m');
        $statistics = new Statistics_m();
        echo json_encode($statistics->getHighestOtherComplaintCountByPoliceStation());
    }
    
    
}
