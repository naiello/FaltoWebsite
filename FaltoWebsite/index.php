<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Notre Dame Faltos</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" type="text/css" href="styles/common.css">
        
        <?php
            // Select a background image at random from the photos/covers/ dir
            function pick_bg_img() {
                $images = glob("images/covers/*.jpg");
                $ind = array_rand($images);
                return $images[$ind];
            }
        ?>
        
        <style type="text/css">
            body {
                background-image: url('<?php echo pick_bg_img(); ?>');
                background-repeat: no-repeat;
                background-size: cover;
            }
            #spacer {
                height: 80%;
            }
        </style>
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <div id="spacer"></div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
