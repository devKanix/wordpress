<?php
/**
 * Template Name: Thank You
 */
get_header();
?>

<div class="thank-you-page">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
