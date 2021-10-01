<?php

require 'vendor/autoload.php';

use SMTPValidateEmail\Validator as SmtpEmailValidator;

/**
 * Validating multiple addresses/recipients at once:
 * (checking multiple addresses belonging to the same server
 * uses a single connection)
 */
// $emails    = [
//     'rodrixx.31121@gmail.com',
//     'rodrixx.3112@gmail.com',
//     "rodrixkjx.31121@gmail.com",
//     "rodrixx.311jh21@gmail.com"
// ];
$sender    = 'rodrixx.311215@gmail.com';
// $validator = new SmtpEmailValidator($emails, $sender);
// $results   = $validator->validate();
// echo json_encode($results);
// var_dump($results);


$DataGeneration = fopen("DataGeneration.txt", "r");
$DataGenerationOutput = fopen("DataGenerationOutput.txt", "a");

if ($DataGeneration) {
    $index = 1;
    while (($line = fgets($DataGeneration)) !== false) {
        // process the line read.
        if ($index < 92) { // 91 rows completed
            $index++;
            continue;
        }

        // $line = str_replace(array("\n","\r\n","\r"), '', $line);
        $line = str_replace(PHP_EOL, '', $line); // remove new line
        $emails = explode(",emails::", $line)[1];
        $emails = explode("||", $emails); // split emails
        try {
            $validator = new SmtpEmailValidator($emails, $sender);
            $results   = $validator->validate();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        fwrite($DataGenerationOutput, $index . ",output::" . json_encode($results) . "\n");

        $validator = null;
        $index++;
    }

    fclose($DataGeneration);
} else {
    // error opening the file.
}
