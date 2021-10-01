<?php

require 'vendor/autoload.php';

use SMTPValidateEmail\Validator as SmtpEmailValidator;

/**
 * Simple example
 */
$email = $_REQUEST["email"];

$sender = $_REQUEST["sender"];


// if (is_null($_REQUEST["email"])) {
//     $email = "support@turing.com";
// } else {
//     $email = $_REQUEST["email"];
// }
// if (is_null($_REQUEST["sender"])) {
//     $sender = "hiring@turing.com";
// } else {
//     $sender = $_REQUEST["sender"];
// }

$validator = new SmtpEmailValidator($email, $sender);

// If debug mode is turned on, logged data is printed as it happens:
// $validator->debug = true;
$results   = $validator->validate();



echo json_encode($results);


// var_dump($results);


// Get log data (log data is always collected)
// $log = $validator->getLog();
// var_dump($log);

// $response['status_code_header'] = 'HTTP/1.1 200 OK';
// $response['body'] = json_encode($results);

// return $response;
