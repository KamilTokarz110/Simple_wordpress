<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple
 */

 ?>


<aside class="main__navigation-fixed">
                
                <nav class="menu-fixed">
                    <div class="menu-fixed__header">
                        <p class="menu-fixed__title">Menu</p>
                    </div>
                    <ul class="menu-fixed__list">
                      
                        
                        
                        <li class="menu-fixed__item menu-fixed__item--dotted"></li>

                        <li class="menu-fixed__item"><a href="#industries__section" data-key="menu__link--active" class="menu-fixed__link"><?php echo CFS()->get('title_industries');?></a></li>
                        <li class="menu-fixed__item"><a href="#products__section" data-key="menu__link--active" class="menu-fixed__link"><?php echo CFS()->get('title_products');?></a></li>
                        <li class="menu-fixed__item"><a href="#services__section" data-key="menu__link--active" class="menu-fixed__link"><?php echo CFS()->get('title_services');?></a></li>
                        <li class="menu-fixed__item"><a href="#news__section" data-key="menu__link--active" class="menu-fixed__link"><?php echo CFS()->get('title_news');?></a></li>
                        <li class="menu-fixed__item"><a href="#contact__section" data-key="menu__link--active" class="menu-fixed__link">Referencje</a></li>
                        <li class="menu-fixed__item "><a href="#contact__section" data-key="menu__link--active" class="menu-fixed__link "><?php echo CFS()->get('title_contact');?></a></li>
                        
                        
                        <li class="menu-fixed__item menu-fixed__item--dotted menu-fixed__item--mid"></li>
                        <?php $links = CFS()->get('aside_menu_loop');
                        if($links){

                            foreach ( $links as $link ) { ?>
                        <li class ="menu-fixed__item"><a href="#" class = "menu-fixed__link "><?php echo $link['link'];?></a></li>
                        <?php }}?>
                        <!-- <li class ="menu-fixed__item"><a href="#" class = "menu-fixed__link">Nagrody</a></li>
                        <li class ="menu-fixed__item"><a href="#" class = "menu-fixed__link">Relacje</a></li>
                        <li class ="menu-fixed__item"><a href="#" class = "menu-fixed__link">Inwestorskie</a></li>
                        <li class ="menu-fixed__item"><a href="#" class = "menu-fixed__link">Partnerzy</a></li>
                        <li class ="menu-fixed__item"><a href="#" class = "menu-fixed__link">Kariera</a></li>
                        <li class ="menu-fixed__item "><a href="#" class = "menu-fixed__link">Strefa klienta</a></li>
                         -->
                        
                        <li class="menu-fixed__item menu-fixed__item--dotted"></li>
                         
                        <li class ="menu-fixed__item menu-fixed__item--social"><a href="#" class="menu-fixed__link"><i class="menu-fixed__social__item fab fa-facebook-f"></i></a></li>
                        <li class ="menu-fixed__item menu-fixed__item--social"> <a href="#" class="menu-fixed__link"><i class="menu-fixed__social__item fab fa-linkedin-in"></i></a></li>
                    
                    </ul>
                  
                    <div class="menu-fixed__arrow "><img class="menu-fixed__arrow__image" src="images/side_menu_arrow.png" alt=""></div>
                    
                </nav>
                
            
            </aside>
