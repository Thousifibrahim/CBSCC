<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - View Students</title>
    <?php include_once 'includes/head.php'; ?>
    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this student?');
        }
    </script>
</head>
<body>
    <?php include_once 'includes/nav.php'; ?>
    <div class="container" style="z-index: 2;">
        <h1 class="text-center">View Students</h1> <br>
        <form method="GET" action="">
            <div class="form-group">
                <label for="search">Search by Name</label>
                <input type="text" name="search" id="search" class="form-control" placeholder="Enter student name">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <br>
        <div class="table-responsive">
            <table class="table table-hover table-borderless table-dark">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th><a href="?sort=course" class="text-white">Course</a></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'includes/db.inc.php';

                        $sort = isset($_GET['sort']) && $_GET['sort'] == 'course' ? 'course' : 'id';
                        $search = isset($_GET['search']) ? $_GET['search'] : '';
                        $sql = "SELECT * FROM studentlogin WHERE fname LIKE '%$search%' ORDER BY $sort;";
                        $res = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($res)) {
                            echo '<tr>';
                            echo '<td>'.$row['fname'].'</td>';
                            echo '<td>'.$row['phone'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '<td>'.$row['uname'].'</td>';
                            echo '<td>'.$row['pwd'].'</td>';
                            echo '<td>'.$row['course'].'</td>';
                            echo '<td>
                                    <form method="POST" action="" onsubmit="return confirmDelete()">
                                        <button type="submit" name="delete" value="'.$row['id'].'" class="btn btn-danger">Delete</button>
                                    </form>
                                  </td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include_once 'includes/footer.php'; ?>
</body>
</html>

<?php
if (isset($_POST['delete'])) {
    include 'includes/db.inc.php';
    $id = $_POST['delete'];
    $sql = "DELETE FROM studentlogin WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Student deleted successfully'); window.location.href='viewstudents.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
