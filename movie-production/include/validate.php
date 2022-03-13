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
?>