<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$args = array(
	'properties' => $properties
);
?>

<?php
	echo WP_RealEstate_Template_Loader::get_template_part('loop/property/archive-inner', $args);
?>

<?php echo WP_RealEstate_Template_Loader::get_template_part('loop/property/pagination', array('properties' => $properties) ); ?>

