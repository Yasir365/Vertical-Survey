<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $project_location = htmlspecialchars($_POST['project-location']);
    $service_needed = htmlspecialchars($_POST['service-needed']);
    $comments = htmlspecialchars($_POST['comments']);

    // Email details
    $to = "yasirsaleem365@gmail.com";
    $subject = "New Service Request from " . $email;

    // Create the email content
    $message = "
    <html>
    <head>
        <title>New Service Request</title>
    </head>
    <body>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Project Location:</strong> $project_location</p>
        <p><strong>Service Needed:</strong> $service_needed</p>
        <p><strong>Additional Comments:</strong> $comments</p>
    </body>
    </html>
    ";

    // Set content-type header for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= "From: <$email>" . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request.";
}
?>
