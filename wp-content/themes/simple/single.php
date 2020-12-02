<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Simple
 */

get_header();
?>
<?php if(have_posts()):
while(have_posts()) : the_post(); ?>


<h2><?php the_post_thumbnail(); ?></h2>
<h1><?php the_title(); ?></h1>
<p><?php the_author();?></p>
<h2><?php the_date(); ?></h2>
<h2><?php the_tags(); ?></h2>
<h2><?php the_category(); ?></h2>
<h2><?php the_tags(); ?></h2>
<?php the_content(); ?>
<?php comments_template();?>

<?php endwhile;
endif;?>


<?php get_footer();?>