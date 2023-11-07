<?php

    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "register_db";

    // Create Connection
    $conn = mysqli_connect ($servername, $username, $password, $dbname);

    // Check conneection
    if (!$conn) {
        die("Connection failed" . mysqli_conner_error());
    }

?>