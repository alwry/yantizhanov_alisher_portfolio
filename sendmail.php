<?php

require_once('includes/connect.php');

///gather the form content
$name = $_POST['name'];
$brief = $_POST['brief'];
$email = $_POST['email'];
$field = $_POST['field'];
$budget = $_POST['budget'];
$deadline = $_POST['deadline'];

$errors = [];

//validate and clean these values


if(empty($name)) {
    $errors['name'] = 'Name cant be empty';
}

if(empty($brief)) {
    $errors['brief'] = 'Brief cant be empty';
}

if(empty($deadline)) {
    $errors['deadline'] = 'Deadline cant be empty';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contact_form (name, brief, email, field, budget, deadline) VALUES(:name, :brief, :email, :field, :budget, :deadline)";

    $stmt = $connect->prepare($query);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':brief', $brief);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':field', $field);
    $stmt->bindParam(':budget', $budget);
    $stmt->bindParam(':deadline', $deadline);

    if ($stmt->execute()) {
        // Format and send these values in an email
        $to = 'i@alishdesign.ca';
        $subject = 'Message from your Portfolio site!';

        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: " . $name . " " . $email . "\n";
        $message .= "Field: " . $field . "\n\n";
        $message .= "Brief: " . $brief . "\n\n";
        $message .= "Budget: " . $budget . "\n\n";
        $message .= "Deadline: " . $deadline . "\n\n";
        // Build out the rest of the message body...

        mail($to, $subject, $message);

        header('Location: success.html');
        exit;
    } else {


    for($i=0; $i < count($errors); $i++) {
        echo $errors[$i].'<br>';
    }
}
}


?>