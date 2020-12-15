<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Simple
 */

// get_header();
?>

<?php wp_head();?>
<?php get_header();?>
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
			<div class="gallery__item "><p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industrie_name_1');?></p><img class="gallery__image" src="images/industries__education.png" alt="">
				<img src="images/industries__education-320.png" alt="" class="gallery__image--small"></div>
			<div class="gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow"><?php echo CFS()->get('industrie_name_2');?></p>
				<img class="gallery__image" src="images/industries_constriction.png" alt="">
				<img class="gallery__image gallery__image--small" src="images/industries_construction_320.png" alt="" >
			</div>
			<div class="gallery__item gallery__item--gray">
				<p class="gallery__item-text"><?php echo CFS()->get('industrie_name_1');?></p></div>
			<div class="gallery__item"><p class="gallery__text">SIMPLE to znak rozpoznawczy szerokiej rodziny rozwiązań informatycznych wspomagających zarządzanie obszarami: finansów, obrotu towarowego, personelu, procesu budownictwa, produkcji, łańcucha dostaw czy relacji z klientami. Od ponad 24 lat dostarczamy wyspecjalizowane usługi integracji rozwiązań informatycznych i </p></div>
		</div>
		<div class="gallery__column">
			<div class="gallery__item "><p class="gallery__item-text gallery__item-text--shadow">Transport & Logistyka</p>
				<img class="gallery__image" src="images/industries__transport.png" alt="">
				<img class="gallery__image gallery__image--small" src="images/industries_transport_320.png" alt="" >
			</div>
			<div class="gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow">Instytuty</p>
				<img class= "gallery__image" src="images/industries__institution.png" alt="">
				<img class= "gallery__image gallery__image--small" src="images/industries_institution_320.png" alt="" >
			</div>
			<div class= "gallery__item gallery__item--gray"><p class="gallery__item-text">MSP</p></div>
			<div class= "gallery__item"><p class="gallery__text">doradztwa biznesowego. Nasze produkty i usługi znalazły uznanie ponad 3500 klientów.<br><br>    

			Jesteśmy ludźmi, którzy doskonale znają Twój biznes. Opierając się na naszym doświadczeniu proponujemy rozwiązania, które powstały w oparciu o 
				</p></div>
		</div>
		<div class="gallery__column">
			<div class="gallery__item gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow">Produkcja</p>
				<img class="gallery__image" src="images/industries__production.png" alt="">
				<img class="gallery__image gallery__image--small" src="images/industries_production_320.png" alt="">
			</div>
			<div class="gallery__item">
				<p class="gallery__item-text gallery__item-text--shadow">Medycyna</p>
				<img class="gallery__image" src="images/industries__med.png" alt="">
				<img class="gallery__image gallery__image--small" src="images/industries_medicine_320.png" alt="">
			</div>
			<div class="gallery__item gallery__item--gray"><p class="gallery__item-text">Administracja Publiczna</p></div>
			<div class="gallery__item"><p class="gallery__text">wiedzę zatrudnianych przez nas ekspertów, a które generalnie podnoszą rangę prowadzonych procesów biznesowych i spełniają specyficzne wymagania przedsiębiorstw poszczególnych branż, zapewniając możliwość odniesienia sukcesu w coraz silniej konkurencyjnym otoczeniu.</p></div>
		</div>
	</div>
	</section>

	<section id="products__section" class="products">
	<div class="content">
		
	<div class="products__header">
			<div class="header__image"><img class="header__image__picture" src="images/products_open_folder.png" alt=""></div>
			<h2 class="header__title">Produkty</h2>
		</div>
		<div class="products__description"><p class="products__text">Nieustannie doskonalimy nasze produkty i usługi. Budujemy naszą ofertę z myślą o potrzebach biznesowych i profilach branżowych naszych Klientów.<br>
			Nasza oferta obejmuje bogate portfolio innowacyjnych systemów informatycznych<br>kompleksowo wspomagających zarządzanie - powstałych na bazie blisko dwudziestoletnich doświadczeń i liczbie ponad 23 tysięcy użytkowników - wzbogacone kompetencjami związanymi z optymalnym doborem infrastruktury informatycznej i profesjonalnymi usługami.</p>
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
		<div class="products__column">
			<div class="products__item"><p class="item__text">WMS</p> </div>
			<div class="products__item"><p class="item__text">OBIEG DOKUMENTÓW</p></div>
		</div>
		<div class="products__column">
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
		</div>
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
			<h2 class="services__title">Usługi</h2>
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

			<div class="services__column">
				<div class="services__item  services__item--login"><img class="services__item-image services__item-image--login" src="images/services_login.png" alt=""><p class="services__item-text">WDROŻENIA ERP, CRM, BI</p></div>
				<div class="services__item services__item--speach"><img class="services__item-image" src="images/services_speach.png" alt=""><p class="services__item-text">DORADZTWO W ZAKRESIE<br class="br">
					INFRASTRUKTURY INFORMATYCZNEJ</p></div>
			</div>
			<div class="services__column services__column--mid">
				<div class="services__item services__item--book"><img class="services__item-image" src="images/services_book.png" alt=""><p class="services__item-text">SZKOLENIA</p></div>
			</div>
			<div class="services__column">
				<div class="services__item services__item--group"><img class="services__item-image" src="images/services__group.png" alt=""><p class="services__item-text">KONSULTING ERP, CRM, BI</p></div>
				<div class="services__item services__item--banknote"><img class="services__item-image services__item-image" src="images/services_banknote.png" alt=""><p class="services__item-text">DOFINANSOWANIE I LEASING</p></div>
		</div>
		</div>
		<div class="services__description">
			<p class="services__text">SIMPLE zapewnia klientom profesjonalną pomoc przy realizacji wielowariantowych, indywidualnych rozwiązań oferując usługi dzięki którym nasi Klienci szybko odnoszą konkretne korzyści biznesowe.<br><br>
				Stawiamy do dyspozycji Państwa nasz doświadczony zespół programistów. Kompleksowo świadczymy usługi związane z tworzeniem na zlecenie dedykowanego oprogramowania. Nasze doświadczenie obejmuje integrację systemów wspomagających 
			zarządzanie z urządzeniami automatyki przemysłowej, wagami, dozownikami, a także systemami telekomunikacyjnymi i centralami telefonicznymi.<br><br>
			Nasi programiści są biegli w tworzeniu oprogramowania dla środowisk Microsoft Windows-SQL ( w tym SQL 2005 i SQL 2012). Posiadamy doświadczenie w programowaniu z wykorzystaniem między innymi Power Builder, Visual Basic, Studio.net, InfoMaker, CrystalReports.<p>

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
			<div class="news__item">
				
				<img class="news__item-image" src="images/news_climbing.png" alt="">
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
				
				<img class="news__item-image" src="images/news_worker.png" alt="">
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
			</div> 
		</div> 
	
		</div>
	</div>
	</section>

	<section id="contact__section" class="contact">
		<div class="content content--contact">
			<div class="contact__header">
				<div class="contact__image"><img class="contact__image-img" src="images/contact_user.png" alt=""></div>
				<h2 class="contact__title">Kontakt</h2>
			</div>
			<div class="contact__slider--small">
			   
				
				<div class="branch__item--small">
					<p class="branch__name">SIMPLE S.A.</p>
					<p class="branch__address">ul. Bronisława Czecha<br>49/51<br>04-555 Warszawa</p>
					<p class="branch__phone">tel.: (22) 812-58-98</p>
					<p class="branch__fax">fax.: (22) 815-49-83</p>
					<p class="branch__email">simple@simple.com.pl</p>
				</div>
				<div class="branch__item--small">
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
				
			</div>
			
		
		 
			
			<div class="contact__branch">
				<div class="branch__item">
					<p class="branch__name">SIMPLE S.A.</p>
					<p class="branch__address">ul. Bronisława Czecha 49/51<br>04-555 Warszawa</p>
				<div class="wrap">
					<p class="branch__phone">tel.: (22) 812-58-98</p>
					<p class="branch__fax">fax.: (22) 815-49-83</p>
				</div>
					<p class="branch__email">simple@simple.com.pl</p>

				</div>
				<div class="branch__item">
					<p class="branch__name">SIMPLE S.A.- Ośrodek Badawczo<br>-Rozwojowy Lublin</p>
					<p class="branch__address">ul. Wolska 11A/4<br>20-411 Lublin</p>
					<p class="branch__phone">tel. kom: +48 696 001 286</p>
					<p class="branch__email">lublin@simple.com.pl</p>
				</div>
				<div class="branch__item">
					<p class="branch__name">SIMPLE S.A. - oddział Rzeszów</p>
					<p class="branch__address">ul. Rejtana 53A<br>35-326 Rzeszów</p>
				<div class="wrap">
					<p class="branch__phone">tel. kom.: +48 696 001 235</p>
					<p class="branch__fax">fax.: (17) 865 42 41</p>
				</div>
					<p class="branch__email">rzeszow@simple.com.pl</p>
				</div>
			</div>
			<div class="contact__submit contact__submit--medium">
				<div class="submit__item">
					<p class="submit__title"><span class="text__span">Zadaj pytanie</span> </p>
					<p class="submit__text">simple@simple.com.pl</p>
				</div>
				<div class="submit__item">
					<p class="submit__title"><span class="text__span">Praca</span> </p>
					<p class="submit__text submit__text--medium">Zainteresowane osoby prosimy<br>o przesłanie CV wraz z listem motywacyjnym na adres:<br>
						praca@simple.com.pl    </p>
				</div>
			</div>
			<div class="contact__submit">
				<div class="submit__send">
					<p class="submit__title">Zadaj pytanie</p>
					<form id="form_1" class="send__form" action="#">
						
						<input class="form__input form__input--name" placeholder="Imię&Nazwisko" type="text">
						<input class="form__input form__input--email" placeholder="Emial" type="email">
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
					<button type="submit" form="form_1" value="Submit" class="form__button">Wyślij</button>
					</div>
					

					</form>
				</div>
				<div class="submit__social">
					<p class="social__title">Social Media</p>
					<div class="social__image"><img src="images/social_facebook.png" alt=""></div>
					<div class="social__image"><img src="images/social_twitter.png" alt=""></div>
					<div class="social__image"><img src="images/social_google.png" alt=""></div>
					<div class="social__image"><img src="images/social_linkedin.png" alt=""></div>
				</div>
				<div class="submit__info">
					<p class = "info__title">Praca</p>
					<p class="info__title info__title--medium">Zadaj Pytanie</p>
					<div class="wrap">
					<p class="info__text">Zainteresowane osoby prosimy o przesłanie CV<br>wraz z listem motywacyjnym na adres:</p>
					<p class="info__text info__text--medium">simple@simple.com.pl</p>
					<p class="info__email">praca@simple.com.pl</p>
					<p class="info__text">Zobacz nasze oferty...</p>
				</div>
				<div class="content">
				<div class="submit__info submit__info--medium">
					<p class = "info__title">Praca</p>
					<p class="info__text ">Zainteresowane osoby prosimy<br>
						o przesłanie CV wraz z listem motywacyjnym na adres:
					   <br> praca@simple.com.pl</p>
				</div>
			
			</div>
					
			</div>
				
		 </div>
			<div class="submit__return">
			<a class="return__link" href="#main__section">Powrót na górę strony</a>
		</div>
		</div>
	</section>

<?php

get_footer();
