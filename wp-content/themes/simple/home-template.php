<?php 

/*

Template Name: HomeTemp

*/
?>
<?php get_header(); ?>

<div id="main" class="main__about content">

  
            
          
           

			<img class="main__about__image main__about__image-show" src="/simple/wp-content/uploads/2020/11/logo_simple_copy" alt="">
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
			<?php $products = CFS()->get( 'products_loop');

if($products){

foreach ( $products as $product ) { ?>
                <div class="products__item--small"><p class="item__text--small"><?php echo $product['product_name'];?></p> </div>
                 <div class="products__item--small"><p class="item__text--small"><?php echo $product['product_name_2'];?></p></div>
			<?php	}} ?>
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
			<h2 class="services__title"><?php echo CFS()->get('title_services');?></h2>
		</div>
		<div class="services__list--small">

		<?php $services = CFS()->get( 'services_loop');

if($services){

foreach ( $services as $service ) { ?>

			<div class="services__item--small">
				<img class="services__item-image" src=<?php echo $service['service_image']; ?> alt="">
				<p class="services__item-text--small"><?php echo $service['service_name']; ?></p>
			</div>

				<div class="services__item--small">
					<img class="services__item-image" src=<?php echo $service['service_image_2']; ?> alt="">
						<p class="services__item-text--small"><?php echo $service['service_name_2']; ?></p>
				</div>
				<?php }}?>
					<!-- <div class="services__item--small">
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
					</div> -->

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
		<p class="services__item-text"><?php echo $service['service_name_2_col_3']?><br class="br"></p></div>
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
			<div class="news__image">
				<img class="news__image-img" src="images/news_refresh.png" alt="">
			</div>
			<h2 class="news__title"><?php echo CFS()->get('title_news');?></h2>
		</div>
		 
			
			
		
		


					<?php
			
						$Post = new WP_Query('type=post'); ?>

		<div class="news__list">
						<?php if($Post->have_posts()): ?>
					
	 		<div class="news__slider">

	
	 		
			
				<?php while($Post->have_posts()) :$Post->the_post();?>

		 			
				<div class="news__item ">
			
					<a href="<?php the_permalink();?>"><img class = "news__item-image " src="<?php echo the_post_thumbnail(); ?>"></a>
					<div class="item__info ">
						<p class="info__date "><?php echo get_the_date('d.m.Y');?></p>
						<h3 class="info__title "><?php the_title();?></h3>
						<p class="info__text"><?php echo get_the_excerpt();?></p>
						<hr class="info__line">
						<a href="<?php the_permalink();?>" class="info__link">wiecej</a>
					</div>

				</div>
		
			
				<?php endwhile; ?>
			
				<?php endif;
				wp_reset_postdata();?>
			</div> 
			
		</div>
	</div>
</section>

			
			<section id="contact__section" class="contact">
			<div class="content content--contact">
			<div class="contact__header">
				<div class="contact__image"><img class="contact__image-img" src="images/contact_user.png" alt=""></div>
				<h2 class="contact__title"><?php echo CFS()->get('title_contact');?></h2>
			</div>
			<div class="contact__slider--small">
			<?php $branches = CFS()->get('title_loop');

