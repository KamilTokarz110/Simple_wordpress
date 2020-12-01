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


			

		<div class="gallery__column">

	
<?php $industries = CFS()->get( 'industries_loop');

   if($industries){

foreach ( $industries as $field ) { ?>

<div class="gallery__item  gallery__item--gray">
<p class="gallery__item-text gallery__item-text--shadow">
<?php echo $field['industries_name'];?>
</p>
<img class="gallery__image" src="<?php echo $field['industries_image'];?>" alt="">
</div>

 	<?php	}} ?>
			
			<div class="gallery__item"><p class="gallery__text"><?php echo CFS()->get('description');?></p></div>
		</div>
		<div class="gallery__column">

<?php $industriesCol2 = CFS()->get( 'industries_loop_col_2');

		if($industriesCol2){

		foreach ( $industriesCol2 as $field ) { ?>

		<div class="gallery__item  gallery__item--gray">
		<p class="gallery__item-text gallery__item-text--shadow">
		<?php echo $field['industries_name_col_2'];?>
		</p>
		<img class="gallery__image" src="<?php echo $field['industries_image_col_2'];?>" alt="">
		</div>

<?php	}} ?>
			<div class= "gallery__item"><p class="gallery__text"><?php echo CFS()->get('description_2');?></p></div>
		</div>
		<div class="gallery__column">
		<?php $industriesCol3 = CFS()->get( 'industries_loop_col_3');

if($industriesCol3){

foreach ( $industriesCol3 as $field ) { ?>

<div class="gallery__item  gallery__item--gray">
<p class="gallery__item-text gallery__item-text--shadow">
<?php echo $field['industries_name_col_3'];?>
</p>
<img class="gallery__image" src="<?php echo $field['industries_image_col_3'];?>" alt="">
</div>

<?php	}} ?>
			<div class="gallery__item"><p class="gallery__text"><?php echo CFS()->get('description_3');?></p></div>
		
		</div>
	</div>

    </section>
	<section id="products__section" class="products">
        <div class="content">
            
        <div class="products__header">
                <div class="header__image"><img class="header__image__picture" src="images/products_open_folder.png" alt=""></div>
                <h2 class="header__title"><?php echo CFS()->get('title_products');?></h2> 
            </div>
            <div class="products__description"><p class="products__text"><?php echo CFS()->get('description_col_1');?></p>
            </div>
            <div class="products__list--small">
                <div class="products__item--small"><p class="item__text--small">WMS</p> </div>
                <div class="products__item--small"><p class="item__text--small">SIMPLE.ERP</p></div>
                <div class="products__item--small"><p class="item__text--small">SIMPLE. SPRINT</p></div>
                <div class="products__item--small"><p class="item__text--small">SIMPLE.CRM</p></div>
                <div class="products__item--small"><p class="item__text--small">MICROSOFT DYNAMICS<br> CRM 2011</p></div>
                <div class="products__item--small"><p class="item__text--small">OBIEG DOKUMENTÓW</p></div>
                <div class="products__item--small"><p class="item__text--small">SIMPLE.BI </p></div>
                <div class="products__item--small"><p class="item__text--small">SIMPLE.APS</p></div>
                <div class="products__item--small"><p class="item__text--small">SIMPLE.SCM</p></div>
                <div class="products__item--small"><p class="item__text--small">eSIMPLE.KARO HRMS</p></div>
            </div>
            <div class="products__list">
			<?php $products = CFS()->get( 'products_loop');

if($products){

foreach ( $products as $product ) { ?>

			<div class="products__column">
                <div class="products__item"><p class="item__text"><?php echo $product['product_name']; ?></p> </div>
                <div class="products__item"><p class="item__text"><?php echo $product['product_name_2']; ?></p></div>
            </div>

<?php	}} ?>
            
            <!-- <div class="products__column">
                <div class="products__item"><p class="item__text">SIMPLE.<br>ERP</p></div>
                <div class="products__item"><p class="item__text">SIMPLE.<br>BI</p></div>
            </div>
            <div class="products__column">
                <div class="products__item"><p class="item__text">SIMPLE.<br>SPRINT</p></div>
                <div class="products__item"><p class="item__text">SIMPLE.<br>APS</p></div>
            </div>
            <div class="products__column">
                <div class="products__item"><p class="item__text">SIMPLE.<br>CRM</p></div>
                <div class="products__item"><p class="item__text">SIMPLE.<br>SCM</p></div>
            </div>
            <div class="products__column">
                <div class="products__item"><p class="item__text">MICROSOFT<br>DYNAMICS<br>CRM 2011 </p></div>
                <div class="products__item"><p class="item__text">eSIMPLE.<br>KAROHRMS</p></div>
            </div> -->
            </div>
        </div>
        </section>

    


<?php endwhile;
endif; ?>

<!-- </main> -->
<?php get_footer(); ?>
