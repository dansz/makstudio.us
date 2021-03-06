<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */
 

function added_copy(){
	$process = rwmb_meta('mak_process');
	$ordering = rwmb_meta('mak_ordering');
	
	if ($process != '' && $ordering != '') { ?>
		<div class="first one-half process">
			<h3 class="small">Process</h3>
			<div class="entry-content">
			<?php echo $process; ?>
			</div>
		</div>
		<div class="one-half ordering">
			<h3 class="small">Ordering</h3>
			<div class="entry-content">
			<?php echo $ordering; ?>
			</div>
		</div>
	<?php } elseif ($process != '' && $ordering == '') { ?>
		<div class="process">
			<h3 class="small">Process</h3>
			<div class="entry-content">
			<?php echo $process; ?>
			</div>
		</div>
	<?php } elseif ($process == '' && $ordering != '') { ?>
		<div class="process">
			<h3 class="small">Ordering</h3>
			<div class="entry-content">
			<?php echo $ordering; ?>
			</div>
		</div>
	<?php }
	
}

function big_bg_image(){
	if ( has_post_thumbnail() ){
		global $post;
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'bg' );
		echo '<div class="bg-wrapper" style="background-image: url(' . $image[0] . ')">';
		echo '</div>';
	}
}

function product_catalog(){
	if ( is_page(array( 'surfaces', 'furniture' )) ) {
		include_once('inc/tile-gallery.php');
	} elseif ( is_page(array( 'digi-fab', 'architecture' )) ) {
		include_once('inc/gallery.php');
	}
}

function show_designers(){
	if ( is_page(array( 'designers' )) ) {
		include_once('inc/designers.php');
	} 
}

add_action('genesis_after_entry_content', 'added_copy');
add_action('genesis_after_content', 'big_bg_image');
add_action('genesis_before_footer', 'product_catalog');
add_action('genesis_before_footer', 'show_designers');

//* This file handles pages, but only exists for the sake of child theme forward compatibility.
genesis();
