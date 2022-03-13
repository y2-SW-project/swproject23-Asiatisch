<?php
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
    
        return $data;
    
    }
    
    function validate_name($name) {
        $pattern = "/^[a-zA-Z-' ]*$/";
        return preg_match($pattern, $name) === 1;
    }
    
    function validate_address($address) {
        $pattern = "/^[0-9a-zA-Z-', ]*$/";
        return preg_match($pattern, $address) === 1;
    }
    
    function validate_phone($phone) {
        $pattern = "/^\(?\s*\d{1,4}\s*\)?\s*[\d\s]{5,10}$/";
        return preg_match($pattern, $phone) === 1;
    }
    
    function validate_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    
    function validate_date($date) {
        $pattern = '/^([0-9]{4})\\-([0-9]{2})\\-([0-9]{2})$/';
        $matches = array();
        $valid = (preg_match($pattern, $date, $matches) === 1);
        if ($valid) {
            $valid = (checkdate($matches[2], $matches[3], $matches[1]));
        }
        return $valid;
    }




    function patient_validate($data) {
        $errors = [];
        $patient = [];
    
        // validate name
    
       if (empty($data["name"])) {
            $errors ["name"] = "The name field is required";
        }
    
        else {
            $patient ["name"] = sanitize_input($data["name"]);
            if (!validate_name($patient["name"])) {
                $errors["name"] = "Only letters and spaces are allowed";
            }
        }
    
         // validate address
    
        if (empty($data["address"])) {
            $errors ["address"] = "The address field is required";
        }
    
        else {
            $patient ["address"] = sanitize_input($data["address"]);
            if (!validate_address($patient["address"])) {
                $errors["address"] = "Only letters, numbers and spaces are allowed";
            }
        }
    
         // validate phone
    
         if (empty($data["phone"])) {
            $errors ["phone"] = "The phone field is required";
        }
    
        else {
            $patient ["phone"] = sanitize_input($data["phone"]);
            if (!validate_phone($patient["phone"])) {
                $errors["phone"] = "Phone number should be in (##) ######### format";
            }
        }
    
         // validate email
    
         if (empty($data["email"])) {
            $errors ["email"] = "The email field is required";
        }
    
        else {
            $patient ["email"] = sanitize_input($data["email"]);
            if (!validate_email($patient["email"])) {
                $errors["email"] = "Invalid email format";
            }
        }
    
         // validate date of birth
    
         if (empty($data["dob"])) {
            $errors ["dob"] = "The date of birth field is required";
        }
    
        else {
            $patient ["dob"] = sanitize_input($data["dob"]);
            if (!validate_date($patient["dob"])) {
                $errors["dob"] = "Invalid date of birth format";
            }
        }
    
         // validate medical centre
    
         if (empty($data["centre"])) {
            $errors ["centre"] = "The medical centre field is required";
        }
    
        else {
            $patient ["centre"] = sanitize_input($data["centre"]);
            /*  $valid_centres = [
                "Talbot St Medical Centre",
                 "Highfield Alzheimer's Care Centre",
                "Swords Health Center",
                 "Greystones Medical Centre",
                "Bray Medical Centre",
                 "Merrion Fertility Clinic"
             ];
            if (!in_array($patient, $valid_centres)) {
                $errors["centre"] = "Invalid option";
            } */
        }
    
         // validate insurance
    
         if (empty($data["insurance"])) {
            $errors ["insurance"] = "The insurance field is required";
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