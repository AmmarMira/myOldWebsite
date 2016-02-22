<?php 

    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $myMail = "io.ammarr@gmail.com";
    
    if (strlen($email) > 2 && strlen($message) > 2) {
        
        mail($myMail, $subject, "Client name is ". $name . " and their message is: " . $message);
        
    }else{
        echo "Your email it's too short!";
    }
    


?>