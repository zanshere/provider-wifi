<?php
require 'config.php';

    $conn = new mysqli (
        $_ENV['DB_HOST'],
        $_ENV['DB_USERNAME'],
        $_ENV['DB_PASSWORD'] ?: '',
        $_ENV['DB_DATABASE']
    );

    if($conn->connect_error){
        die("Cannot Connect to Database " . $conn->connect_error);
    }

?>