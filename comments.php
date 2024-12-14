<div id="comments">
<?php if ( post_password_required() ) : ?>
<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'jacqui' ); ?></p>
</div><!-- #comments -->
<?php
/* Stop the rest of comments.php from being processed,
 * but don't kill the script entirely -- we still have
 * to fully load the template.
 */
return;
endif;
?>
<?php if ( have_comments() ) : ?>
    <h2 id="comments-title">
    <?php  get_the_title(); ?>
    </h2>
        <nav id="comment-nav-above">
            <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'jacqui' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'jacqui' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'jacqui' ) ); ?></div>
        </nav>
            <ol class="commentlist">
                <?php wp_list_comments(); ?>
            </ol>
                <nav id="comment-nav-below">
                    <h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'jacqui' ); ?></h1>
                    <div class="nav-previous">
                        <?php previous_comments_link( __( '&larr; Older Comments', 'jacqui' ) ); ?>
                    </div>
                        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'jacqui' ) ); ?>
                    </div>
                </nav>
    <?php
    /* If there are no comments and comments are closed, leave a message
     * But we don't want the note on pages or post types that do not support comments.
     */
    else:
    ?>
        <p class="nocomments"><?php _e( 'Comments are closed.', 'jacqui' ); ?></p>
<?php endif; ?>
    <?php comment_form(); ?>
</div><!-- #comments -->