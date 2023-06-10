<?php

    require_once "../activities.php";

    $activity = new Activities();

    if($_SERVER["REQUEST_METHOD"] == "GET"){ 
        die("SUSCESS");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        
        if($_GET["endpoint"] == "service") {

            if (!isset($_POST["worktype"]) || empty($_POST["worktype"])) {
                die(json_encode(array("success"=>false, "message"=>"work type is required! Please choose one.")));
            }
            if (!isset($_POST["description"]) || empty($_POST["description"])) {
                die(json_encode(array("success"=>false, "message"=>"Description is required! Please tell us about the work.")));
            }
            if (!isset($_POST["worktype"]) || empty($_POST["worktype"])) {
                die(json_encode(array("success"=>false, "message"=>"Phone number is required! Please specify a number we can reach you on.")));
            }

            $type = htmlspecialchars($_POST["worktype"]);
            $description = htmlspecialchars($_POST["description"]);
            $phone = htmlspecialchars($_POST["phone"]);

            if(!empty($_FILES)) {

            }

            $image1 = "";
            $image2 = "";

            $result = $activity->requestService($type, $description, $phone, $image1, $image2);

            if ($result) {
                die(json_encode(array("success"=>true, "message"=>"Service request successful!")));
            } else {
                die(json_encode(array("success"=>false, "message"=>"Service request failed!")));
            }
        }
        
        die($response);
    }


?> 