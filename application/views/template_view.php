<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?echo $title?></title>
    <link rel="stylesheet" href="../../fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/templatemo-xtra-blog.css" rel="stylesheet">

</head>
<body>
<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
            <h1 class="text-center">Xtra Blog</h1>
        </div>
        <nav class="tm-nav" id="tm-nav">
            <ul>
                <?php echo ($title == 'Home') ? ('<li class="tm-nav-item active">') : ('<li class="tm-nav-item">'); ?>
                <a href="http://pattern-hmvc.com/" class="tm-nav-link">
                    <i class="fas fa-home"></i>
                    Home
                </a></li>

                <?php echo ($title == 'Patterns') ? ('<li class="tm-nav-item active">') : ('<li class="tm-nav-item">'); ?>
                <a href="http://pattern-hmvc.com/patterns" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Patterns
                </a></li>

                <?php echo ($title == 'Shop') ? ('<li class="tm-nav-item active">') : ('<li class="tm-nav-item">'); ?>
                <a href="http://pattern-hmvc.com/shop" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Shop
                </a></li>

                <?php echo ($title == 'Cart') ? ('<li class="tm-nav-item active">') : ('<li class="tm-nav-item">'); ?>
                <a href="http://pattern-hmvc.com/cart" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Cart
                </a></li>

                <li class="tm-nav-item">
                <a href="http://pattern-hmvc.com/exit" class="tm-nav-link">
                    <i class="fas fa-pen"></i>
                    Exit
                </a></li>
            </ul>
        </nav>
        <div class="tm-mb-65">
            <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                <i class="fab fa-facebook tm-social-icon"></i>
            </a>
            <a href="https://twitter.com" class="tm-social-link">
                <i class="fab fa-twitter tm-social-icon"></i>
            </a>
            <a href="https://instagram.com" class="tm-social-link">
                <i class="fab fa-instagram tm-social-icon"></i>
            </a>
        </div>
        <p class="tm-mb-80 pr-5 text-white">
            Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
        </p>
    </div>
</header>
<main class="tm-main">
<div class="row tm-row">
    <?php include 'application/views/'.$content_view; ?></p>
</div>
</main>
</body>
</html>

