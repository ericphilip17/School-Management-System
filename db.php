<?php
function getConnection(){
    $server = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname = 'soma_students';

    $conn = mysqli_connect($server,$dbUsername,$dbPassword,$dbname,3306);

    if(!$conn){
        die("Failed to connect");
    }

    return $conn;
}


function executeQuery($sql){
    $conn = getConnection();

    return mysqli_query($conn,$sql);
}