<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "medical_centre";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "connected to database successfully";
    }
    catch (PDOException $e){
        echo "Error" , $e ->getMessage();
    }
?>

