<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'includes/db.inc.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Function to generate a random token
function generateToken() {
    return bin2hex(random_bytes(32)); // Generate a 64-character hexadecimal token
}

// Function to send reset password email
function sendResetEmail($email, $token) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'ahilxdesigns@@gmail.com'; // Your email
        $mail->Password = 'itwx hwqp rnfk rcsc'; // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('ahilxdesigns@gmail.com', 'Career Bridge'); // Your email and name
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request Career Bridge';
        $mail->Body = "Click <a href='http://localhost/project/newpass.php?token=$token'>here</a> to reset your password.";

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo); // Log error message for debugging
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $stmt = $conn->prepare("SELECT id FROM studentlogin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        $token = generateToken();
        
        $updateStmt = $conn->prepare("UPDATE studentlogin SET token = ? WHERE email = ?");
        $updateStmt->bind_param("ss", $token, $email);
        $updateStmt->execute();

        if (sendResetEmail($email, $token)) {
            echo "Password reset link sent to your email.";
        } else {
            echo "Failed to send reset link. Please try again later.";
        }
    } else {
        echo "Email not found in our records.";
    }

    $stmt->close();
}
?>
