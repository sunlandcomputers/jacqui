<?php get_header(); ?>
<div id="primary" <?php esc_attr( jacqui_primary_attr() ); ?>>
    <article id="post-0" class="post error404 not-found">
        <img src="<?php echo get_template_uri(); ?>/library/images/404.png" alt="" />
            <header>
                <h1 class="post-title"><?php _e( '404 Error', 'jacqui' ); ?></h1>
            </header>
                <div class="entry">
                    <p><?php _e( "Your page is not found. Try a global search.", 'jacqui' ); ?></p>
                        <p><?php get_search_form(); ?></p>
                </div>
    </article>
</div><!-- #primary.c8 -->
    <?php get_footer(); ?>
