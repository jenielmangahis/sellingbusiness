<<<<<<< HEAD
<?php

function homeo_child_enqueue_styles() {
	wp_enqueue_style( 'homeo-child-style', get_stylesheet_uri() );
}

=======
<?php

function homeo_child_enqueue_styles() {
	wp_enqueue_style( 'homeo-child-style', get_stylesheet_uri() );
}

>>>>>>> 12e5ad6e736125b89a23634631fb9afa8f10232c
add_action( 'wp_enqueue_scripts', 'homeo_child_enqueue_styles', 100 );