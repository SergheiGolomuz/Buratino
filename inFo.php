<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $langClass = $_POST['langClass'];
    $tutor = $_POST['tutor'];
    $nameChild = $_POST['nameChild'];
    $childDOB = $_POST['childDOB'];
    $childGen = $_POST['childGen'];
    $homeAddress = $_POST['homeAddress'];
    $postcode = $_POST['postcode'];
    $parentContact = $_POST['parentContact'];
    $emergencyContact = $_POST['emergencyContact'];
    $childHealth = $_POST['childHealth'];
    $childMain = $_POST['childMain'];
    $childExp = $_POST['childExp'];
    $parentObj = $_POST['parentObj'];
    $parentName = $_POST['parentName'];

    // Compose email message
    $to = 'golomuzserghei@gmail.com';  // Replace with your email address
    $subject = 'Pupils Enrollment Form Submission';
    $message = "Language Class: $langClass\n";
    $message .= "Tutor In-Charge: $tutor\n";
    $message .= "Name of the Child: $nameChild\n";
    $message .= "Date of Birth: $childDOB\n";
    $message .= "Gender of the Child: $childGen\n";
    $message .= "Home Address: $homeAddress\n";
    $message .= "Postcode: $postcode\n";
    $message .= "Home Telephone Number: $parentContact\n";
    $message .= "Contact Telephone Number in Emergency: $emergencyContact\n";
    $message .= "Does your child suffer from any chronic illness?: $childHealth\n";
    $message .= "Name of the Child's Mainstream in school: $childMain\n";
    $message .= "Child's Year Group in mainstream school: $childExp\n";
    $message .= "Do you have any objection Us to use some of the provided information for advertisment purposes?: $parentObj\n";
    $message .= "Name (in Block capital): $parentName\n";

    // Set additional headers
    $headers = "From: Serghei Golomuz <golomuzserghei@gmail.com>\r\n";
    $headers .= "Reply-To: $parentName <$to>\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for submitting the form. We will contact you shortly.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
