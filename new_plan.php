<?php
require 'common.php';
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
        <title>Budget New Plan</title>
        <style>

            button:hover
            {
                background-color: green;
                color:white;
            }
            .cc
            {
                color:black;
            }
        </style>
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
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4">
                        <div class="panel panel-success">

                            <div class="panel-heading">
                                <center>
                                    <h3 class="cc">Create New Plan</h3>
                                </center>
                                <hr>
                            </div>
                            <div class="panel-body">
                                <!-- Form part A for plan details -->
                                <form method="POST" action="plandetails.php">
                                    <div class="form-group">
                                        <lable for="initial_budget"><b>Initial Budget:</b></lable>
                                        <input type="number" class="form-control" placeholder="Initial Budget (Ex-4000)" name="initial_budget" min="50" title="Value must be greater than or equal to 50" required="true">
                                    </div>
                                    <div class="form-group">
                                        <lable for="people"><b>How many people you want to add in your group?</b></lable>
                                        <input type="number" class="form-control" placeholder="No. of people" name="people" min="1" title="Value must be greater than or equal to 1" required="true">
                                    </div>

                                    <div class="form-group">

                                        <button type="submit" name="Next" value="submit" class="btn button1 btn-block ">Next</button>
                                    </div>

                                </form>

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
