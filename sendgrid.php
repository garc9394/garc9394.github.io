<?php
// // If you are using Composer
// require 'vendor/autoload.php';

// // If you are not using Composer (recommended)
// // require("path/to/sendgrid-php/sendgrid-php.php");

// $from = new SendGrid\Email(null, "garcheuy@yahoo.com");
// $subject = "Hello World from the SendGrid PHP Library!";
// $to = new SendGrid\Email(null, "garcheuy@yahoo.com");
// $content = new SendGrid\Content("text/plain", "Hello, Email!");
// $mail = new SendGrid\Mail($from, $subject, $to, $content);

// $apiKey = getenv('SENDGRID_API_KEY');
// $sg = new \SendGrid($apiKey);

// $response = $sg->client->mail()->send()->post($mail);
// echo $response->statusCode();
// echo $response->headers();
// echo $response->body();


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

?>