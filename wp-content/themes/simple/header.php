<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple
 */

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Simple/wp-content/themes/simple/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the new slick-theme.css if you want the default styling
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>> -->
    <link rel="stylesheet" href="/Simple/wp-content/themes/simple/style.css">
</head>
<body>
    <div class="wrapper">
        <section id="main__section" class="main">
            <header class="main__header">
                
            <div class="menu__content content">
                    <div class="menu__logo"><img class="menu__logo__image" src="<?php echo CFS()->get('menu_image');?>" alt="">
            </div>
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item"><a href="#industries__section" class="menu__link"><?php echo CFS()->get('menu_link_1');?></a></li>
                        <li class="menu__item"><a href="#products__section" class="menu__link"><?php echo CFS()->get('menu_link_2');?></a></li>
                        <li class="menu__item"><a href="#services__section" class="menu__link"><?php echo CFS()->get('menu_link_3');?></a></li>
                        <li class="menu__item"><a href="#news__section" class="menu__link"><?php echo CFS()->get('menu_link_4');?></a></li>
                        <li class="menu__item"><a href="#contact__section" class="menu__link"><?php echo CFS()->get('menu_link_5');?></a></li>
                        <li class="menu__item"><a href="#contact__section" class="menu__link"><?php echo CFS()->get('menu_link_6');?></a></li>
                    </ul>
                    
                </nav>
                
            </div>
           
           
            <?php get_search_form(); ?>
           
      
            </header>
            

