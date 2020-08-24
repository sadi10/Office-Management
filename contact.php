<?php
require_once "connection.php";


if ($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $concerned_department = "";
    $visitor_message = "";

    if (isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }

    if (isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }

    if (isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
    }

    if (isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
    }

    if (isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }

    if ($concerned_department == "billing") {
        $recipient = "billing@domain.com";
    } else if ($concerned_department == "marketing") {
        $recipient = "marketing@domain.com";
    } else if ($concerned_department == "technical support") {
        $recipient = "tech.support@domain.com";
    } else {
        $recipient = "contact@domain.com";
    }

    $headers  = 'MIME-Version: 1.0' . "\r\n"
        . 'Content-type: text/html; charset=utf-8' . "\r\n"
        . 'From: ' . $visitor_email . "\r\n";

    if (mail($recipient, $email_title, $visitor_message, $headers)) {
        echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
} else {
    echo '<p>Something went wrong</p>';
}

?>

<form action="contact.php" method="post">
    <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
    </div>
    <div class="elem-group">
        <label for="department-selection">Choose Concerned Department</label>
        <select id="department-selection" name="concerned_department" required>
            <option value="">Select a Department</option>
            <option value="billing">Billing</option>
            <option value="marketing">Marketing</option>
            <option value="technical support">Technical Support</option>
        </select>
    </div>
    <div class="elem-group">
        <label for="title">Reason For Contacting Us</label>
        <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password" pattern=[A-Za-z0-9\s]{8,60}>
    </div>
    <div class="elem-group">
        <label for="message">Write your message</label>
        <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
    </div>
    <button type="submit">Send Message</button>
</form>