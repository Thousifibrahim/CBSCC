<?php
if (isset($_GET['export'])) {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'placement');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $search_query = isset($_GET['search']) ? $_GET['search'] : '';
    $sql = "SELECT a.id, a.company, a.name, s.email, s.phone, s.course, s.yop, s.percentage, s.sslc, s.puc, a.resume_path, a.status 
            FROM applied a 
            LEFT JOIN studentlogin s ON a.name = s.fname";

    if (!empty($search_query)) {
        $sql .= " WHERE a.company LIKE '%$search_query%' OR a.name LIKE '%$search_query%'";
    }

    $res = mysqli_query($conn, $sql);

    if ($res) {
        $filename = "Applied_Companies.csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename=' . $filename);

        $fp = fopen('php://output', 'w');

        // Column headers
        $header = array('ID', 'Company Name', 'Student Name', 'Email ID', 'Phone', 'Course', 'Year of Passing', 'Percentage', 'SSLC', 'PUC', 'Resume', 'Status');
        fputcsv($fp, $header);

        // Data rows
        while ($row = mysqli_fetch_assoc($res)) {
            $row['resume_path'] = !empty($row['resume_path']) ? $row['resume_path'] : 'Resume not uploaded';
            fputcsv($fp, $row);
        }

        fclose($fp);
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $conn->close();
}
?>
