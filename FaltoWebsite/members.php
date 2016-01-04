<!DOCTYPE html>
<!-- This is a blank template that can be used to make more pages -->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" type="text/css" href="styles/common.css">
        <title>Members - ND Faltos</title>
<?php

// Not strictly necessary, but make code more readable
function begin_profile_list() {
    echo "<ul class=\"proflist\">";
}

// as above
function end_profile_list() {
    echo "</ul>";
}

function generate_profile_link($name, $id) {
    $hasprofile = file_exists("profiles/$id.xml");
    $photoid = $id;
    
    echo "<li>";
    if (!file_exists("images/profiles/$photoid.jpg")) {
        $photoid = "default";
    }
    
    echo "<img src=\"images/profiles/$photoid.jpg\" class=\"smprofile\">";
    
    if ($hasprofile) {
        echo "<a href=\"profile.php?id=$id\">$name</a>";
    } else {
        echo $name;
    }
    
    echo "</li>";
}

?>
    </head>
    <body>
        <?php include("includes/header.php"); ?>
        <div class="main">
            <h1>Meet the Faltos</h1>
            <div style="text-align: center;">
                <img style="max-width: 40%;" src="images/2015.jpg" alt="2015 Falto Section Picture">
                <br><i>The 2015 Falto Section</i>
            </div>
            <h3 class="nospc">Section Leaders</h3>
            <?php
            begin_profile_list();
            generate_profile_link("Claire O'Donnell", "codonnell");
            generate_profile_link("Savannah Wunderlich", "swunderlich");
            end_profile_list();
            ?>
            <h3 class="nospc">Seniors (class of '16)</h3>
            <?php
            begin_profile_list();
            generate_profile_link("Hannah Chiarella", "hchiarella");
            generate_profile_link("Ali Granado", "agranado");
            generate_profile_link("Jeffrey Shull", "jshull");
            generate_profile_link("Alyssa Smith", "asmith");
            end_profile_list();
            ?>
            <h3 class="nospc">Juniors (class of '17)</h3>
            <?php
            begin_profile_list();
            generate_profile_link("Nick Aiello", "naiello");
            generate_profile_link("Clay Becker", "cbecker");
            generate_profile_link("Joe Cabrera", "jcabrera");
            generate_profile_link("Maureen Daday", "mdaday");
            generate_profile_link("Josh Huseman", "jhuseman");
            generate_profile_link("Sam Proulx", "sproulx");
            generate_profile_link("Marie Mastellone", "mmastellone");
            generate_profile_link("Monica Nye", "mnye");
            generate_profile_link("Mirek Stolee", "mstolee");
            end_profile_list();
            ?>
            <h3 class="nospc">Sophomores (class of '18)</h3>
            <?php
            begin_profile_list();
            generate_profile_link("Abby Beitler", "abeitler");
            generate_profile_link("Mara Egeler", "megeler");
            generate_profile_link("Carrie Johnson", "cjohnson");
            generate_profile_link("Samantha Sutter", "ssutter");
            end_profile_list();
            ?>
            <h3 class="nospc">Freshmen (class of '19)</h3>
            <?php
            begin_profile_list();
            generate_profile_link("Kenzie Cavanagh", "mcavanagh");
            generate_profile_link("Zane Colon", "zcolon");
            generate_profile_link("Noemi de la Torre", "ndelatorre");
            generate_profile_link("Lauren Humphrey", "lhumphrey");
            generate_profile_link("Nik Procaccini", "nproccac");
            generate_profile_link("Aaron Rea", "area");
            end_profile_list();
            ?>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>
