<?php 

/*

Template Name: HomeTemp

*/
?>
<?php get_header(); ?>
<!-- <main class="wrapper"> -->
<div id="main" class="main__about content">

  
            
          
           

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
            
            </div>
        </div>
		</section>
		
		<section id="services__section" class="services">
		<div class="content">
		<div class="services__header">
			<div class="header__item">
				<img class="services__item-image services__item-image--large" src="images/services_tool.png" alt="">
				<img class="services__item-image services__item-image--medium" src="images/services__header-image_medium.png" alt="">
			</div>
			<h2 class="services__title"><?php echo CFS()->get('title_services');  ?></h2>
		</div>
		<div class="services__list--small">
			<div class="services__item--small">
				<img class="services__item-image" src="images/services_login.png" alt="">
				<p class="services__item-text--small">WDROŻENIA ERP, CRM, BI</p>
			</div>
				<div class="services__item--small">
					<img class="services__item-image" src="images/services__group.png" alt="">
						<p class="services__item-text--small">KONSULTING ERP, CRM, BI</p>
				</div>
					<div class="services__item--small">
						<img class="services__item-image" src="images/services_book.png" alt="">
						<p class="services__item-text--small">SZKOLENIA</p>
					</div>
					<div class="services__item--small">
						<img class="services__item-image" src="images/services_speach.png" alt="">
					<p class="services__item-text--small">DORADZTWO W ZAKRESIE INFRASTRUKTURY INFORMATYCZNEJ</p>
					</div>
					<div class="services__item--small services__item--small--banknote">
						<img class="services__item-image" src="images/services_banknote.png" alt="">
						<p class="services__item-text--small">DOFINANSOWANIE I LEASING</p>
					</div>

		</div>
		<div class="services__list">
	<?php $services = CFS()->get( 'services_loop');

		if($services){

		foreach ( $services as $service ) { ?>

	<div class="services__column">

			
	<div class="services__item  services__item--login">
		<img class="services__item-image services__item-image--login" src=<?php echo $service['service_image'] ?> alt="">
		<p class="services__item-text"><?php echo $service['service_name']; ?></p></div>
	<div class="services__item services__item--speach">
		<img class="services__item-image" src=<?php echo $service['service_image_2'] ?> alt="">
		<p class="services__item-text"><?php echo $service ['service_name_2']?><br class="br"></p></div>
	</div>

<?php	}} ?>
<?php $services = CFS()->get( 'services_loop_3');

if($services){

foreach ( $services as $service ) { ?>

<div class="services__column">

	
<div class="services__column services__column--mid">
				<div class="services__item services__item--book"><img class="services__item-image" src=<?php echo $service['service_image_col_2']?> alt=""><p class="services__item-text"><?php echo $service['service_name_col_2']?></p></div>
			</div>
</div>

<?php	}} ?>
			
			<?php $services = CFS()->get( 'services_loop_2');

		if($services){

		foreach ( $services as $service ) { ?>

	<div class="services__column">

			
	<div class="services__item  services__item--login">
		<img class="services__item-image services__item-image--login" src=<?php echo $service['service_image_col_3'] ?> alt="">
		<p class="services__item-text"><?php echo $service['service_name_col_3']; ?></p></div>
	<div class="services__item services__item--speach">
		<img class="services__item-image" src=<?php echo $service['service_image_2_col_3'] ?> alt="">
		<p class="services__item-text"><?php echo $service ['service_name_2_col_3']?><br class="br"></p></div>
	</div>

<?php	}} ?>
		</div>
		<div class="services__description">
			<p class="services__text"><?php echo CFS()->get('services_description'); ?><p>

		</div>

	</div>
	</section>

	<section id="news__section" class="news">
	<div class="content">
			<div class="news__header">
			<div class="news__image"><img class="news__image-img" src="images/news_refresh.png" alt=""></div>
			<h2 class="news__title">Aktualności</h2>
		 </div>
		<div class="news__list--small">
			<div class="news__item--small">
			<div class="row slider">
			   
				<div class="item--small"><img class="item__image--small" src="images/news_climbing.png" alt=""></div>
				<div class="item--small"><img class="item__image--small" src="images/news_tablet.png" alt=""></div>
				<div class="item--small"><img class="item__image--small" src="images/news_worker-phone.png" alt=""></div>
				<div class="item--small"><img class="item__image--small" src="images/news_worker.png" alt=""></div>
			   
			</div>
				<p class="info__date--small">1.06.2013</p>
				<h3 class="info__title--small">lorem ipsum.</h3>
				<p class="info__text--small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>
			</div>
		</div>
		<div class="news__list">
		
	 		<div class="news__slider">

	
	 <?php
			
			$Post = new WP_Query('type=post');
			
			

		 if($Post->have_posts()):
			while($Post->have_posts()) :$Post->the_post();?>
			<div class="news__item">
			
				<img class = "news__item-image" src="<?php echo the_post_thumbnail(); ?>" >
				<div class="item__info">
					<p class="info__date"><?php echo get_the_date('d.m.Y');?></p>
					<h3 class="info__title"><?php the_title();?></h3>
					<p class="info__text"><?php echo get_the_excerpt();?></p>
					<hr class="info__line">
					<a href="<?php the_permalink();?>" class="info__link">wiecej</a>
				</div>

			</div>
	
			
	<?php endwhile;
			endif;?>
	</div> 
	</div>

	</div>

	
		
	

	
</section>
			
			<!-- <div class="news__item"> -->
				
			<!-- <img class="news__item-image" src=>
				<div class="item__info">
				<p class="info__date">1.06.2013</p>
				<h3 class="info__title">></h3>
				<p class="info__text">lorem ipsum, lorem ipsum<br>
					lorem ipsumlorem<br>
					lorem ipsum ipsum.</p>
					<hr class="info__line">
					<a href="" class="info__link"></a>
			</div>
			</div>
			
			<div class="news__item">
				<img class="news__item-image" src="images/news_tablet.png" alt="">
				<div class="item__info">
				<p class="info__date">1.06.2013</p>
				<h3 class="info__title">lorem ipsum.</h3>
				<p class="info__text">lorem ipsum, lorem ipsum<br>
					lorem ipsumlorem<br>
					lorem ipsum ipsum.</p>
					<hr class="info__line">
				<a href="#" class="info__link">więcej</a>
			</div>
			</div>
			<div class="news__item">
				<img class="news__item-image" src="images/news_worker-phone.png" alt="">
				<div class="item__info">
				<p class="info__date">1.06.2013</p>
				<h3 class="info__title">lorem ipsum.</h3>
				<p class="info__text">lorem ipsum, lorem ipsum<br>
					lorem ipsumlorem<br>
					lorem ipsum ipsum.</p>
					
					<hr class="info__line">
				<a href="#" class="info__link">więcej</a>
			</div>
			</div>
	
			<div class="news__item">
				
				<img class="news__item-image" src="images/news_tablet.png" alt="">
				<div class="item__info">
				<p class="info__date">1.06.2013</p>
				<h3 class="info__title">lorem ipsum.</h3>
				<p class="info__text">lorem ipsum, lorem ipsum<br>
					lorem ipsumlorem<br>
					lorem ipsum ipsum.</p>
					<hr class="info__line">
				<a href="#" class="info__link">więcej</a>
			</div>
			</div>  -->
		
		
			

		<!-- </div>
	</div>
	</section> -->

    




<!-- </main> -->
<?php get_footer(); ?>
