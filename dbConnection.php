<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName= "web";

    $dbConnection = mysqli_connect($serverName, $userName, $password, $dbName);
    if($dbConnection){
        print_r($dbConnection)."<br>";
        echo "<br>"."connection succesfull";
    }else{
        print_r($dbConnection)."<br>";
        echo "<br>"."connection Failed";
    }
?>