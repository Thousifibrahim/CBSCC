<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
    <?php include_once 'admin/includes/head.php' ?>
</head>
<body>
    <img src="images/log.png" id="img1" style="position: fixed;">
    <img src="images/jump1.png" width="560px" style="position: absolute; z-index: 1; margin-left: 56%; margin-top: 5%;">
    <?php include_once 'includes/nav.php'; ?>
    
    <div class="content" style="margin-top: 100px; margin-left: 10px;">
        <h1 class="form-row justify-content-center" style="margin-left: 70px;">Sign in to your Account</h1>
        <br>
        <?php
        include_once 'includes/db.inc.php';
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd1'];

            $queries = [
                "SELECT * FROM adminlogin WHERE uname = '$uname' AND pwd = '$pwd'" => 'admin/index.php',
                "SELECT * FROM studentlogin WHERE uname = '$uname' AND pwd = '$pwd'" => 'student/index.php'
            ];

            foreach ($queries as $query => $redirect) {
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = ($redirect === 'admin/index.php') ? $row['uname'] : $row['fname'];
                    header("Location: $redirect");
                    exit();
                }
            }
            echo '<div class="container" style="margin-left: 58px;">
                    <div class="alert alert-danger" role="alert" width="300">
                        Username and Password Wrong
                    </div>
                  </div>';
        }
        ?>
        
        <form action="login.php" autocomplete="off" method="POST" class="needs-validation" novalidate>
            <input type="text" style="display: none;" autocomplete="false">
            <div class="row justify-content-center align-items-baseline">
                <div class="center one">
                    <div class="form-group">
                        <label for="cname">Username</label>
                        <input type="text" class="form-control" id="cname" name="uname" style="width: 250px;" required>
                        <div class="invalid-feedback">Please enter username.</div>
                    </div>
                    <div class="form-group">
                        <label for="cid">Password</label>
                        <input type="password" class="form-control" id="cid" name="pwd1" style="width: 250px;" required>
                        <div class="invalid-feedback">Please enter password.</div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn" name="login" style="width: 250px; color: white; font-weight: bold; background: linear-gradient(to left, #2F07FF, #0987FF);">Login</button>
                    </div>
                    <div class="form-group">
                        <a href="forgot_password.php" class="btn text-dark" style="margin-left: 30px;">Forgot Password?</a>
                    </div>
                   
                </div>
            </div>
        </form>
    </div>
 
    <script>
        // Disable form submissions if there are invalid fields
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.getElementsByClassName('needs-validation');
            Array.prototype.forEach.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                });
            });
        });
    </script>
</body>
</html>
