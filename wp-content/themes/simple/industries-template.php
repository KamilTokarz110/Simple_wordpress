<?php 

/*

Template Name: IndustriesTemp

*/
?>

<?php get_header();?>

<?php if(have_posts()) :
    while(have_posts()) : the_post(); ?>


<section id="industries__section" class="industries">
		<div class="industries__header content">
			<h2 class="header__title"><?php echo CFS()->get('title_industries');?></h2>
		</div>
	<div class="industries__gallery content">
		<div class="gallery__column">
			<div class="gallery__item "><p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industrie_name_1');?></p><img class="gallery__image" src="<?php echo CFS()->get('industrie_image_1');?>" alt="">
				<img src="images/industries__education-320.png" alt="" class="gallery__image--small"></div>
			<div class="gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industrie_name_2');?></p>
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
<?php get_footer(); ?>