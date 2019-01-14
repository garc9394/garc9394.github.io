<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// $_helper = $this->helper('catalog/output');
// $_product = $this->getProduct();


// get posted data into local variables
$partNumber = Trim(stripslashes($_REQUEST['partNumber']));
$EmailTo = "wendy.c@siig.com";
$Subject = "Sales inquiry about SIIG product part # $partNumber";
$fullName = Trim(stripslashes($_REQUEST['fullName'])); 
$company = Trim(stripslashes($_REQUEST['company']));
$EmailFrom = Trim(stripslashes($_REQUEST['email']));
$phone = Trim(stripslashes($_REQUEST['phone']));
$message = Trim(stripslashes($_REQUEST['message']));

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $fullName;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $company;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Part Number: ";
$Body .= $partNumber;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <siigonline@siig.com>\r\nReply-to: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=inquiry-pro-av-sent\">";
}
else{
// do nothing
}
?>
