<?php
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
    
        return $data;
    
    }
    
    function validate_name($title) {
        $pattern = "/^[a-zA-Z-' ]*$/";
        return preg_match($pattern, $name) === 1;
    }
    
    function validate_name($director) {
        $pattern = "/^[a-zA-Z-' ]*$/";
        return preg_match($pattern, $name) === 1;
    }
    
    function validate_date($release_date) {
        $pattern = '/^([0-9]{4})\\-([0-9]{2})\\-([0-9]{2})$/';
        $matches = array();
        $valid = (preg_match($pattern, $date, $matches) === 1);
        if ($valid) {
            $valid = (checkdate($matches[2], $matches[3], $matches[1]));
        }
        return $valid;
    }
    function validate_date($synopsis{
        $pattern = "/^[a-zA-Z-' ]*$/";
        return preg_match($pattern, $name) === 1;
        return $valid;
    }




    function movie_validate($data) {
        $errors = [];
        $movie = [];
    
        // validate title
    
       if (empty($data["title"])) {
            $errors ["title"] = "The title field is required";
        }
    
        else {
            $movie ["title"] = sanitize_input($data["title"]);
            if (!validate_name($movie["name"])) {
                $errors["title"] = "Only letters and spaces are allowed";
            }
        }
    
         // validate director
    
        if (empty($data["director"])) {
            $errors ["director"] = "The diretor field is required";
        }
    
        else {
            $movie ["director"] = sanitize_input($data["director"]);
            if (!validate_address($patient["director"])) {
                $errors["director"] = "Only letters, numbers and spaces are allowed";
            }
        }
    
         // validate release date
    
         if (empty($data["rdate"])) {
            $errors ["rdate"] = "The release date field is required";
        }
    
        else {
            $patient ["rdate"] = sanitize_input($data["rdate"]);
            if (!validate_phone($patient["rdate"])) {
                $errors["rdate"] = "invalid";
            }
        }
    
         // validate release date
    
         if (empty($data["email"])) {
            $errors ["email"] = "The email field is required";
        }
    
        else {
            $patient ["email"] = sanitize_input($data["email"]);
            if (!validate_email($patient["email"])) {
                $errors["email"] = "Invalid email format";
            }
        }
    
         // validate production company
    
         if (empty($data["pcom"])) {
            $errors ["pcom"] = "The production company field is required";
        }
    
        else {
            $patient ["pcom"] = sanitize_input($data["pcom"]);
            }
        }
    
         // validate synopsis
    
         if (empty($data["synopsis"])) {
            $errors ["synopsis"] = "The synopsis is required";
        }
    
        else {
            $patient ["synopsis"] = sanitize_input($data["dob"]);
            if (!validate_date($patient["dob"])) {
                $errors["synopis"] = "Invalid synopis";
            }
        }
    
         // validate insurance
    
         if (empty($data["insurance"])) {
            $errors ["insurance"] = "The insurances field is required";
        }
    
        else {
            $patient ["insurance"] = sanitize_input($data["insurance"]);
            
        }
    
         // validate preferences
    
         if (empty($data["preferences"])) {
            $errors ["preferences"] = "The preferences field is required";
        }
    
        else {
            $patient["preferences"] = [];
            foreach ($data["preferences"] as $preference) {
                $patient["preferences"][] = sanitize_input($preference);
            }
        }

        return [
            $patient,
            $errors
        ];
    }

    
?>