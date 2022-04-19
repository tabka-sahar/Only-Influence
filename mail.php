<?php
    $errors = '';
    $myemail = 'tabkasahar3@gmail.com';//<-----Put Your email address here.
    if(empty($_POST['nom'])  ||
      empty($_POST['prénom'])  ||
       empty($_POST['mail']) ||
       empty($_POST['entreprise']) ||
       empty($_POST['téléphone']))
    {
        $errors .= "\n Error: all fields are required";
    }
    $name = $_POST['nom'];
    $surname = $_POST['prénom'];
    $email_address = $_POST['mail'];
    $entreprise = $_POST['entreprise'];
    $téléphone = $_POST['téléphone'];
    if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address))
    {
        $errors .= "\n Error: Invalid email address";
    }
    
    if( empty($errors))
    {
    $to = $myemail;
    $email_subject = "Contact form submission: $name $surname";
    $email_body = "You have received a new message. ".
    " Here are the details:\n Nom: $name \n prénom: $surname \n" .
    "Email: $email_address\n entreprise : $entreprise\n téléphone: $téléphone";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);
    //redirect to the 'thank you' page
    header('Location: contact-form-thank-you.php');
    }
    ?>