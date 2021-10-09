<?php
    function openCon(){
        $db_name = "apna_house_designs";
        $db_user = "root";
        $db_password = "";
        $db_host = "localhost";

        $conn = new mysqli($db_host, $db_user, $db_password, $db_name) or die("Connection Failed: %s\n". $conn->error);
        return $conn;
    }

    function closeCon($conn){
        $conn-> close();
    }
?>