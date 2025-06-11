<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="includes/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div>
        <img id="img2" src="images/pass.png" width="550px" style="position: absolute; position: fixed; z-index: 1; margin-left: 50%; margin-top: 20vh;">
    </div>
    <img src="images/about.png" id="img1" style="position: fixed;">
    <?php include_once 'includes/nav.php'; ?>
    <div class="content">
        <br><br>
        <h1 align="center" style="margin-left: 50px;">Forgot Password?</h1>
        <br><br>
        <div class="row justify-content-center">
            <form id="forgotPasswordForm" autocomplete="off" method="POST">
                <input type="text" style="display: none;" autocomplete="false">
                <div class="center">
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="email" class="form-control" id="email" name="email" style="width: 270px;">
                    </div>
                    <button type="submit" class="btn" name="submit" style="color: white; font-weight: bold; background: linear-gradient(to left, #4181ED, #3F4261);">Next</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="responseModal" tabindex="-1" role="dialog" aria-labelledby="responseModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="responseModalLabel">Response</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="responseMessage">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $("#add").removeClass("active");
            $("#change").addClass("active");

            $("#forgotPasswordForm").submit(function(event) {
                event.preventDefault(); // Prevent form from submitting the traditional way

                $.ajax({
                    url: 'forgot_pass.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#responseMessage').text(response);
                        $('#responseModal').modal('show');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        $('#responseMessage').text('Error: ' + textStatus + ' - ' + errorThrown);
                        $('#responseModal').modal('show');
                    }
                });
            });
        });
    </script>
</body>
</html>
