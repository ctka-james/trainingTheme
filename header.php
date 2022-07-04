<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo('charset') ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 載入 Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- 載入 jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- profile pingback -->
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- wp_enqueue -->
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <!-- wp_head -->
    <?php wp_head(); ?>
    <!-- 載入 style.css -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
    <div class="container">
        <header>
            <div class="well well-md">
                <div id="web-title">
                    <?php bloginfo('name'); ?>
                </div>
                <div id="web-description">
                    <?php bloginfo('description'); ?>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-primary bg-faded" id="header-menu">
            <a href="<?php echo home_url(); ?>" class="navbar-brand">測試的網站</a>

            <div class="container-fluid">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'menu_id' => 'main-menu',
                    'menu_class' => 'nav navbar-nav',
                ));
                ?>
            </div>

        </nav>