<<<<<<< HEAD
<?php
extract( $args );
extract( $instance );

$content_html  = '';
$ele_obj = \Elementor\Plugin::$instance;
if ( '0' !== $item_template_id ) {
    $template_content = $ele_obj->frontend->get_builder_content_for_display( $item_template_id );

    if ( ! empty( $template_content ) ) {
        $content_html .= $template_content;
    } else {
        $content_html = '<div class="no-template-message"><span>' . esc_html__( 'The tabs are working. Please, note, that you have to add a template to the library in order to be able to display it inside the tabs.', 'homeo' ) . '</span></div>';
    }
} else {
    $content_html = '<div class="no-template-message"><span>' . esc_html__( 'Template is not defined.', 'homeo' ) . '</span></div>';
}
=======
<?php
extract( $args );
extract( $instance );

$content_html  = '';
$ele_obj = \Elementor\Plugin::$instance;
if ( '0' !== $item_template_id ) {
    $template_content = $ele_obj->frontend->get_builder_content_for_display( $item_template_id );

    if ( ! empty( $template_content ) ) {
        $content_html .= $template_content;
    } else {
        $content_html = '<div class="no-template-message"><span>' . esc_html__( 'The tabs are working. Please, note, that you have to add a template to the library in order to be able to display it inside the tabs.', 'homeo' ) . '</span></div>';
    }
} else {
    $content_html = '<div class="no-template-message"><span>' . esc_html__( 'Template is not defined.', 'homeo' ) . '</span></div>';
}
>>>>>>> 12e5ad6e736125b89a23634631fb9afa8f10232c
echo trim($content_html);