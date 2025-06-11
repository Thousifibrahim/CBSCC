<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Applied Companies</title>
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <?php include_once 'includes/nav.php'; ?>
    <div class="container">
        <h1 class="text-center">View Applied Companies</h1> <br>
        <form method="GET" action="" class="mb-3">
            <div class="form-group">
                <label for="search">Search by Name</label>
                <input type="text" name="search" class="form-control" placeholder="Search Companies" value="<?php echo htmlspecialchars($_GET['search'] ?? '', ENT_QUOTES); ?>">
                <br><button type="submit" class="btn btn-primary">Search</button>
                <a href="php/export_csv.php?export=1&search=<?php echo htmlspecialchars($_GET['search'] ?? '', ENT_QUOTES); ?>" class="btn btn-success">Export to CSV</a>

            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Email ID</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Course</th>
                        <th scope="col">Year of Passing</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">SSLC</th>
                        <th scope="col">PUC</th>
                        <th scope="col">Resume</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $search_query = isset($_GET['search']) ? $_GET['search'] : '';
                    $sql = "SELECT a.id, a.company, a.name, s.email, s.phone, s.course, s.yop, s.percentage, s.sslc, s.puc, a.resume_path, a.status 
                            FROM applied a 
                            LEFT JOIN studentlogin s ON a.name = s.fname";

                    if (!empty($search_query)) {
                        $sql .= " WHERE a.company LIKE '%$search_query%' OR a.name LIKE '%$search_query%'";
                    }

                    $res = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($res)) {
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['company'].'</td>';
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['phone'].'</td>';
                        echo '<td>'.$row['course'].'</td>';
                        echo '<td>'.$row['yop'].'</td>';
                        echo '<td>'.$row['percentage'].'</td>';
                        echo '<td>'.$row['sslc'].'</td>';
                        echo '<td>'.$row['puc'].'</td>';
                        if (!empty($row['resume_path'])) {
                            echo '<td><a href="'.$row['resume_path'].'" target="_blank">Open Resume</a></td>';
                        } else {
                            echo '<td>Resume not uploaded</td>';
                        }
                        echo '<td>'.$row['status'].'</td>';
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
