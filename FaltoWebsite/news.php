<!DOCTYPE html>
<!-- This is a blank template that can be used to make more pages -->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" type="text/css" href="styles/common.css">
        <title>News/Events</title>
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <div class="main">
            <h1>News / Events</h1>
            <p>Check out what we've been up to lately!</p>
<?php
    include("includes/lib/newslib.php");

    $files = load_news_list();
    $articles = load_articles($files);
    
    foreach ($articles as $article):
?>
            <hr>
            <?php echo $article->get_image_tag(); ?>
            <h2 class="nospc">
                <a href="<?php echo $article->get_view_link(); ?>">
                <?php echo $article->title; ?></a>
            </h2>
            <span class="small"><b><?php echo $article->author; ?></b>
                <?php echo " - " . $article->date; ?></span>
            <p>
                <?php echo $article->get_preview_text(); ?> 
                <a href="<?php echo $article->get_view_link(); ?>">View More</a>
            </p>
<?php 
    endforeach;
?>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
