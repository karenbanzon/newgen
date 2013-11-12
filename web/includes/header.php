<!DOCTYPE html>
<html>
    <head>

        <base href="http://newgen.local/">

        <link rel="shortcut icon" href="/images/icons/favicon.ico" />
        <!-- Load Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">

        <title>Newgen Baker</title>
    </head>

    <body>
        <header class="siteHead">
            <div id="brand">
                <div>
                    <a href="index.php"><img class="logo" src="/images/logo.png"></a>
                    <h1>I'm a New Gen Baker</h1>
                    <h4>I'm gonna bake you happy!</h4>
                    <!-- <div class="social">
                        <a href="http://facebook.com/80kph" rel="nofollow"><span class="icon iconfacebook" aria-hidden="true"></span></a>
                        <a href="http://twitter.com/upsigmadeltaphi" rel="nofollow"><span class="icon icontwitter" aria-hidden="true"></span></a>
                        <a href=""><span class="icon iconpinterest" aria-hidden="true"></span></a>
                    </div> -->
                    <nav class="small">
                        <a href="bakeshop.php" <?php if ($thisPage=="bakeshop") 
    echo " class=\"active\""; ?>>The Bake Shop</a>
                        <a href="contact.php" <?php if ($thisPage=="contact") 
    echo " class=\"active\""; ?>>Contact Us</a>
                        <a href="about.php" <?php if ($thisPage=="about") 
    echo " class=\"active\""; ?>>About</a>
                    </nav>

                    <nav class="tabs">
                        <a href="classes.php" <?php if ($thisPage=="home") 
    echo " class=\"active\""; ?>>Home</a>
                        <a href="recipes.php" <?php if ($thisPage=="recipes") 
    echo " class=\"active\""; ?>>Recipes</a>
                        <a href="articles.php" <?php if ($thisPage=="articles") 
    echo " class=\"active\""; ?>>Tips</a>
                        <a href="tips.php" <?php if ($thisPage=="tips") 
    echo " class=\"active\""; ?>>Blog</a>
                        <a href="qa.php" <?php if ($thisPage=="qa") 
    echo " class=\"active\""; ?>>Q&amp;A</a>
                    </nav>  
                </div>
            </div>
        </header>