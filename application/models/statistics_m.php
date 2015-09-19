<?php

class Statistics_m extends CI_Model {

    public function getAverageScoreVsPoliceStationData() {
        $query = $this->db->query("SELECT police_station.name,SUM(question.score) AS 'avg_score'
                                    FROM police_station ,question
                                    WHERE  police_station.id=question.police_station_id
                                    GROUP BY police_station.id ORDER BY 2 DESC LIMIT 10");
        return $query->result();
    }

    public function getProbilemTypeVsNoOfComplaints() {
        $query = $this->db->query("SELECT q.complain_type, COUNT(q.id) AS 'no_of_Complains'
                                    FROM question q
                                    GROUP BY q.complain_type ORDER BY 2 DESC LIMIT 10");
        return $query->result();
    }

    public function getHighestRapeComplaintCountByPoliceStation() {
        $query = $this->db->query("SELECT COUNT(p.id) AS 'complaint Count',p.name FROM police_station p , question q
                                    WHERE p.id=q.police_station_id
                                    AND q.complain_type='Rape'
                                    GROUP BY p.id 
                                    ORDER BY 1 DESC
                                    LIMIT 10");
        return $query->result();
    }
    public function getHighestChildAbuseComplaintCountByPoliceStation() {
        $query = $this->db->query("SELECT COUNT(p.id) AS 'complaint Count',p.name FROM police_station p , question q
                                    WHERE p.id=q.police_station_id
                                    AND q.complain_type='Child Abuse'
                                    GROUP BY p.id 
                                    ORDER BY 1 DESC
                                    LIMIT 10");
        return $query->result();
    }
    public function getHighestDomesticViolenceComplaintCountByPoliceStation() {
        $query = $this->db->query("SELECT COUNT(p.id) AS 'complaint Count',p.name FROM police_station p , question q
                                    WHERE p.id=q.police_station_id
                                    AND q.complain_type='Domestic Violence'
                                    GROUP BY p.id 
                                    ORDER BY 1 DESC
                                    LIMIT 10");
        return $query->result();
    }
    public function getHighestSexualHarasmentComplaintCountByPoliceStation() {
        $query = $this->db->query("SELECT COUNT(p.id) AS 'complaint Count',p.name FROM police_station p , question q
                                    WHERE p.id=q.police_station_id
                                    AND q.complain_type='Sexual Harassment'
                                    GROUP BY p.id 
                                    ORDER BY 1 DESC
                                    LIMIT 10");
        return $query->result();
    }
    public function getHighestTheftComplaintCountByPoliceStation() {
        $query = $this->db->query("SELECT COUNT(p.id) AS 'complaint Count',p.name FROM police_station p , question q
                                    WHERE p.id=q.police_station_id
                                    AND q.complain_type='Theft'
                                    GROUP BY p.id 
                                    ORDER BY 1 DESC
                                    LIMIT 10");
        return $query->result();
    }
    public function getHighestTrafficOffencesComplaintCountByPoliceStation() {
        $query = $this->db->query("SELECT COUNT(p.id) AS 'complaint Count',p.name FROM police_station p , question q
                                    WHERE p.id=q.police_station_id
                                    AND q.complain_type='Traffic Offences'
                                    GROUP BY p.id 
                                    ORDER BY 1 DESC
                                    LIMIT 10");
        return $query->result();
    }
    public function getHighestOtherComplaintCountByPoliceStation() {
        $query = $this->db->query("SELECT COUNT(p.id) AS 'complaint Count',p.name FROM police_station p , question q
                                    WHERE p.id=q.police_station_id
                                    AND q.complain_type='Other'
                                    GROUP BY p.id 
                                    ORDER BY 1 DESC
                                    LIMIT 10");
        return $query->result();
    }

}
