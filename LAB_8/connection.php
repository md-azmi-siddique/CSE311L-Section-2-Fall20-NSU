<?php

$mysqli_connection = new mySQLi("Localhost", "root","","project_test");

if($mysqli_connection->connect_error){

    echo"Not connected error". $mysqli_connection->connect_error;
}

else{

    echo"Connected";
}

?>
