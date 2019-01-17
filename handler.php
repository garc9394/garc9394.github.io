<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require_once './vendor/autoload.php';

// use FormGuide\Handlx\FormHandler;

// $pp = new FormHandler(); 

// $validator = $pp->getValidator();
// $validator->fields(['name','email'])->areRequired()->maxLength(50);
// $validator->field('email')->isEmail();
// $validator->field('message')->maxLength(6000);

// $pp->sendEmailTo('garcheuy@yahoo.com');

// echo $pp->process($_POST);


require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("garcheuy@yahoo.com", "Gar Cheuy");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("garcheuy@yahoo.com", "Gar Cheuy");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}