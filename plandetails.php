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

        <title>Budget Plan Details</title>
        <style>

            .bw
            {
                background-color:white;
            }
        </style>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <?php
        //receieving data from 'new_plan.php'
        $ib = $_POST['initial_budget'];
        $no_of_people = $_POST['people'];
        $k = 0;
        ?>
        <div class="bg">
            <div class="container">
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <!-- Form part b for new plan -->
                                <form method="POST" action="plandetail_submit.php?budget=<?php echo $ib ?>&people=<?php echo $no_of_people ?>">

                                    <div class="form-group bw">
                                        <div class="col-xs-12">
                                            <lable for="title_trip"><b>Title</b></lable>
                                            <input type="text" class="form-control" placeholder="Enter Title (Ex:- Trip to Goa)" name="title_trip" required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <lable for="_from"><b>From</b></lable>
                                            <input  type="date" class="sample_class form-control" name="_from" placeholder="dd/mm/yy"  min="<?php echo date("Y-m-d") ?>" required="true">
                                        </div>
                                        <div class="col-xs-6">
                                            <lable for="_to"><b>To</b></lable>
                                            <input  type="date" class="sample_class form-control" name="_to" placeholder="dd/mm/yy" min="<?php echo date("Y-m-d") ?>"  required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6 col-md-8">
                                            <lable for="ibudget"><b>Initial Budget</b></lable>
                                            <input type="number" class="form-control"  name="ibudget" value="<?php echo$ib; ?>" required="true" disabled="">
                                        </div>

                                        <div class="col-xs-6 col-md-4">
                                            <lable for="no_of_people"><b>No. of people</b></lable>
                                            <input type="number" class="form-control" name="no_of_people" value="<?php echo$no_of_people; ?>" required="true" disabled="">
                                        </div>
                                    </div>
                                    <?php
                                    $k = 0;
                                    while ($no_of_people) {
                                        $k++;
                                        ?>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <lable for="name_of_person"><b>Person <?php echo$k; ?> </b></lable>
                                                <input type="text" class="form-control" placeholder="Person <?php echo$k; ?> name" name="person<?php echo$k; ?>" required="true">
                                            </div>
                                        </div>
                                        <?php
                                        $no_of_people--;
                                    }
                                    ?>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <label for="submit"></label>
                                            <button type="submit" name="submit" value="submit" class="btn button1 btn-block ">Submit</button>
                                        </div>
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
