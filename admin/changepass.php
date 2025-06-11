<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="css/addcomp.css">
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <div>
        <img id="img2" src="../images/walk.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 60%; margin-top: 50vh;">
    </div>
    <img src="../images/about.png" id="img1">
    <?php include_once 'includes/nav.php'; ?>
    
    <div class="content" style="margin-top: 40px; margin-left: 20px;">
        <h1 class="form-row justify-content-center" style="margin-left: 100px;">Change Password</h1> <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return validatePasswords()">
            <div class="row justify-content-center align-items-baseline">
                <div class="center one">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pwd1">New Password</label>
                            <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="New Password" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pwd2">Confirm Password</label>
                            <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    
                    <div class="form-row justify-content-center">
                        <button type="submit" class="btn" name="change" style="width: 250px; color: white; font-weight: bold; background: linear-gradient(to left, #4B83EA, #504EC2);">Change Password</button>
                    </div>
                </div>
            </div>
        </form> 
    </div>
    
    <?php include_once 'includes/footer.php'; ?>

    <script>
        function validatePasswords() {
            var pwd1 = document.getElementById('pwd1').value;
            var pwd2 = document.getElementById('pwd2').value;
            
            if (pwd1 !== pwd2) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>

    <?php 
    // Handle password change
    if(isset($_POST['change'])) {
        include_once '../includes/db.inc.php';
        session_start();

        $user = $_SESSION['username'];
        $pwd1 = $_POST['pwd1'];
        $pwd2 = $_POST['pwd2'];

        if ($pwd1 == $pwd2) {
            $sql = "UPDATE adminlogin SET pwd='$pwd1' WHERE uname='$user'";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Password has been changed successfully'); window.location.replace('changepass.php');</script>";
            } else {
                echo "<script>alert('Error: Password could not be changed!');</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match!');</script>";
        }
    }
    ?>
</body>
</html>
