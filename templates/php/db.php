<?php 


    $server = "sql113.epizy.com";
    $username = "epiz_31971368";
    $password = "2wLvyFhBCo3581z";
    $dbname = "epiz_31971368_pesonline";
    
    $conn = mysqli_connect ("localhost", "root", "", "pesonline");

    if(!$conn){
        die("Connected Failed:"mysqli_connect_error());
    }

?>