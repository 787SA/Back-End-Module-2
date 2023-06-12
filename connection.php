<?php
$host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "student44-353031375b36";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) 
            die('Could not connect to the database.')

            ?>