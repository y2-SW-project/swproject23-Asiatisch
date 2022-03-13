<?php

require_once "include\patient_validate.php";
require_once "include\database_connection.php";



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "Process request!!";
    
    echo "<pre>\$_POST = " ;
    print_r($_POST);
    echo "</pre>";
    
     [$patient, $errors] = patient_validate($_POST);
     
    if(empty($errors)) {
        echo "<pre>\$patient = " ;
        print_r($patient);
        echo "</pre>"; 
    
        echo "<pre>\$errors = " ;
        print_r($errors);
        echo "</pre>";
        
        try {
            $centre = intval($patient["centre_id"]);
            $preferences = implode(',', $patient["preferences"]);

            $params = array (
                'name' => $patient["name"],
                'address' => $patient["address"],
                'phone' => $patient["phone"],
                'phone' => $patient["phone"],
                'email' => $patient["email"],
                'dob' => $patient["dob"],
                'centre_id' => $centre,
                'insurance' => $patient["insurance"],
                'preferences' => $preferences

            );

            $sql = "INSERT INTO patient(name, address, phone, email, dob, centre_id, insurance, preferences)
            VALUES (:name, :address, :phone, :email, :dob, :centre_id, :insurance, :preferences)";

            $stmt = $connection->prepare($sql);
            $success = $stmt->execute($params);

            if(!$success) {
                throw new Exception("Failed to save patient");
            }
        }
        catch(PDOException $e) {
            echo "error: " . $e->getMessage();
        }
        $connection = null;

        header("location: patient_view_all.php");
    }
    else {
        session_start();
        $_SESSION["data"] = $patient;
        $_SESSION["errors"] = $errors;
        header("location: patient_create_form.php");
    } 

}

else {
    http_response_code(405);
}

?>