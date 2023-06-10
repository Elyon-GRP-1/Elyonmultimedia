<?php

    require_once "../classes/Credentials.php";

    $credentials = new Credentials();

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        die("SUSCESS");
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if ($_GET["endpoint"] == "adminLogin") {
            $result = $credentials->loginAdmin($_POST["email"], $_POST["password"]);
            die(json_encode($result));
        }
        
        if ($_GET["endpoint"] == "adminRegister") {
            $result = $credentials->createAdminAccount($_POST["name"],$_POST["email"], $_POST["password"]);
            die(json_encode($result));
        }

        
    }
?>