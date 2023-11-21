<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $subject = $_POST["subject"];

    if (empty($firstname) || empty($lastname) || empty($subject)) {
        echo "Please fill out all the fields.";
    } else {
        // Construct the email message
        $to = "14718@coderacademy.edu.au"; 
        $subject = "New Form Submission";
        $message = "First Name: $firstname\nLast Name: $lastname\nSubject: $subject";

        // Send the email
        $headers = "From: webmaster@example.com"; // Replace with your email or leave it empty
        mail($to, $subject, $message, $headers);

        echo "Form submitted successfully! We'll get in touch with you soon.";
        // You can also redirect the user to another page after successful submission
        // header("Location: thank_you_page.php");
        // exit();
    }
}
?>