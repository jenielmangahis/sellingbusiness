<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post;

?>

<?php do_action( 'wp_realestate_before_agent_content', $post->ID ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="agent-grid-v1">
    	<?php if ( has_post_thumbnail() ) { ?>
            <div class="member-thumbnail-wrapper">
                <?php homeo_agent_display_image( $post ,'large'); ?>
                <?php homeo_agent_display_socials($post); ?>
            </div>
        <?php } ?>

    	<?php the_title( sprintf( '<h2 class="agent-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        <div class="agent-information-bottom flex-middle">
            <?php homeo_agent_display_job( $post ); ?>
            <div class="ali-right">
                <?php homeo_agent_display_rating( $post ); ?>
            </div>
        </div>
    </div>
</article><!-- #post-## -->

<?php do_action( 'wp_realestate_after_agent_content', $post->ID ); ?>