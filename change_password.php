<?php
require 'common.php';
?>
<?php
//chechking for active user session else goto login
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Budget Change Password</title>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="bg">
            <div class="content">

                <br>
                <br>
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
                            <div class="panel panel-default">
                                <div class="panel-header">
                                    <center>
                                        <h3>Change Password</h3>
                                    </center>
                                </div>
                                <div class="panel-body">


                                    <form method="POST" action="change_password_script.php ">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" required="true">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="New Password (Min. 6 characters)" pattern="[6,)" name="newpassword" required="true">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Re-type-New Password" pattern="[6,)" name="retypenewpassword" required="true">
                                        </div>


                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-success btn-block">Change</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>

    </body>
</html>