<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" type="text/css" href="styles/common.css">
        
        <?php 
            include("includes/lib/newslib.php"); 
            $article = NewsArticle::from_file("news/" . $_GET['a'] . ".xml");
        ?>
        
        <title><?php echo $article->title; ?> - ND Faltos</title>
    </head>
    <body>
        <?php 
        include("includes/header.php"); 
        ?>
        <div class="main">
            <br>
            <?php echo $article->get_image_tag(); ?>
            <h1 class="nospc"><?php echo $article->title; ?></h1>
            <span class="small"><b><?php echo $article->author ?></b>
                - <?php echo $article->date; ?></span>
            <br><br>
            <a href="news.php">Back to News</a>
            <p><?php echo $article->text; ?></p>
            <a href="news.php">Back to News</a>
            <br><br>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
