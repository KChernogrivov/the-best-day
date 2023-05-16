<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-wrapper">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="search__input" placeholder="Поиск" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <label class="screen-reader-text" for="type_event"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="search__input" placeholder="Время" type="text" value="<?php echo get_search_query(); ?>" name="type_event" id="type_event" />
        <label class="screen-reader-text" for="type_event"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="search__input" placeholder="Сумма" type="text" value="<?php echo get_search_query(); ?>" name="type_event" id="type_event" />
        <label class="screen-reader-text" for="type_event"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="search__input" placeholder="Эмоции" type="text" value="<?php echo get_search_query(); ?>" name="type_event" id="type_event" />
        <label class="screen-reader-text" for="type_event"><?php _x( 'Search for:', 'label' ); ?></label>
        <input class="search__input" placeholder="С кем" type="text" value="<?php echo get_search_query(); ?>" name="type_event" id="type_event" />
        <input class="search__submit" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Найти', 'submit button' ); ?>" />
    </div>
</form>
