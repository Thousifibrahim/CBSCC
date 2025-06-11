<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include_once 'includes/head.php' ?>
    <style>
        .transparent-background {
            background-color: transparent;
        }

        /* WebKit browsers */
        .transparent-background::-webkit-scrollbar {
            width: 12px;  /* Adjust width as needed */
        }

        .transparent-background::-webkit-scrollbar-track {
            background: transparent;
        }

        .transparent-background::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent scrollbar thumb */
            border-radius: 6px;
        }

        .transparent-background::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.7); /* Darker on hover */
        }

        /* Firefox */
        .transparent-background {
            scrollbar-color: rgba(0, 0, 0, 0.5) transparent; /* Semi-transparent scrollbar thumb */
            scrollbar-width: thin;
        }
    </style>
</head>
<body>
    <div>
        <img id="img2" src="../images/loginadmin.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 950px; margin-top: 130px;">
    </div>
    <img src="../images/fed.png" id="img1" style="position: fixed;">
    <?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 70px; margin-left: 150px;">
        <h1 class="form-row justify-content-center">NOTICE</h1> <br>
        <div class="pre-scrollable transparent-background" style="width: 750px; height: 400px; scroll-behavior: auto;">
            <div style="max-height: 90vh;">
                <div class="card transparent-background" style="border: none;">
                    <div class="card-body transparent-background">
                        <?php
                        $sql = "SELECT * FROM feed ORDER BY date DESC, time DESC;";
                        $res = mysqli_query($conn, $sql);
                        $rescheck = mysqli_num_rows($res);
                        if ($rescheck > 0) {
                            while ($row = mysqli_fetch_assoc($res)) {
                                ?>
                                <h5 class="card-title"><i class="far fa-user-circle"></i>&nbsp;<?php echo $row['user']; ?></h5>
                                <p class="card-text"><?php echo $row['message']; ?></p>
                                <p><small><?php echo $row['date']; ?></small></p> <br>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'includes/footer.php' ?>
    <script type="text/javascript" src="includes/jquery31.js"></script>
    <script>
        $(document).ready(function() {
            $("#add").removeClass("active");
            $("#cat").addClass("active");
            $("#heart").click(function() {
                $("#heart").toggleClass("far fa-heart");
                $("#heart").toggleClass("fas fa-heart");
            })
        });
    </script>
</body>
</html>