if($branches){

foreach ( $branches as $branch ) { ?>
				
				<div class="branch__item--small">
					<p class="branch__name"><?php echo $branch['branch_name'];?></p>
					<p class="branch__address"><?php echo $branch['branch_address'];?></p>
					<p class="branch__phone"><?php echo $branch['branch_phone'];?></p>
					<p class="branch__fax"><?php echo $branch['branch_fax'];?></p>
					<p class="branch__email"><?php echo $branch['branch_email'];?></p>
				</div>
<?php }}?>
				<!-- <div class="branch__item--small">
					<p class="branch__name">SIMPLE S.A.- Ośrodek Badawczo<br>-Rozwojowy Lublin</p>
					<p class="branch__address">ul. Wolska 11A/4<br>20-411 Lublin</p>
					<p class="branch__phone">tel. kom: +48 696 001 286</p>
					<p class="branch__email">lublin@simple.com.pl</p>
				</div>
				<div class="branch__item--small">
					<p class="branch__name">SIMPLE S.A. - oddział Rzeszów</p>
					<p class="branch__address">ul. Rejtana 53A<br>35-326 Rzeszów</p>
					<p class="branch__phone">tel. kom.: +48 696 001 235</p>
					<p class="branch__fax">fax.: (17) 865 42 41</p>
					<p class="branch__email">rzeszow@simple.com.pl</p>
				</div>
				 -->
			</div>



			
		
		 
			<div class="contact__branch">
			
			<?php $branches = CFS()->get('title_loop');

   if($branches){

foreach ( $branches as $branch ) { ?>

				<div class="branch__item">
					<p class="branch__name"><?php echo $branch['branch_name'];?></p>
					<p class="branch__address"><?php echo $branch['branch_address'];?></p>
					<div class="wrap">
					<p class="branch__phone"><?php echo $branch['branch_phone'];?></p>
					<p class="branch__fax"><?php echo $branch['branch_fax'];?></p>
					</div>
					<p class="branch__email"><?php echo $branch['branch_email'];?></p>
				</div>
<?php  }}?>

			</div>
			
			<div class="contact__submit contact__submit--medium">
				<div class="submit__item">
					<p class="submit__title"><span class="text__span">Zadaj pytanie</span> </p>
					<p class="submit__text"><?php echo CFS()->get('job_interview_email_1')?></p>
				</div>
				<div class="submit__item">
					<p class="submit__title"><span class="text__span">Praca</span> </p>
					<p class="submit__text submit__text--medium"><?php echo CFS()->get('job_description')?><br>
					<?php echo CFS()->get('job_interview_email_1')?>    </p>
				</div>
			</div>
			<div class="contact__submit">
				<div class="submit__send">
					<p class="submit__title"><?php echo CFS()->get('form_title');?></p>

					
					<!-- <form id="form_1" class="send__form" action=""> -->
					<?php echo do_shortcode('[contact-form-7 id="132" title="Untitled html_id="form_1" html_class="send__form"]');?>
					<!-- <div class="send__form">
						<input class="form__input form__input--name" placeholder="Imię&Nazwisko" type="text">
						<input class="form__input form__input--email" placeholder="Email" type="email">
						<input class="form__input form__input--number" placeholder="Numer telefonu" type="tel">
						<input class="form__input form__input--topic" placeholder="Temat" type="text">
						<textarea class="form__text-area" placeholder="Treść zapytania" name="text-area" id="text-area" cols="30" rows="10"></textarea>
					<div class="form__checkboxes">
						<p class="checkboxes__text">Wybierz rodzaj prezentacji</p>
					 <div class="item">
						<input class="form__checkbox" id="live" name="live" type="checkbox">
						<label class="form__checkbox-label" for="live">W siedzibie</label>
					</div>
					<div class="item item--right">
						<input class="form__checkbox" id="multimedial" name="miltimedial" type="checkbox">
						<label class="form__checkbox-label" for="multimedial">Multimedialna</label>
					</div>
						
					</div>
					<button type="submit" form="form_1" value="Submit" class="form__button">Wyślij</button>  -->
					<!-- </div> -->
					<!-- </form> -->
				</div>
				<div class="submit__social">
					<p class="social__title"><?php echo CFS()->get('social_title');?></p>
					<div class="social__image"><img src="images/social_facebook.png" alt=""></div>
					<div class="social__image"><img src="images/social_twitter.png" alt=""></div>
					<div class="social__image"><img src="images/social_google.png" alt=""></div>
					<div class="social__image"><img src="images/social_linkedin.png" alt=""></div>
				</div>
				<div class="submit__info">
					<p class = "info__title"><?php echo CFS()->get('job_title');?></p>
					<p class="info__title info__title--medium"><?php echo CFS()->get('job_title');?></p>
					<div class="wrap">
					<p class="info__text"><?php echo CFS()->get('job_description');?></p>
					<p class="info__text info__text--medium"><?php echo CFS()->get('job_interview_email_1')?></p>
					<p class="info__email"><?php echo CFS()->get('job_interview_email_2')?></p>
					<p class="info__text">Zobacz nasze oferty...</p>
				</div>
				<div class="content">
				<div class="submit__info submit__info--medium">
					<p class = "info__title"><?php echo CFS()->get('job_title');?></p>
					<p class="info__text "><?php echo CFS()->get('job_description');?> <?php echo CFS()->get('job_interview_email_1')?> </p>
				</div>
			
			</div>
					
			</div>
				
		 </div>
		<div class="submit__return">
			<a class="return__link" href="#main__section">Powrót na górę strony</a>
		</div>
	</div>
		
</section>

<?php get_footer();
