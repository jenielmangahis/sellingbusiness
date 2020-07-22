<<<<<<< HEAD
<?php
$product_item = isset($product_item) ? $product_item : 'inner-list-small';
?>
<ul class="apus-products-list">
	<?php wc_set_loop_prop( 'loop', 0 ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
		<li class="product-block widget-product">
			<?php wc_get_template_part( 'item-product/'.$product_item ); ?>
		</li>
	<?php endwhile; ?>
</ul>
=======
<?php
$product_item = isset($product_item) ? $product_item : 'inner-list-small';
?>
<ul class="apus-products-list">
	<?php wc_set_loop_prop( 'loop', 0 ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
		<li class="product-block widget-product">
			<?php wc_get_template_part( 'item-product/'.$product_item ); ?>
		</li>
	<?php endwhile; ?>
</ul>
>>>>>>> 12e5ad6e736125b89a23634631fb9afa8f10232c
<?php wp_reset_postdata(); ?>