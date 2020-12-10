<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
<div class="main__search">
            <input class="main__input main__input--active" type="text" value="" name="s" id="s" type="text" placeholder="<?php the_search_query(); ?>">
           
            <div class="main__item "><i class="item__image item__image--active fas fa-search"></i></div>
        </div>
</form>