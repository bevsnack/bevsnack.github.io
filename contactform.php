<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phoneNumber = $_POST['number'];
    $comments = $_POST['comments'];
    
    $mailTo = "johnfav03@yahoo.com";
    $headers = "From: Bevsnacks";
    $txt = "You have received an e-mail from ".$name." at ".$mailFrom." or ".$phoneNumber.".\n\nComments: \n".$comments;
    
    mail($mailTo,"Bevsnack Contact Form Results",$txt,$headers);
    header("Location: contact.html?mailsend");
};

?>