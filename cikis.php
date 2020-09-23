<?php

session_start(); //oturumu başlat
$_SESSION=array();
session_destroy();
header("location: get_users.php");

?>