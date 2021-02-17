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
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Control Budget</title>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>


        <div class="hight1">
            <div id="banner_image">
                <div class= "container">
                    <centre>

                        <div id="banner_content">
                            <h1>We help you control your budget.
                            </h1>
                            <br>
                            <?php { ?>
                                <a href="login.php"  class ="btn btn-success btn-lg active">Start Today
                                </a>
                            <?php }
                            ?>
                        </div>
                    </centre>

                </div>

            </div>

        </div>
        <?php
        include 'footer.php';
        ?>


    </body>
</html>
