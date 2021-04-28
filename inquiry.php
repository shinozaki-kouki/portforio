<?php
// Template Name: contact
?>
<?php get_header(); ?>

<div class=font>
    <div class="left">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="size">
        <?php while (have_posts()) { ?>
            <?php the_post(); ?>
            <?php the_content(); ?>
        <?php } ?>
    </div>
</div>
<?php get_footer();
