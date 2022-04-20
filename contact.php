<?php
    $errors = '';
    $myemail = 'tabkasahar3@gmail.com';//<-----Put Your email address here.
    if(empty($_POST['société'])  ||
      empty($_POST['nom,prénom'])  ||
       empty($_POST['mail']) ||
       empty($_POST['téléphone']) ||
       empty($_POST['message']))
    {
        $errors .= "\n Error: all fields are required";
    }
    $société = $_POST['société'];
    $nomprénom = $_POST['nom,prénom'];
    $email_address = $_POST['mail'];
    $téléphone = $_POST['téléphone'];
    $message = $_POST['message'];
    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }
    
    if( empty($errors))
    {
    $to = $myemail;
    $email_subject = "Contact form submission";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Société: $société \n Nom,Prénom: $nomprénom \n" .
    "Email: $email_address\n Téléphone : $téléphone \n message: $message";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: contact-form-thank-you.php');
    }
    ?>