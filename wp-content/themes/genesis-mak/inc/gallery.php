<?php
	
if ( is_page('architecture') ){
	
	$args = array(
		'post_type' => 'architecture', 
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		echo '<div class="arch-gallery"><div class="wrap">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>
				<a class="tile" href="#">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail('tile_lrg'); ?>
				</a>
				<div class="info drawer">
					<div class="specs clearfix">
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Read More</a>
					</div>
				</div>
		<?php }
		echo '</div></div>';
	} 
	wp_reset_postdata();
	
}