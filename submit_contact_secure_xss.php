<?php

// submit_contact.php
//To avoid the XSS flaw, simply apply the htmlspecialchars or strip_tags function on all texts sent by your visitors
//Secure for XSS (for cross-site scripting)
//SEE : Open Web Application Security Project : OWASP
//secure form receipt code (with post  ), which provides for all cases to avoid being caught off guard by an ill-intentioned user
if (!isset($_POST['email']) || !isset($_POST['message']))
{
	echo('You need an email and a message to submit the form.');
    return;
}	

$email = $_POST['email'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>..... - ......</title>
        
    </head>
    <body>
        <div class="container">
    
        <?php include_once('header.php'); ?>
            <h1>OK</h1>
            
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">infos</h5>
                    <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
                    <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
                </div>
            </div>
        </div>
    </body>
</html>