


<?php
$link = mysqli_connect("Localhost", "root","");

if($link == false){
    die("Error: Could not connect".mysqli_connect_error());
}

$sql = "Create Database CSE311";

if(mysqli_query($link,$sql)){
    echo"Database created";
} else{
    echo"Error: Conldn't connect". mysqli_connect_error($link);
}
?>
