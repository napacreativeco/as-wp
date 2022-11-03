<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>another side</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/common.css" rel="stylesheet" type="text/css" />
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css" />
</head>


<div id="navbar">
    <div id="navbar-row">
        <div class="logo">
            <img src="<?php bloginfo('template_url'); ?>/img/stacklogo.svg" alt="another side" />
        </div>
        <nav>
            <?php
            wp_nav_menu( array(
                'menu'           => 'primary_menu',
                'theme_location' => 'primary_menu',
                'fallback_cb'    => false
            ) );
            ?>
        </nav>
    </div>
</div>

<body class="body loading">