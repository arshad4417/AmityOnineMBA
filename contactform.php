<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name      = htmlspecialchars(trim($_POST['enquiryName']));
    $email     = htmlspecialchars(trim($_POST['enquiryEmail']));
    $mobile    = htmlspecialchars(trim($_POST['eqquiryMobile']));
    $city      = htmlspecialchars(trim($_POST['city']));
    $education = htmlspecialchars(trim($_POST['highestEducation']));
    $course    = htmlspecialchars(trim($_POST['selectedCourse']));
    $query     = htmlspecialchars(trim($_POST['enquiryAddress']));

    // Setup PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'arshad.working.02@gmail.com';       
        $mail->Password   = 'wqig dyll twnn coib';         
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender and recipient
        $mail->setFrom('arshad.working.02@gmail.com', 'Website Contact Form');
        $mail->addAddress('arshad.working.02@gmail.com', 'Admin'); // ✅ Admin's email

        // Email content
        $mail->isHTML(false);
        $mail->Subject = 'New Enquiry from Website Contact Form';
        $mail->Body    = "
You have received a new enquiry from the website:

Name: $name
Email: $email
Mobile: $mobile
City: $city
Highest Education: $education
Selected Course: $course
Query: $query
        ";

        // Send the email
        $mail->send();
        header("Location: success.php");
        exit;
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>