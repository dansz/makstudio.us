<?php
	
	$args = array(
		'post_type' => 'designer', 
	);
	
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		echo '<div class="team-members"><div class="wrap"><h3 class="small">The People Behind the Work</h3><ul class="nav">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>
			<li class="designer-link">
				<span class="job-title"><?php echo rwmb_meta('mak_jobtitle'); ?></span>
				<h5><?php the_title(); ?></h5>
			</li>
		<?php }
		echo '</ul>';
	} 
	wp_reset_postdata();
	
	if ( $the_query->have_posts() ) {
		echo '<div class="info-cards">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>
			<div class="card clearfix">
				<div class="first one-third">
				<?php the_post_thumbnail('headshot'); ?>
				</div>
				<div class="card-content two-thirds">
					<header class="person-header">
						<h3><?php the_title(); ?></h3>
						<span class="job-title"><?php echo rwmb_meta('mak_jobtitle'); ?></span>
					</header>
					<div class="person-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php }
		echo '</div></div></div>';
	} 
	wp_reset_postdata();
