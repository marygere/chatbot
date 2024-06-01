<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "chatbot";

    //creating database connection
    $conn = mysqli_connect($host, $username, $password, $database);

    //check database connection
    if(!$conn)
    {
        die("connection Failed: ". mysqli_connect_error());
    }

?>
