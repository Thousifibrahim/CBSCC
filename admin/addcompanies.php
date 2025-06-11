<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Company</title>
    <link rel="stylesheet" type="text/css" href="css/addcomp.css">
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <div>
        <img id="img2" src="../images/walk.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 60%; margin-top: 50vh;">
    </div>
    <img src="../images/app.png" id="img1">
    <?php include_once 'includes/nav.php'; ?>
    
    <div class="content" style="margin-top: 40px; margin-left: 20px;">
        <h1 class="form-row justify-content-center" style="margin-left: 100px;">Add Company</h1> <br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off" method="POST" onsubmit="return validatePhone()">
            <div class="row justify-content-center align-items-baseline">
                <div class="center one">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cname">Company Name</label>
                            <input type="text" class="form-control" id="cname" name="cname" placeholder="Company Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" name="website" placeholder="Website" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ctype">Industry Type</label>
                            <select class="custom-select" name="ctype">
                                <option value="IT">IT</option>
                                <option value="BPO">BPO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select class="custom-select" name="status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telephone">Phone</label>
                            <input type="tel" pattern="^\d{10}$" class="form-control" id="telephone" name="telephone" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Address" required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row justify-content-center">
                        <button type="submit" class="btn" name="add" style="width: 250px; color: white; font-weight: bold; background: linear-gradient(to left, #4B83EA, #504EC2);">Add Company</button>
                    </div>
                </div>
            </div>
        </form> 
    </div>
    
    <?php include_once 'includes/footer.php'; ?>

    <script>
        function validatePhone() {
            var phone = document.getElementById('telephone').value;
            if (phone.length !== 10) {
                alert("Phone number must be 10 digits.");
                return false;
            }
            return true;
        }
    </script>

    <?php
    // Handle add and update operations
    if(isset($_POST['add']) || isset($_POST['update'])) {
        include_once '../includes/db.inc.php';

        $cname = $_POST['cname'];
        $website = $_POST['website'];
        $ctype = $_POST['ctype'];
        $status = $_POST['status'];
        $address = $_POST['address'];
        $phone = $_POST['telephone'];

        if (isset($_POST['add'])) {
            $sql = "INSERT INTO company (name, type, address, number, website, status) VALUES ('$cname', '$ctype', '$address', '$phone', '$website', '$status')";
            $redirect_success = "viewcompanies.php?result=success";
            $redirect_fail = "addcompanies.php?result=fail";
            $success_message = "Company has been added successfully";
            $fail_message = "Company could not be added";
        } elseif (isset($_POST['update'])) {
            $cid = $_POST['cid'];
            $sql = "UPDATE company SET name='$cname', website='$website', address='$address', type='$ctype', status='$status', number='$phone' WHERE id='$cid'";
            $redirect_success = "viewcompanies.php?result=success";
            $redirect_fail = "editcomp.php?result=fail";
            $success_message = "Company has been updated";
            $fail_message = "Company could not be updated";
        }

        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "<script>alert('$success_message'); window.location.replace('$redirect_success');</script>";
        } else {
            echo "<script>alert('$fail_message'); window.location.replace('$redirect_fail');</script>";
        }
    }
    ?>
</body>
</html>
