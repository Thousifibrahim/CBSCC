<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Admin</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <?php include_once 'includes/nav1.php'; ?>
    
    <div class="content" style="margin-top: 40px;">
        <h1 class="form-row justify-content-center" style="margin-left: 60px;">Add Admin</h1>
        <br>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="row justify-content-center align-items-baseline">
                <div class="center one">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cid">Admin ID</label>
                            <input type="text" class="form-control" id="cid" name="cid" placeholder="Student ID" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cname">Username</label>
                            <input type="text" class="form-control" id="cname" name="username" placeholder="Username" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="mailid">Mail-ID</label>
                            <input type="email" class="form-control" id="mailid" name="mailid" placeholder="Mail-ID" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="tel" pattern="^\d{10}$" class="form-control" id="phone" name="phone" placeholder="Phone" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pwd1">Password</label>
                            <input type="password" class="form-control" id="pwd1" name="pwd1" placeholder="Password" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pwd2">Confirm Password</label>
                            <input type="password" class="form-control" id="pwd2" name="pwd2" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    
                    <div class="form-row justify-content-center">
                        <button type="submit" class="btn col-md-5" name="signup" style="color: white; font-weight: bold; background: linear-gradient(to left, #4181ED, #3F4261);">Sign Up</button>
                    </div>
                </div>
            </div>
        </form> 
    </div>
    
    <?php include_once 'includes/footer.php'; ?>

    <?php 
    // Handle admin registration
    if(isset($_POST['signup'])) {
        include_once '../includes/db.inc.php';
        
        $uname = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['mailid'];
        $phone = $_POST['phone'];
        $pwd1 = $_POST['pwd1'];
        $pwd2 = $_POST['pwd2'];

        if ($pwd1 == $pwd2) {
            $sql = "INSERT INTO adminlogin (uname, pwd, fname, lname, email, phone) VALUES ('$uname', '$pwd1', '$fname', '$lname', '$email', '$phone')";
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Admin $fname has been added successfully'); window.location.replace('addadmin.php');</script>";
            } else {
                echo "<script>alert('Error: Admin could not be added, try again!');</script>";
            }
        } else {
            echo "<script>alert('Passwords do not match!');</script>";
        }
    }
    ?>
</body>
</html>
