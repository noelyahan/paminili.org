<?php

class Questioner_m extends MY_Model {
    
    const DB_TABLE = "question";
    const DB_TABLE_PK = "id";
    
    /**
     * Questioner id (primary key)
     * @var int 
     */
    public $id;
    
    /**
     * Police station / division
     * @var int 
     */
    public $police_station_id;
    
    /**
     * ex: murder / rape etc ..
     * @var string 
     */
    public $complain_type;
    
    /**
     * currently storing as a string ex: (yes/no) 
     * @var string 
     */
    public $is_complain_written;
    
    /**
     * ex: 10 min, 10-20 mins 
     * @var string 
     */
    public $complain_record_time;
    
    /**
     * currently storing as a string ex: (yes/no) 
     * @var string 
     */
    public $is_your_language;
    
    /**
     * ex: yes/no/NA(not applicable) 
     * @var string 
     */
    public $provide_female_officer;
    
    /**
     * ex: 10 mins, 10-20 mins
     * @var string 
     */
    public $time_taken_to_medical_service;
    
    /**
     * currently as string ex: (yes/no)
     * @var string 
     */
    public $efficient;
    
    /**
     * currently as string ex: (yes/no)
     * @var string 
     */
    public $friendly;
    
    /**
     * currently as string ex: (yes/no)
     * @var string 
     */
    public $intimidating;
    
    /**
     * currently as string ex: (yes/no)
     * @var string 
     */
    public $humiliating;
    
    /**
     * Questioner score
     * @var double 
     */
    public $score;
    
    
    
    
}