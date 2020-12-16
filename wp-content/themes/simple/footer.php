<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simple
 */

?>

<footer id="footer__section" class="footer">
            
            <div class="content content--contact">
            <div class="footer__slider--small">
                    <div class="company__item--small"><img src="http://localhost/simple/wp-content/uploads/2020/12/footer_ernst.png" alt=""></div>
                    <div class="company__item--small"><img src="http://localhost/simple/wp-content/uploads/2020/12/footer_bell.png" alt=""></div>
                    <div class="company__item--small"><img src="http://localhost/simple/wp-content/uploads/2020/12/footer_ministerstwo.png" alt=""></div>
                    <div class="company__item--small"><img src="http://localhost/simple/wp-content/uploads/2020/12/footer_tnt.png" alt=""></div>
                    <div class="company__item--small"><img src="http://localhost/simple/wp-content/uploads/2020/12/footer_visiton-express.png" alt=""></div>
                </div>
                <div class="footer__company__list">
                    <div class="company__item"><img class="company__image" src="http://localhost/simple/wp-content/uploads/2020/12/footer_visiton-express.png" alt=""></div>
                    <div class="company__item"><img class="company__image" src="http://localhost/simple/wp-content/uploads/2020/12/footer_bell.png" alt=""></div>
                    <div class="company__item"><img class="company__image" src="http://localhost/simple/wp-content/uploads/2020/12/footer_ernst.png" alt=""></div>
                    <div class="company__item"><img class="company__image" src="http://localhost/simple/wp-content/uploads/2020/12/footer_ministerstwo.png" alt=""></div>
                    <div class="company__item"><img class="company__image" src="http://localhost/simple/wp-content/uploads/2020/12/footer_tnt.png" alt=""></div>
                    <div class="company__item"><img class="company__image" src="http://localhost/simple/wp-content/uploads/2020/12/footer_ministerstwo.png" alt=""></div>
               
                </div>
               
            </div>
            
        </footer>

    </div>
    <script src="/Simple/wp-content/themes/simple/js/script.js"></script>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript"  src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript"  src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="/Simple/wp-content/themes/simple/js/slick.min.js"></script>

<script>

$(document).ready(function(){
    $('.contact__slider--small').slick({
        prevArrow:"<img class='a-left control-c prev slick-prev' src='../Simple/images/contact_arrow_320_left.png'>",
      nextArrow:"<img class='a-right control-c next slick-next' src='../Simple/images/contact_arrow_320_slider.png'>",
      slidesToShow:1,
    
    });
  });
  $(document).ready(function(){
    $('.footer__slider--small').slick({
       
  prevArrow:'<div class="footer__arrow footer__arrow--right"><img class="arrow__image arrow__image--right arrow__image--rotated" src="images/news_arrow.png" alt=""></div>',
      nextArrow:'<div class="footer__arrow"><img class="arrow__image" src="images/news_arrow.png" alt=""></div>',
      infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
    });
  });

  $(document).ready(function(){
    $('.main__about__slider').slick({
        prevArrow:"<img class='a-left control-c prev slick-prev' src='/images/footer_arrow_main-color_320_left.png'>",
      nextArrow:"<img class='a-right control-c next slick-next' src='/images/footer_arrow_main-color_320_right.png'>",
    });
  });
  $(document).ready(function(){
  $('.footer__company__list').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,

  prevArrow:'<div class="footer__arrow footer__arrow--right"><img class="arrow__image arrow__image--right arrow__image--rotated" src="http://localhost/simple/wp-content/uploads/2020/12/news_arrow.png" alt=""></div>',
      nextArrow:'<div class="footer__arrow"><img class="arrow__image" src="http://localhost/simple/wp-content/uploads/2020/12/news_arrow.png" alt=""></div>',
});
});
$(document).ready(function(){
  $('.footer__company__list--medium').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
//   slidesPerRow:1,
  prevArrow:'<div class="footer__arrow footer__arrow--right"><img class="arrow__image arrow__image--right arrow__image--rotated" src="images/news_arrow.png" alt=""></div>',
      nextArrow:'<div class="footer__arrow"><img class="arrow__image" src="images/news_arrow.png" alt=""></div>',
});
});
$(document).ready(function(){
  $('.news__slider').slick({
//   infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  
 

  prevArrow:'<div class="footer__arrow footer__arrow--right"><img class="arrow__image arrow__image--right arrow__image--rotated" src="images/news_arrow.png" alt=""></div>',
      nextArrow:'<div class="footer__arrow"><img class="arrow__image" src="images/news_arrow.png" alt=""></div>',
      mobileFirst: false,
  responsive: [
    {
    breakpoint: 786,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      // centerMode: false
    }
    
  },
  {
  breakpoint: 1000,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 1,
    }
  }
  ]
  
});
});
  

</script>


<?php wp_footer(); ?>


</body>
</html>
