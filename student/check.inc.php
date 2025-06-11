<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apply For a Company</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    <div>
        <img id="img2" src="../images/graph1.svg" width="600px" style="position: absolute; position: fixed; z-index: 1; margin-left: 55%; margin-top: 19vh;">
    </div>
    <img src="../images/appl.png" id="img1" style="position: fixed;">
    <?php include_once 'includes/nav.php' ?> 
    <div class="content" style="margin-top: 10px; margin-left: 30px;">
        <br> <br><h2><u>Apply For a Company</u></h2>
        <br> <br> <br> 
        <?php
        include_once '../includes/db.inc.php';
        if (isset($_POST['check'])) {
            $company = $_POST['company'];
            $user = $_SESSION['username'];
            $sql = "SELECT * FROM company WHERE name='$company';";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $compperc = $row['minperc'];
                    $sql1 = "SELECT * FROM studentlogin WHERE fname='$user';";
                    $res1 = mysqli_query($conn, $sql1);
                    if (mysqli_num_rows($res1) > 0) {
                        while ($row1 = mysqli_fetch_assoc($res1)) {
                            $studperc = $row1['percentage'];
                            if ($studperc >= $compperc) {
                                $chances = 0;
                                if ($studperc > 85) {
                                    $chances = 90;
                                } else if ($studperc > 75) {
                                    $chances = 80;
                                } else {
                                    $chances = 60;
                                }
                                ?>  
                                <h5>Good Job, Your Percentage is matching for <b><?php echo $company; ?></b></h5> <br>
                                <p class="lead">Chances of getting placed</p>
                                <div class="progress" style="position:absolute; width: 500px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $chances; ?>%;" aria-valuenow="<?php echo $chances; ?>" 
                                    aria-valuemin="0" aria-valuemax="100" name="chances"><?php echo $chances; ?>%</div>
                                </div> <br> <br>
                                <p class="lead">Apply for it right now!</p>
                                <p class="medium text-danger"><i class="fas fa-exclamation-circle"></i> Make sure you have updated your percentage 
                                With The T&p Officers <b></p>
                                <form action="includes/apply.inc.php" method="post" style="margin-left: 20px;">
                                    <input type="hidden" name="company" value="<?php echo $company; ?>">
                                    <label for="resume_link">Link to PDF on Google Drive:</label>
                                    <input type="text" id="resume_link" name="resume_link" class="form-control" required>
                                    <button type="submit" name="apply" class="btn" style="margin-top: 20px; width: 150px; color: white; font-weight: bold; background: linear-gradient(to left, #F55197, #EE891A);">Apply</button>
                                </form>
                                <?php
                            } else {
                                ?>  
                                <h5>Your Percentage for <b><?php echo $company; ?></b><br> doesn't match expectations</h5> <br>
                                <p class="lead">Chances of getting placed</p>
                                <div class="progress" style="position:absolute; width: 500px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50" 
                                    aria-valuemin="0" aria-valuemax="100" name="chances">50%</div>
                                </div> <br> <br>
                                <p class="lead">Sorry, you are not eligible for it!</p>
                                <p class="medium text-danger"><i class="fas fa-exclamation-circle"></i>  Make sure you have updated your percentage 
                                With The T&p Officers </b> section!</p>
                                <?php
                            }
                        }
                    }
                }
            }
        }
        ?>
    </div>
    <br> <br> <br> <br> <br>
    <?php include_once 'includes/footer.php' ?>
    <script>
        $(document).ready(function() {
            $("#home").removeClass("active");
            $("#apply").addClass("active");
        });
    </script>
</body>
</html>
