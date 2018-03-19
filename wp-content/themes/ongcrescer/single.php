<?php
/**
 * Template Name: Single
 *
 * @package WordPress
 * @subpackage OngCrescer
 * @template single
 * @since OngCrescer 2018-02-18
 */
?>

<?php get_header(); ?>

<main class="l-main">
    <div class="row-content">
        <h1 class="title"><?php the_title(); ?></h1>
    <?php if(have_posts()) : while (have_posts()) : the_post();?>
    <?php the_content();?>
    <?php endwhile; endif;?>
    </div>
</main>

<?php  get_footer(); ?>