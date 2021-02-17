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

        <title>Budget Home</title>
        <style>
            .glyphicon-color
            {
                color: green;
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
                    <?php
                    $user_id = $_SESSION['user_id'];
                    //query to load data from table 'plan'
                    $select_query = "SELECT * FROM plan WHERE plan.user_id='$user_id'";
                    $select_query_result = mysqli_query($con, $select_query)or die(mysqli_error($con));
                    $nam = "";
                    if (mysqli_num_rows($select_query_result) == 0) {
                        ?>
                        <div class="col-xs-6 col-md-4">
                            <h4> You don't have any active plans.</h4>
                        </div>
                        <br>
                        <div class="thumbnail col-xs-5 col-md-3">
                            <center>
                                <br>
                                <br>
                                <br>
                                <span class="glyphicon glyphicon-plus-sign glyphicon-color"></span><a href="new_plan.php">Create a New Plan</a>
                                <br>
                                <br>
                                <br>
                                <br>
                            </center>
                        </div>

                        <?php
                    } else {
                        ?>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <h3> Your plans</h3>
                            </div>
                        </div>

                        <?php
                        //using array to load all the data from table 'plan'
                        $content = array();
                        while ($row = mysqli_fetch_array($select_query_result)) {
                            array_push($content, $row);
                        }
                        //displaying each plan data
                        for ($items = count($content) - 1; $items >= 0; $items--) {
                            ?>
                            <div class="col-xs-6 col-md-3">
                                <div class="panel panel-success">
                                    <div class="panel-heading pe">
                                        <center>
                                            <?php
                                            $nam = $content[$items]['title_trip'];
                                            echo $nam;
                                            $ids = $content[$items]['id'];
                                            ?>
                                            <div class="right">
                                                <span class="glyphicon glyphicon-user"></span><?php echo" " . $content[$items]['no_of_people']; ?>

                                            </div>
                                        </center>
                                    </div>
                                    <div class="panel-body">
                                        <br>
                                        <?php
                                        $idpass = $content[$items]['id'];
                                        ?>
                                        <b> Budget  </b>
                                        <div class="right">
                                            &#8377  <?php echo $content[$items]['ibudget']; ?>
                                        </div>
                                        <br>
                                        <br>
                                        <b>Date</b>
                                        <div class="right">

                                            <?php
                                            //using date() function to set  date format
                                            echo date('dS M', strtotime($content[$items]['_from'])) . " - " . date('dS M Y', strtotime($content[$items]['_to']));
                                            ?>

                                            <br>
                                            <br>
                                        </div>
                                        <form method="POST" action="view_plan.php?id=<?php echo $ids ?>&idp=<?php echo $idpass ?>">
                                            <div class="form-group">
                                                <button type="submit" name="submit" class="button1 btn-block">View Plan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <br>
                </div>
            </div>
        </div>
        <div class="right rightmargin">
            <a href="new_plan.php" > <span class="glyphicon glyphicon-plus-sign"></span></a>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
