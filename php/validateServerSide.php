<?php

$name_error = $email_error = $message_error = "";
$firstName = $lastName = $email = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error .= "\n Error: Naam is een verplicht veld";
    }
    else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $name_error .= "\n Alleen letters en spaties toegestaan";
        }
    }
}


?>