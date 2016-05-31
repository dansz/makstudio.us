<?php
	
if ( is_page('surfaces') ){
	
	$args = array(
		'post_type' => 'surface', 
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		echo '<div class="surface-gallery tile-grid"><div class="wrap">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>
				<a class="tile" href="#">
					<?php the_post_thumbnail('tile'); ?>
					<span><?php the_title(); ?></span>
				</a>
				<div class="tile-info drawer">
					<header class="surface-head clearfix">
						<div class="two-up">
							<h3><?php the_title(); ?></h3>
							<?php if (rwmb_meta('mak_phonetic') != '') {
								echo '<span class="phonetic">' . rwmb_meta('mak_phonetic') . '</span>';
							} ?>
						</div>
						<div class="short-desc two-up">
							<?php the_excerpt(); ?>
						</div>
					</header>
					<div class="specs clearfix">
						<div class="two-up">
							<h5>Thickness / Finish</h5>
							<?php global $post; ?>
							<span class="thicknesses">
							<?php
							$thicknesses = wp_get_post_terms( $post->ID, 'thickness', array("fields" => "names") );
							echo implode(', ',$thicknesses);	
							?>
							</span>
							<span class="finishes">
							<?php
							$finishes = wp_get_post_terms( $post->ID, 'finish', array("fields" => "names") );
							echo implode(', ',$finishes);	
							?>
							</span>
						</div>
						<div class="two-up">
							<h5>Panel Sizes / Installation</h5>
							<span class="panel-sizes">
							<?php
							$sizes = wp_get_post_terms( $post->ID, 'panel_size', array("fields" => "names") );
							echo implode(', ',$sizes);	
							?>
							</span>
						</div>
					</div>
				</div>
		<?php }
		echo '</div></div>';
	} 
	wp_reset_postdata();
	
} elseif ( is_page('furniture') ){
	
	//WE'LL CHANGE THIS WHEN WE GET SOME ACTUAL CONTENT
	$args = array(
		'post_type' => 'surface', 
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		echo '<div class="surface-gallery tile-grid"><div class="wrap">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>
				<a class="tile" href="#">
					<?php the_post_thumbnail('tile'); ?>
					<span><?php the_title(); ?></span>
				</a>
				<div class="tile-info drawer">
					<header class="surface-head clearfix">
						<div class="two-up">
							<h3><?php the_title(); ?></h3>
							<?php if (rwmb_meta('mak_phonetic') != '') {
								echo '<span class="phonetic">' . rwmb_meta('mak_phonetic') . '</span>';
							} ?>
						</div>
						<div class="short-desc two-up">
							<?php the_excerpt(); ?>
						</div>
					</header>
					<div class="specs clearfix">
						<div class="two-up">
							<h5>Thickness / Finish</h5>
							<?php global $post; ?>
							<span class="thicknesses">
							<?php
							$thicknesses = wp_get_post_terms( $post->ID, 'thickness', array("fields" => "names") );
							echo implode(', ',$thicknesses);	
							?>
							</span>
							<span class="finishes">
							<?php
							$finishes = wp_get_post_terms( $post->ID, 'finish', array("fields" => "names") );
							echo implode(', ',$finishes);	
							?>
							</span>
						</div>
						<div class="two-up">
							<h5>Panel Sizes / Installation</h5>
							<span class="panel-sizes">
							<?php
							$sizes = wp_get_post_terms( $post->ID, 'panel_size', array("fields" => "names") );
							echo implode(', ',$sizes);	
							?>
							</span>
						</div>
					</div>
				</div>
		<?php }
		echo '</div></div>';
	} 
	wp_reset_postdata();
	
}