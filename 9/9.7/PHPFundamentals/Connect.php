<?php

    $dbPassword = "PHPFundamentals";
    $dbUserName = "PHPFundamentals";
    $dbServer = "localhost";
    $dbName = "PHPFundamentals";

    $connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

    print_r($connection);

    if($connection->connect_errno)
    {
        exit("Database Connection Failed. Reason: {$connection->connect_error}");
    }

?>