<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<a class="screen-reader-text" href="#content">Skip to content</a>

<aside id="top-bar">
    <span class="version">WP CMS v<?php echo get_bloginfo( 'version' ); ?></span>
</aside>

<div id="resizable-area">
    <header id="navigation">
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
        <h2>A WordPress fork, for developers.</h2>
        <hr>
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary-menu',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav>
        <div id="handle"></div>
    </header>
    <div id="editor">
    <aside id="line-numbers"></aside>
        <section id="main-content">


    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>