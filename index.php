<?php
get_header();
?>

    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', get_post_type());
            }
            the_posts_pagination(array(
                'prev_text' => __('Previous page'),
                'next_text' => __('Next page'),
            ));
        }
        ?>
    </main>

<?php
get_sidebar();
get_footer();