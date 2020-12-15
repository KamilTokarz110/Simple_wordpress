<?php 

/*

Template Name: NewsTemp

*/
?>
<?php get_header();?>
<div class="wrapper">
<main class ="post">
    <div class="content">
        <header class="post__header">
            <h2 class="post__title">News List</h2>
        </header>
    <div class= "post__list">
<?php
			
						$Post = new WP_Query('type=post'); ?>

		<!-- <div class="news__list"> -->
						<?php if($Post->have_posts()): ?>
					
	 		

	
	 		
			
				<?php while($Post->have_posts()) :$Post->the_post();?>

		 			
				
                
				<?php endwhile; ?>
			
				<?php endif;
                wp_reset_postdata();?>
                 </div>
			</div>
			
		<!-- </div> -->
                        </main>
                        </div>
<?php get_footer(); ?>