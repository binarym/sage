<?php

	class Testimonials {

		public function __construct(){

			add_action( 'init', array($this, 'add_testimonials'));
			add_action( 'cmb2_admin_init', array($this, 'testimonial_fields') );

		}

		function add_testimonials(){
			register_post_type('testimonials',
				array(
					'labels' => array(
						'name' => 'Testimonials',
						'singular_name' => 'Testimonial',
						'add_new' => 'Add New',
						'add_new_item' => 'Add New Testimonial',
						'edit' => 'Edit',
						'edit_item' => 'Edit Testimonial',
						'new_item' => 'New Testimonial',
						'view_item' => 'View Testimonial',
						'search_items' => 'Search Testimonials',
						'not_found' => 'No Locations Found',
					),
					'description' => 'Testimonials',
					'public' => true,
					'capability_type' => 'post',
					'supports' => array( 'title', 'revisions', 'thumbnail'),
					'has_archive' => false,
					'rewrite' => false,
					'query_var' => true

				)
			);
		}

		function testimonial_fields(){

			$prefix = '_tf_';

			$cmb_tf = new_cmb2_box( array(
				'id'            => 'tf',
				'title'         => __( 'Testimonial Fields', 'cmb2' ),
				'object_types'  => array( 'testimonials', ), // Post type
				'context'       => 'normal',
				'priority'      => 'high',
				'show_names'    => true, // Show field names on the left
				// 'cmb_styles' => false, // false to disable the CMB stylesheet
				// 'closed'     => true, // Keep the metabox closed by default
			) );

			$cmb_tf->add_field( array(
		    'name'    => 'Testimonial Message',
		    'desc'    => '',
		    'default' => '',
		    'id'      => $prefix . 'message',
		    'type'    => 'textarea',
			) );

		}

	}

	new Testimonials();
