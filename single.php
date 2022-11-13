<?php
get_header();
?>

<main id="main" class="site-main" role="main">
	<?php
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', get_post_type());
    }
	?>
</main>

<?php
get_sidebar();
get_footer();