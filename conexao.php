<?php

$server = "localhost";
$user = "root";
$pwd = "";
$db = "mydb";

$con = new mysqli($server, $user, $pwd, $db);

if($con->connect_errno){
    echo "Erro";
} else{
}
?>