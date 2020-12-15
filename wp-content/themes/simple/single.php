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



<div class="wrapper">

<section class="post">

<div class="content">

    <div class="post__header">
        <h1 class="post__title"><?php the_title(); ?></h1>
        <div class="post__info">
            
            <h2 class="post__date"><?php the_date(); ?></h2>
            <h2 class="post__tags"><?php the_tags(); ?></h2>
            <p class="post__author">By <span class="post__user"><?php the_author();?></span></p>
        </div>

    </div>
    <div class="article">
    
        <article class="main-article">
            
                <h2 class="main-article__title"><?php echo CFS()->get('title_main');?> - <?php echo CFS()->get('slogan_main');?></h2>
               
            
            <div class="main-article__image"><?php the_post_thumbnail(); ?></div>
            <div class="main-article__text"><?php the_content(); ?></div>
        </article>

    </div>
    </div>
</section>
</div>
<?php get_sidebar();?>
<?php endwhile;
endif;?>


<?php get_footer();?>