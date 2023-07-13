<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("we are failed to connect : " . mysqli_connect_erroe());
}
else{
echo "connection was successful";
}




?>
