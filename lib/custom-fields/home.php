<?php


	class WA_Home_Fields {

		public function __construct(){

			add_action( 'cmb2_admin_init', array($this, 'home_page_fields') );

		}

		function home_page_fields(){

			$prefix = '_wahp_slides_';

			$cmb_home = new_cmb2_box( array(
        'id'            => 'wahp_slides',
        'title'         => __( 'Home Page Slides', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
				'show_on' => array( 'key' => 'front-page', 'value' => '' ),
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    	) );

			$group_field_id = $cmb_home->add_field( array(
		    'id'          => $prefix . 'home_page_slides',
		    'type'        => 'group',
		    'description' => __( 'Slides', 'cmb2' ),
		    // 'repeatable'  => false, // use false if you want non-repeatable group
		    'options'     => array(
		        'group_title'   => __( 'Slide {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		        'add_button'    => __( 'Add Another Slide', 'cmb2' ),
		        'remove_button' => __( 'Remove Slide', 'cmb2' ),
		        'sortable'      => true, // beta
		        // 'closed'     => true, // true to have the groups closed by default
		    ),
			) );

			$cmb_home->add_group_field( $group_field_id, array(
    		'name' => 'Slide Upper Phrase',
    		'id'   => $prefix . 'upper_phrase',
    		'type' => 'text',
    		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
			) );

			$cmb_home->add_group_field( $group_field_id, array(
    		'name' => 'Slide Title',
    		'id'   => $prefix . 'slide_title',
    		'type' => 'text',
    		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
			) );

			$cmb_home->add_group_field( $group_field_id, array(
    		'name' => 'Slide Subtitle',
    		'id'   => $prefix . 'slide_sub_title',
    		'type' => 'text',
    		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
			) );

			$cmb_home->add_group_field( $group_field_id, array(
    		'name' => 'Slide Background Image',
    		'id'   => $prefix . 'bg_image',
    		'type' => 'file',
    		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
			) );


			$prefix = '_wahp_sections_';

			$cmb_home = new_cmb2_box( array(
        'id'            => 'wahp_sections',
        'title'         => __( 'Home Page Sections', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
				'show_on' => array( 'key' => 'front-page', 'value' => '' ),
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    	) );

			$group_field_id = $cmb_home->add_field( array(
		    'id'          => $prefix . 'home_page_sections',
		    'type'        => 'group',
		    'description' => __( 'Sections', 'cmb2' ),
		    // 'repeatable'  => false, // use false if you want non-repeatable group
		    'options'     => array(
		        'group_title'   => __( 'Section {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
		        'add_button'    => __( 'Add Another Section', 'cmb2' ),
		        'remove_button' => __( 'Remove Section', 'cmb2' ),
		        'sortable'      => true, // beta
		        // 'closed'     => true, // true to have the groups closed by default
		    ),
			) );

			$cmb_home->add_group_field( $group_field_id, array(
    		'name' => 'Image',
    		'id'   => $prefix . 'image',
    		'type' => 'file',
    		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
			) );

		}

	}

	new WA_Home_Fields();
