<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://metabox.io/docs/registering-meta-boxes/
 */


add_filter( 'rwmb_meta_boxes', 'mak_register_meta_boxes' );

function mak_register_meta_boxes( $meta_boxes )
{
	$prefix = 'mak_';

	$meta_boxes[] = array(
		'id'         => 'page-fields',
		'title'      => __( 'Page Extras', 'mak' ),
		'post_types' => array( 'page' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
			array(
				'name'  => __( 'Process', 'mak' ),
				'id'    => "{$prefix}process",
				'type'  => 'wysiwyg',
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),
			array(
				'name'  => __( 'Ordering', 'mak' ),
				'id'    => "{$prefix}ordering",
				'type'  => 'wysiwyg',
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),
		),
	);
	
	$meta_boxes[] = array(
		'id'         => 'surface-fields',
		'title'      => __( 'More Info', 'mak' ),
		'post_types' => array( 'surface', 'furniture' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
			array(
				'name'  => __( 'Phonetic Name', 'mak' ),
				'id'    => "{$prefix}phonetic",
				'type'  => 'text',
			),
		),
	);
	
	$meta_boxes[] = array(
		'id'         => 'person-fields',
		'title'      => __( 'More Info', 'mak' ),
		'post_types' => array( 'designer' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
			array(
				'name'  => __( 'Job Title', 'mak' ),
				'id'    => "{$prefix}jobtitle",
				'type'  => 'text',
			),
		),
	);
	
	$meta_boxes[] = array(
		'id'         => 'architecture-fields',
		'title'      => __( 'More Info', 'mak' ),
		'post_types' => array( 'architecture', 'digifab' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'autosave'   => true,
		'fields'     => array(
			array(
				'name'  => __( 'Location', 'mak' ),
				'id'    => "{$prefix}location",
				'type'  => 'text',
			),
			array(
				'name'  => __( 'Descriptive Text', 'mak' ),
				'id'    => "{$prefix}desc",
				'desc'	=> 'e.g. "fiberboard | paint | construction adhesive"',
				'type'  => 'text',
			),
		),
	);

	return $meta_boxes;
}

