<?php
session_start();
include_once 'db.inc.php';

if (isset($_POST['apply'])) {
    $company = $_POST['company'];
    $user = $_SESSION['username'];
    $resume_link = $_POST['resume_link'];

    // Validate if link is a valid PDF URL from Google Drive
    if (isValidGoogleDrivePdfLink($resume_link)) {
        // Insert data into database
        $sql = "INSERT INTO applied (company, name, resume_path) VALUES ('$company', '$user', '$resume_link');";
        $res = mysqli_query($conn, $sql);
        
        if (!$res) {
            ?>
            <script>
                alert("Apply Unsuccessful, Try Again!");
                window.location.replace("../viewapply.php");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("You have applied for the company successfully!");
                window.location.replace("../viewapply.php");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Invalid PDF link! Please provide a valid link to a PDF file on Google Drive.");
            window.location.replace("../viewapply.php");
        </script>
        <?php
    }
}

function isValidGoogleDrivePdfLink($url) {
    // Validate if the URL is a valid Google Drive PDF link
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Extract file ID from Google Drive URL
        if (preg_match('/drive.google.com\/file\/d\/(.*?)\//', $url, $matches)) {
            return true;
        }
    }
    return false;
}
?>
