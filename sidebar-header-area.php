<?php 
if ( is_active_sidebar( 'header-area' ) ) : dynamic_sidebar( 'header-area' );
    else : 
?>
    <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label class="screen-reader-text" for="s"><?php _e( 'SEARCH', 'jacqui' ); ?></label>
        <label class="icon-search"><i class="fa fa-search"></i></label>
        <div class='input-container'>
        <input class="custom-text" type="text" placeholder="<?php _e( 'Search', 'jacqui' ); ?>" name="s" id="s"/>
        <input type="submit" class="search-submit" />
    </form>
<?php endif; ?>