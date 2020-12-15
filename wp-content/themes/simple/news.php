<?php 

/*

Template Name: NewsTemp

*/
?>
<?php get_header();?>

<ul>
	<?php // Define Query Parameters
	$the_query = new WP_Query( 'posts_per_page=4' );
	// Do the query loop
	while( $the_query->have_posts() ): $the_query->the_post();
		// Display the Post Title with Hyperlink ?>
		<li>
			<?php the_title(); ?>
			<?php the_excerpt(); ?>
		</li>
	<?php endwhile; ?>
</ul>
   
<?php get_footer(); ?>