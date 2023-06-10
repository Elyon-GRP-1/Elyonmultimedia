<?php

require_once "DbConnect.php";

class activities {

    private $con;

    public function __construct()
    {
        $dbObj = new Dbconnect();
        $this->con = $dbObj->connect(); 
    }

    public function addservice ($work_type, $description, $image, $s_image, $WhatsApp_no, $s_status){
    
        $query = "INSERT INTO `service_info` VALUES ($work_type, $description, $image, $s_image, $WhatsApp_no, $s_status)";
    }

    public function requestService($type, $description, $phone, $image1 = "", $image2 = "")
    {
        $query = "INSERT INTO  `service_info` (`work_type`, `description`, `WhatsApp_no`, `image1`, `image2`) 
                VALUES ('$type', '$description', '$phone', '$image1', '$image2')";
        if ($this->con->query($query) === TRUE) {
            return true;
        }
        return false;
    }
} 

    


