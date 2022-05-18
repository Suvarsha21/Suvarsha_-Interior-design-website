<?php
$Full Name= $_POST['name']
$visitor_Email= $_POST['email']
$Mobile= $_POST['mobile no']
$Message= $_POST['message']

$email_from='info@yourwebsite.com';

$email_subject='New Form Submission';

$email_body = "Name: $Name.\n".
                "Email: $visitor_email.\n".
                  "Mobile no: $mobile.\n".
                        "Message: $Message.\n";

$to = 'suvarsha.venumbaka@gmail.com';

$headers = "From: $email_from \r\n";
                        
$headers .= "Reply-To:$visitor_email \r\n";
                        
mail($to, $email_subject, $email_body, $headers);
                        
header("Location: index.html");
?>
