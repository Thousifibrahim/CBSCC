<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - Manage Companies</title>

    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <?php include_once 'includes/nav.php'; ?>
    <div class="container" style="z-index: 2;">
        <h1 class="form-row justify-content-center">Manage Companies</h1> <br>
        <div class="form-row justify-content-center">
            <form method="GET" action="" class="form-inline mb-3">
                <input type="text" name="search" class="form-control mr-2" placeholder="Search Companies" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- View and Edit Companies Table -->
        <form method="POST" action="">
            <div class="table-responsive">
                <table class="table table-hover table-borderless table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Company Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Address</th>
                            <th scope="col">Website</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Min Percentage</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'includes/db.inc.php'; 
                            $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
                            $sql = "SELECT * FROM company WHERE name LIKE '%$search%' OR type LIKE '%$search%' OR address LIKE '%$search%' OR website LIKE '%$search%' OR number LIKE '%$search%' OR status LIKE '%$search%' OR minperc LIKE '%$search%';";
                            $res = mysqli_query($conn, $sql);
                            $rescheck = mysqli_num_rows($res);
                            if($rescheck > 0) {
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo '<tr>';
                                    echo '<td>'.$row['name'].'</td>';
                                    echo '<td>'.$row['type'].'</td>';
                                    echo '<td>'.$row['address'].'</td>';
                                    echo '<td>'.$row['website'].'</td>';
                                    echo '<td>'.$row['number'].'</td>';
                                    echo '<td>'.$row['status'].'</td>';
                                    echo '<td>'.$row['minperc'].'</td>';
                                    echo '<td><button type="button" class="btn btn-warning" onclick="editCompany('.$row['id'].')">Edit</button></td>';
                                    echo '<td><a href="php/crud.php?delete='.$row['id'].'" class="btn btn-danger">Delete</a></td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<tr><td colspan="9" class="text-center">No companies found</td></tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <?php include_once 'includes/footer.php'; ?>

    <!-- Edit Company Modal -->
    <div id="editCompanyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editCompanyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCompanyModalLabel">Edit Company</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="editCompanyId">
                        <div class="form-group">
                            <label for="editName">Company Name</label>
                            <input type="text" name="name" id="editName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editType">Type</label>
                            <input type="text" name="type" id="editType" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editAddress">Address</label>
                            <input type="text" name="address" id="editAddress" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editWebsite">Website</label>
                            <input type="text" name="website" id="editWebsite" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editNumber">Phone</label>
                            <input type="text" name="number" id="editNumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editStatus">Status</label>
                            <input type="text" name="status" id="editStatus" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="editMinperc">Min Percentage</label>
                            <input type="text" name="minperc" id="editMinperc" class="form-control" required>
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
        function editCompany(id) {
            <?php
            $sql = "SELECT * FROM company;";
            $res = mysqli_query($conn, $sql);
            $companies = [];
            while ($row = mysqli_fetch_assoc($res)) {
                $companies[$row['id']] = $row;
            }
            echo 'var companies = ' . json_encode($companies) . ';';
            ?>

            var company = companies[id];
            document.getElementById('editCompanyId').value = company.id;
            document.getElementById('editName').value = company.name;
            document.getElementById('editType').value = company.type;
            document.getElementById('editAddress').value = company.address;
            document.getElementById('editWebsite').value = company.website;
            document.getElementById('editNumber').value = company.number;
            document.getElementById('editStatus').value = company.status;
            document.getElementById('editMinperc').value = company.minperc;

            $('#editCompanyModal').modal('show');
        }
    </script>

</body>
</html>

<?php
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $address = $_POST['address'];
    $website = $_POST['website'];
    $number = $_POST['number'];
    $status = $_POST['status'];
    $minperc = $_POST['minperc'];

    $sql = "UPDATE company SET name='$name', type='$type', address='$address', website='$website', number='$number', status='$status', minperc='$minperc' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Company updated successfully'); window.location.href='viewcompanies.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
