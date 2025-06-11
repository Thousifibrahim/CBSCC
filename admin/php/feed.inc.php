<?php 
session_start();
include_once '../../includes/db.inc.php';

if (isset($_POST['post'])) {
    $message = $_POST['message'];
    $user = $_SESSION['username'];
    $sql = "INSERT INTO feed (user, message, date, time) VALUES ('$user', '$message', CURDATE(), CURTIME())";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        header("Location: ../index.php?result=success");
    } else {
        header("Location: ../index.php?result=fail");
    }
}
?>
