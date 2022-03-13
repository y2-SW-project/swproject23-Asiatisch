<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "Process request!!";
    
    echo "<pre>\$_POST = " ;
    print_r($_POST);
    echo "</pre>";       

else {
    http_response_code(405);
}

?>