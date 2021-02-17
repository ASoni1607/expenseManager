<?php
require 'common.php';
?>
<?php
//checking active user session else goto login
if (isset($_SESSION['email'])) {
    header('location:home.php');
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
        <title>Budget login</title>

    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="bg">
            <div class="container">
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4 column_style">
                        <div class="panel panel-default">

                            <div class="panel-header">

                                <center>
                                    <h4>Login</h4>
                                </center>
                                <hr>
                            </div>
                            <div class="panel-body">

                                <form method="POST" action="login_submit.php">
                                    <div class="form-group">
                                        <lable for="email"><b>Email:</b></lable>
                                        <input type="email" class="form-control" placeholder="Email" name="email" required="true">
                                    </div>
                                    <div class="form-group">
                                        <lable for="password"><b>Password:</b></lable>
                                        <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-success btn-block">Login</button>
                                    </div>
                                </form>

                            </div>
                            <div class="panel-footer">
                                <p>Don't have an account?
                                    <?php {
                                        ?>     <a href="signup.php">Click here to Sign Up</a>
                                        <?php
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>

            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
