<?php
// Set headers for CORS and JSON response
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Load Composer autoloader
if (!file_exists('vendor/autoload.php')) {
    echo json_encode(['success' => false, 'message' => 'PHPMailer library not found. Please install via Composer.']);
    exit;
}

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

try {
    // Get JSON input
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    // Check if JSON decode was successful
    if (json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Invalid JSON data received');
    }
    
    // Sanitize & validate input
    $name = isset($data['name']) ? trim($data['name']) : '';
    $email = isset($data['email']) ? trim($data['email']) : '';
    $subject = isset($data['subject']) ? trim($data['subject']) : '';
    $message = isset($data['message']) ? trim($data['message']) : '';
    
    // Server-side validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    
    if (empty($subject)) {
        $errors[] = 'Subject is required';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters long';
    }
    
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
        exit;
    }
    
    // Create PHPMailer instance
    $mail = new PHPMailer(true);
    
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'shivam167m@gmail.com';        // Your Gmail address
    $mail->Password = 'wrvjgvdmjfllcjkf';            // App password (use environment variable in production)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Enable SMTP debugging (remove in production)
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    
    // Recipients
    $mail->setFrom('shivam167m@gmail.com', 'Contact Form');
    $mail->addAddress('shivam300m@gmail.com', 'Recipient'); // Add recipient email
    $mail->addReplyTo($email, $name);
    
    // Content - Plain text only
    $mail->isHTML(false);
    $mail->Subject = 'Contact Form: ' . $subject;
    $mail->Body = "New Contact Form Submission

Name: " . $name . "
Email: " . $email . "
Subject: " . $subject . "
Message: " . $message . "

Sent on " . date('Y-m-d H:i:s');
    
    // Send the email
    $mail->send();
    
    // Success response
    echo json_encode([
        'success' => true, 
        'message' => 'Email sent successfully'
    ]);
    
} catch (Exception $e) {
    // Error response
    error_log("Contact form error: " . $e->getMessage()); // Log error for debugging
    
    echo json_encode([
        'success' => false, 
        'message' => 'Failed to send email. Please try again later.'
    ]);
}
?>