<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - Manage Students</title>

    <?php include_once 'includes/head.php'; ?>
    <script>
        function addRow() {
            var table = document.getElementById('studentRows');
            var newRow = table.insertRow();
            newRow.innerHTML = `<td><input type="text" name="fname[]" class="form-control" required></td>
                                <td><input type="text" name="lname[]" class="form-control" required></td>
                                <td><input type="text" name="phone[]" class="form-control" required></td>
                                <td><input type="email" name="email[]" class="form-control" required></td>
                                <td><input type="text" name="uname[]" class="form-control" required></td>
                                <td><input type="password" name="pwd[]" class="form-control" required></td>
                                <td><input type="text" name="course[]" class="form-control" required></td>
                                <td><input type="text" name="percentage[]" class="form-control" required></td>
                                <td><input type="text" name="yop[]" class="form-control" required></td>
                                <td><input type="text" name="sslc[]" class="form-control"></td>
                                <td><input type="text" name="puc[]" class="form-control"></td>`;
        }
    </script>
</head>
<body>

    <?php include_once 'includes/nav.php'; ?>
    <div class="container" style="z-index: 2;">
        <h1 class="form-row justify-content-center">Manage Students</h1> <br>
        
        <!-- Add Multiple Students Form -->
        <div class="form-row justify-content-center">
            <form method="POST" action="">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Course</th>
                            <th>Degree %</th>
                            <th>Semester</th>
                            <th>10th %</th>
                            <th>PUC %</th>
                        </tr>
                    </thead>
                    <tbody id="studentRows">
                        <tr>
                            <td><input type="text" name="fname[]" class="form-control" required></td>
                            <td><input type="text" name="lname[]" class="form-control" required></td>
                            <td><input type="text" name="phone[]" class="form-control" required></td>
                            <td><input type="email" name="email[]" class="form-control" required></td>
                            <td><input type="text" name="uname[]" class="form-control" required></td>
                            <td><input type="password" name="pwd[]" class="form-control" required></td>
                            <td><input type="text" name="course[]" class="form-control" required></td>
                            <td><input type="text" name="percentage[]" class="form-control" required></td>
                            <td><input type="text" name="yop[]" class="form-control" required></td>
                            <td><input type="text" name="sslc[]" class="form-control"></td>
                            <td><input type="text" name="puc[]" class="form-control"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" onclick="addRow()">Add Row</button>
                <button type="submit" name="add" class="btn btn-success">Add Students</button>
                <button type="button" class="btn btn-danger" onclick="location.reload();">Cancel</button>
            </form>
        </div>
        <br>

        <!-- View and Edit Students Table -->
        <div class="table-responsive">
            <table class="table table-hover table-borderless table-dark">
                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Course</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Semester</th>
                        <th scope="col">10th</th>
                        <th scope="col">PUC</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'includes/db.inc.php'; 
                    $sql = "SELECT * FROM studentlogin;";
                    $res = mysqli_query($conn, $sql);
                    $rescheck = mysqli_num_rows($res);
                    if($rescheck > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<tr>';
                            echo '<td>'.$row['fname'].'</td>';
                            echo '<td>'.$row['lname'].'</td>';
                            echo '<td>'.$row['phone'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '<td>'.$row['uname'].'</td>';
                            echo '<td>'.$row['course'].'</td>';
                            echo '<td>'.$row['percentage'].'</td>';
                            echo '<td>'.$row['yop'].'</td>';
                            echo '<td>'.$row['sslc'].'</td>';
                            echo '<td>'.$row['puc'].'</td>';
                            echo '<td>
                                    <button type="button" class="btn btn-warning" onclick="editStudent('.$row['id'].')">Edit</button>
                                  </td>';
                            echo '</tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <?php include_once 'includes/footer.php'; ?>

    <!-- Edit Student Modal -->
    <div id="editStudentModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Student</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="editStudentId">
                        <div class="form-group">
                            <label for="editFname">First Name</label>
                            <input type="text" name="fname" id="editFname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editLname">Last Name</label>
                            <input type="text" name="lname" id="editLname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editPhone">Phone</label>
                            <input type="text" name="phone" id="editPhone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editEmail">Email</label>
                            <input type="email" name="email" id="editEmail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editUname">Username</label>
                            <input type="text" name="uname" id="editUname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editCourse">Course</label>
                            <input type="text" name="course" id="editCourse" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editPercentage">Degree %</label>
                            <input type="text" name="percentage" id="editPercentage" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editYop">Semester</label>
                            <input type="text" name="yop" id="editYop" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editSslc">SSLC %</label>
                            <input type="text" name="sslc" id="editSslc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="editPuc">PUC %</label>
                            <input type="text" name="puc" id="editPuc" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function editStudent(id) {
            <?php
            $sql = "SELECT * FROM studentlogin;";
            $res = mysqli_query($conn, $sql);
            $students = [];
            while ($row = mysqli_fetch_assoc($res)) {
                $students[$row['id']] = $row;
            }
            echo 'var students = ' . json_encode($students) . ';';
            ?>

            var student = students[id];
            document.getElementById('editStudentId').value = student.id;
            document.getElementById('editFname').value = student.fname;
            document.getElementById('editLname').value = student.lname;
            document.getElementById('editPhone').value = student.phone;
            document.getElementById('editEmail').value = student.email;
            document.getElementById('editUname').value = student.uname;
            document.getElementById('editCourse').value = student.course;
            document.getElementById('editPercentage').value = student.percentage;
            document.getElementById('editYop').value = student.yop;
            document.getElementById('editSslc').value = student.sslc;
            document.getElementById('editPuc').value = student.puc;

            $('#editStudentModal').modal('show');
        }
    </script>

</body>
</html>

<?php
include 'includes/db.inc.php';

if (isset($_POST['add'])) {
    $fnames = $_POST['fname'];
    $lnames = $_POST['lname'];
    $phones = $_POST['phone'];
    $emails = $_POST['email'];
    $unames = $_POST['uname'];
    $pwds = $_POST['pwd'];
    $courses = $_POST['course'];
    $percentages = $_POST['percentage'];
    $yops = $_POST['yop'];
    $sslc = $_POST['sslc'];
    $pucs = $_POST['puc'];

    for ($i = 0; $i < count($fnames); $i++) {
        $sql = "INSERT INTO studentlogin (fname, lname, phone, email, uname, pwd, course, percentage, yop, sslc, puc) 
                VALUES ('".$fnames[$i]."', '".$lnames[$i]."', '".$phones[$i]."', '".$emails[$i]."', '".$unames[$i]."', '".$pwds[$i]."', '".$courses[$i]."', '".$percentages[$i]."', '".$yops[$i]."', '".$sslc[$i]."', '".$pucs[$i]."')";
        if (!mysqli_query($conn, $sql)) {
            echo "Error adding record: " . mysqli_error($conn);
        }
    }
    echo "<script>alert('Students added successfully'); window.location.href='managestudents.php';</script>";
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $course = $_POST['course'];
    $percentage = $_POST['percentage'];
    $yop = $_POST['yop'];
    $sslc = $_POST['sslc'];
    $puc = $_POST['puc'];

    $sql = "UPDATE studentlogin SET fname='$fname', lname='$lname', phone='$phone', email='$email', uname='$uname', course='$course', percentage='$percentage', yop='$yop', sslc='$sslc', puc='$puc' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Student updated successfully'); window.location.href='managestudents.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
