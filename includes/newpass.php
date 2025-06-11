<?php 
include_once 'db.inc.php'; 

if(isset($_POST['confirm'])) {
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    $token = $_POST['token'];

    if ($pass1 != $pass2) { 
        echo "<script type='text/javascript'>
            alert('Passwords did not match!!');
            window.location.replace('../newpass.php?token=$token');
            </script>";
    } else {
        $stmt = $conn->prepare("UPDATE studentlogin SET pwd = ?, token = NULL WHERE token = ?");
        $stmt->bind_param("ss", $pass1, $token);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<script type='text/javascript'>
                alert('Password changed successfully!!');
                window.location.replace('../login.php');
                </script>";
        } else {
            echo "<script type='text/javascript'>
                alert('Invalid token or token expired.');
                window.location.replace('../forgot_pass.php');
                </script>";
        }
    }
}
?>
