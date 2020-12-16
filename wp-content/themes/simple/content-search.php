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
                              

					
	 		
                              
                    <div class="post__item" >
			
            <a href="<?php the_permalink();?>"><img class = "news__item-image item__image " src="<?php echo the_post_thumbnail(); ?>"></a>
            
                <div class="item__info">
                <a class="item__link" href="<?php the_permalink();?>"> <h3 class="item__title"><?php the_title();?></h3></a>
                    <p class="item__date" >By <span class="item__author"><?php the_author();?></span> on <?php echo get_the_date('d.m.Y');?></p>
                    <p class="item__description"> <?php echo wp_trim_words( get_the_content(), 20, '<a class="item__link" href="<?php the_permalink();?>"> więcej...</a>' ); ?></p>
                <!-- <hr> -->
                    
                </div>
                   
        </div>
        <hr class="post__line">

		 			
   
        
                       
			
               </div>    
              </div>
                            
                            </main>
                        </div>
			
			
		
                  
<?php get_footer(); ?>