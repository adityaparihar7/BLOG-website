<?php
session_start();
require 'config/constants.php';

// Connect to the database
$connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_USER);

if(mysqli_errno($connection)){
    die(mysqli_error($connection));
}
