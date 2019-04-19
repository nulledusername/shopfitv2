<?php

$server = 'localhost';
$username = 'lucho';
$password = 'Fidelymateo150*0';
$database = 'katanalite';

try {
  $conn = new PDO("mysqli:host=$server;dbname=$database;", $username, $password);

?>
