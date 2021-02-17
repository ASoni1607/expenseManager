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

        <title>Budget Expense Distribution</title>

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
                    $user_id = $_SESSION['user_id']; //restoring user id from session
                    //GET id from url parameters
                    $idpass = mysqli_real_escape_string($con, $_GET['idp']);
                    //query to load data from table 'expense'
                    $select_query = "SELECT * FROM expense WHERE expense.users_id='$user_id' AND expense.plan_id='$idpass'";
                    $select_query_result = mysqli_query($con, $select_query)or die(mysqli_error($con));
                    $row = mysqli_fetch_array($select_query_result);
                    //query to load data from table 'plan'
                    $select_query1 = "SELECT * FROM plan WHERE plan.user_id='$user_id'AND plan.id='$idpass'";
                    $select_query_result1 = mysqli_query($con, $select_query1)or die(mysqli_error($con));
                    $row1 = mysqli_fetch_array($select_query_result1);
                    $name1 = $row1['name_of_person'];
                    $no_of_people = $row1['no_of_people'];
                    $sum = 0;
                    ?>
                    <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">

                        <div class="panel panel-success">

                            <div class="panel-heading">
                                <center>
                                    <?php
                                    $nam = $row1['title_trip'];
                                    echo $nam;
                                    $ids = $row1['id'];
                                    ?>
                                    <div class="right">
                                        <span class="glyphicon glyphicon-user"></span><?php echo" " . $row1['no_of_people']; ?>
                                    </div>
                                </center>
                            </div>
                            <div class="panel-body">
                                <br>
                                <b> Budget  </b>
                                <div class="right">
                                    &#8377  <?php echo $row1['ibudget']; ?>
                                </div>
                                <br>
                                <br>
                                <?php
                                //creating an empty array to store expense data
                                $spent = array();
                                $names = strtok($name1, ",");
                                //searching for expense made by all persons
                                while ($names) {
                                    $person_spent_total = 0;
                                    $spent[$names] = 0;
                                    ?>
                                    <b> <?php echo $names; ?></b>
                                    <?php
                                    //query to load data from 'expense' table for each person
                                    $select_query2 = "SELECT * FROM expense WHERE expense.users_id='$user_id'AND expense.plan_id='$idpass'";
                                    $select_query_result2 = mysqli_query($con, $select_query2)or die(mysqli_error($con));
                                    //adding expense of each persons and storing in array by their names
                                    while ($row2 = mysqli_fetch_array($select_query_result2)) {
                                        if ($names == $row2['by_whom']) {
                                            $person_spent_total+=$row2['amount_spent'];
                                            $spent[$names] += $row2['amount_spent'];
                                            $sum += $row2['amount_spent'];
                                        }
                                    }
                                    ?>
                                    <div class="right">
                                        <b>&#8377  <?php echo $spent[$names]; ?></b>
                                    </div>
                                    <?php
                                    $names = strtok(",");
                                    echo " <br><br>";
                                }
                                ?>
                                <b> Total Amount Spent  </b>
                                <div class="right">
                                    <b>&#8377  <?php echo $sum; ?></b>
                                </div>
                                <br>
                                <br>
                                <b>Remaining Amount  </b>
                                <div class="right">
                                    <?php
                                    $total = $row1['ibudget'] - $sum;
                                    if ($total > 0) {
                                        ?>
                                        <b class="g"> &#8377 <?php echo $total; ?></b>
                                        <?php
                                    } else if ($total < 0) {
                                        ?>
                                        <b class="r">Overspent by &#8377 <?php echo $total; ?></b>
                                        <?php
                                    } else {
                                        ?>
                                        <b class="b">&#8377 <?php echo $total; ?></b>
                                    <?php }
                                    ?>
                                </div>
                                <br>
                                <br>
                                <b>Individual Share  </b>
                                <div class="right">
                                    &#8377  <?php
                                    $individual_share = $sum / $no_of_people;
                                    echo $individual_share
                                    ?>
                                </div>
                                <br>
                                <br>
                                <?php
                                //formulating and showing the remaining among for each persons
                                $names = strtok($name1, ',');
                                while ($names) {
                                    ?>
                                    <b><?php echo $names; ?></b>
                                    <div class="right">
                                        <?php
                                        $share = $spent[$names] - $individual_share;

                                        if ($share > 0) {
                                            ?>
                                            <b class="g"> Gets back &#8377 <?php echo $share; ?></b>
                                            <?php
                                        } else if ($share < 0) {
                                            ?>
                                            <b class="r"> Owes &#8377 <?php echo $share; ?></b>
                                            <?php
                                        } else {
                                            ?>
                                            <b class="b"> All Settled up</b>
                                        <?php }
                                        ?>

                                    </div>
                                    <br>
                                    <br>

                                    <?php
                                    $names = strtok(",");
                                }
                                ?>
                                <center>
                                    <form method="POST" action="view_plan.php?id=<?php echo $ids ?>&idp=<?php echo $idpass ?>">
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="button1"><span class="glyphicon  glyphicon-arrow-left">   </span>  Go back</button>
                                        </div>
                                    </form>
                                </center>
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
