<?php
if(isset($_POST['sub'])){
    // Get form data
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

    // Email information
    $to = "your-email@example.com"; // Replace with your own email address
    $subject = "Registration Form Submission";

    // Compose the email message
    $message = "
    <html>
    <head>
    <title>Registration Form Submission</title>
    </head>
    <body>
    <h2>Registration Form Submission</h2>
    <p><strong>Языковой класс:</strong> $langClass</p>
    <p><strong>Ответственный репетитор:</strong> $tutor</p>
    <p><strong>Полное Имя ребёнка:</strong> $nameChild</p>
    <p><strong>Дата рождения:</strong> $childDOB</p>
    <p><strong>Пол ребенка:</strong> $childGen</p>
    <p><strong>Домашний адрес:</strong> $homeAddress</p>
    <p><strong>Почтовый Индекс:</strong> $postcode</p>
    <p><strong>Домашний Номер Телефона:</strong> $parentContact</p>
    <p><strong>Контактный номер телефона в случае экстренной необходимости:</strong> $emergencyContact</p>
    <p><strong>Страдает ли ребенок каким-либо хроническим заболеванием:</strong> $childHealth</p>
    <p><strong>Название основного направления программы обучения ребёнка в общеобразовательной школе:</strong> $childMain</p>
    <p><strong>На каком году обучения ребёнок находится в общеобразовательной школе на данный момент:</strong> $childExp</p>
    <p><strong>Возражения против использования предоставленной информации в целях рекламы:</strong> $parentObj</p>
    <p><strong>Полное Имя родителя:</strong> $parentName</p>
    </body>
    </html>
    ";

    // Set headers
    $headers = "From: your-email@example.com" . "\r\n";
    $headers .= "Reply-To: your-email@example.com" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Send the email
if(mail($to, $subject, $message, $headers)){
    echo "Thank you for your submission. We will get back to you soon!";
} else{
    echo "Oops! Something went wrong. Please try again later.";
}
}
?>

//
In this code, the form data is retrieved using the `$_POST` superglobal array, and then an email message is composed with the form data. The `mail()` function is used to send the email with the specified headers.

Make sure to replace `'your-email@example.com'` with your own email address in the `$to`, `$headers`, and `From:` fields.

Note: The code assumes that you have a server environment with PHP configured to send emails. Additionally, remember to validate and sanitize the form inputs to ensure the security and integrity of the data.
