<?php 

/*

Template Name: HomeTemp

*/
?>
<?php get_header(); ?>
<!-- <main class="wrapper"> -->
<div id="main" class="main__about content">
<?php if(have_posts()) :
    while(have_posts()) : the_post(); ?>
  
            
          
           

			<img class="main__about__image main__about__image-show" src="<?php echo CFS()->get( 'slider_image_1' );?>" alt="">
			<img class="main__about__image" src="<?php echo CFS()->get( 'slider_image_2' );?>" alt="">
			<img class="main__about__image" src="<?php echo CFS()->get( 'slider_image_3' );?>" alt="">
			<img class="main__about__image" src="<?php echo CFS()->get( 'slider_image_4' );?>" alt="">
	   
			<?php get_sidebar(); ?>
	   
	<div class="about__content content">
		<div class="about__content__title">
			<h1 class="about__content__title-text"><?php echo CFS()->get('title_main');?></h1>
			<p class="about__content__title-mid"><?php echo CFS()->get('slogan_main');?></p>
			<p class= "about__content__title-bottom"><?php echo CFS()->get('view_more');?></p>
		</div>
		
		<div class="about__content__newsletter">
			<div class="newsletter__rectangle">
			<div class="rectangle__item rectangle__item--active"></div>
			<div class="rectangle__item"></div>
			<div class="rectangle__item"></div>
			<div class="rectangle__item"></div>
			</div>
	<div class="row">
			<div class="newsletter__form">
				<div class="newsletter__form__image"><img class="newsletter__form__icon" src="images/main_newsletter_paper.png" alt=""></div>
				<div class="newsletter__form__image newsletter__form__image--medium"><img class="newsletter__form__icon newsletter__form__icon--medium" src="images/main_newsletter_768.png" alt=""></div>
				<p class= "newsletter__form__text">Chcesz otrzymywać od nas Newsletter</p>
				<p class="newsletter__form__text--medium">Newsletter ?</p>
				<input class="newsletter__form__email" type="email">
				
			</div>  
			<button class="newsletter__form__button">Zapisz się</button>
	</div>
			</div>
	</div>
		
	</div> 
	
</section>
<section id="industries__section" class="industries">
		<div class="industries__header content">
			<h2 class="header__title"><?php echo CFS()->get('title_industries');?></h2>
        </div>
        
	<div class="industries__gallery content">
   <?php $industries = CFS()->get( 'industries_loop' );
   if($industries){
foreach ( $industries as $field ) {
    echo $field['industries_name'];
   
    }
} ?>
		<div class="gallery__column">
			<div class="gallery__item "><p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industries_loop');?></p><img class="gallery__image" src="<?php echo CFS()->get('industrie_image_1');?>" alt="">
				<img src="images/industries__education-320.png" alt="" class="gallery__image--small"></div>
			<div class="gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industries_name');?></p>
				<img class="gallery__image" src="<?php echo CFS()->get('industrie_image_2');?>" alt="">
				<img class="gallery__image gallery__image--small" src="images/industries_construction_320.png" alt="" >
			</div>
			<div class="gallery__item gallery__item--gray">
				<p class="gallery__item-text"><?php echo CFS()->get('industrie_name_3');?></p></div>
			<div class="gallery__item"><p class="gallery__text"><?php echo CFS()->get('description_1');?></p></div>
		</div>
		<div class="gallery__column">
			<div class="gallery__item "><p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industrie_name_4');?></p>
				<img class="gallery__image" src="<?php echo CFS()->get('industrie_image_3');?>" alt="">
				<img class="gallery__image gallery__image--small" src="images/industries_transport_320.png" alt="" >
			</div>
			<div class="gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industrie_name_5');?></p>
				<img class= "gallery__image" src="<?php echo CFS()->get('industrie_image_4');?>" alt="">
				<img class= "gallery__image gallery__image--small" src="images/industries_institution_320.png" alt="" >
			</div>
			<div class= "gallery__item gallery__item--gray"><p class="gallery__item-text"><?php echo CFS()->get('industrie_name_6');?></p></div>
			<div class= "gallery__item"><p class="gallery__text"><?php echo CFS()->get('description_2');?></p></div>
		</div>
		<div class="gallery__column">
			<div class="gallery__item gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industrie_name_7');?></p>
				<img class="gallery__image" src="<?php echo CFS()->get('industrie_image_5');?>" alt="">
				<img class="gallery__image gallery__image--small" src="images/industries_production_320.png" alt="">
			</div>
			<div class="gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industrie_name_8');?></p>
				<img class="gallery__image" src="<?php echo CFS()->get('industrie_image_6');?>" alt="">
				<img class="gallery__image gallery__image--small" src="images/industries_medicine_320.png" alt="">
			</div>
			<div class="gallery__item gallery__item--gray"><p class="gallery__item-text"><?php echo CFS()->get('industrie_name_9');?></p></div>
			<div class="gallery__item"><p class="gallery__text"><?php echo CFS()->get('description_3');?></p></div>
		</div>
	</div>
    </section>
    
    
    
<?php endwhile;
endif; ?>

<!-- </main> -->
<?php get_footer(); ?>