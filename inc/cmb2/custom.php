<?php 

	function edu_custom_field(){
		$education = new_cmb2_box( [
		'id'			=> 'education_field_box',
		'title'			=> 'Education',
		'object_types'	=> 'education',
		] );
		$education_field_id = $education->add_field( array(
		    'id'          => 'education_repeat_group',
		    'type'        => 'group',
		    'options'     => array(
		        'group_title'       => __( 'Education Title {#}', 'portfolio' ), 
		        'add_button'        => __( 'Add Another Education', 'portfolio' ),
		        'remove_button'     => __( 'Remove Education', 'portfolio' ),
		        'sortable'          => true,
		    ),
		) );
		$education->add_group_field( $education_field_id, array(
		    'name' => 'Education Title',
		    'id'   => 'education_title',
		    'type' => 'text',
		) );
		$education->add_group_field( $education_field_id, array(
		    'name' => 'Education Vercity',
		    'id'   => 'education_vercity',
		    'type' => 'text',
		) );
		$education->add_group_field( $education_field_id, array(
		    'name' => 'Education Separator',
		    'id'   => 'education_separator',
		    'type' => 'text',
		) );
		$education->add_group_field( $education_field_id, array(
		    'name' => 'Education Year',
		    'id'   => 'education_year',
		    'type' => 'text',
		) );
		$education->add_group_field( $education_field_id, array(
		    'name' => 'Education Description',
		    'id'   => 'education_description',
		    'type' => 'textarea_small',
		) );
	}
	add_action( 'cmb2_admin_init', 'edu_custom_field' );

	function expr_custom_field(){
		$expr = new_cmb2_box( [
		'id'			=> 'expr_field_box',
		'title'			=> 'Expericence',
		'object_types'	=> 'expericence',
		] );
		$expr_field_id = $expr->add_field( array(
		    'id'          => 'expericence_repeat_group',
		    'type'        => 'group',
		    'options'     => array(
		        'group_title'       => __( 'Expericence Title {#}', 'portfolio' ), 
		        'add_button'        => __( 'Add Another Expericence', 'portfolio' ),
		        'remove_button'     => __( 'Remove Expericence', 'portfolio' ),
		        'sortable'          => true,
		    ),
		) );
		$expr->add_group_field( $expr_field_id, array(
		    'name' => 'Expericence Title',
		    'id'   => 'expericence_title',
		    'type' => 'text',
		) );
		$expr->add_group_field( $expr_field_id, array(
		    'name' => 'Expericence Vercity',
		    'id'   => 'expericence_vercity',
		    'type' => 'text',
		) );
		$expr->add_group_field( $expr_field_id, array(
		    'name' => 'Expericence Separator',
		    'id'   => 'expericence_separator',
		    'type' => 'text',
		) );
		$expr->add_group_field( $expr_field_id, array(
		    'name' => 'Expericence Year',
		    'id'   => 'expericence_year',
		    'type' => 'text',
		) );
		$expr->add_group_field( $expr_field_id, array(
		    'name' => 'Expericence Description',
		    'id'   => 'expericence_description',
		    'type' => 'textarea_small',
		) );
	}
	add_action( 'cmb2_admin_init', 'expr_custom_field' );

	function skill_left_custom_field(){
		$skill_group = new_cmb2_box( [
			'id'			=> 'skill_group_box',
			'title'			=> 'Skills Left',
			'object_types'	=> 'skill',
		] );
		$skill_group_id = $skill_group->add_field( [
			'id'			=> 'skill_group_id',
			'type'			=> 'group',
			'options'		=> [
				'group_title'	=> __( 'Skills Left {#}', 'portfolio' ),
				'add_button'	=> __( 'Add Another Skill', 'portfolio' ),
				'remove_button'	=> __( 'Remove Skill', 'portfolio' ),
			],
			'sortable'		=> true,
		] );

		$skill_group->add_group_field( $skill_group_id, array(
			'id'		=> 'skill_group_name',
			'name'		=> 'Skill Name',
			'type'		=> 'text',
		) );
		$skill_group->add_group_field( $skill_group_id, array(
			'id'		=> 'skill_group_percent',
			'name'		=> 'Skill Percent',
			'type'		=> 'text',
		) );
		$skill_group->add_group_field( $skill_group_id, array(
			'id'		=> 'skill_group_color',
			'name'		=> 'Skill Color',
			'type'		=> 'text',
			'desc'		=> 'Bootstrap bg color class: bg-primary, bg-secondary, bg-success, bg-danger, bg-warning, bg-info, bg-light, bg-dark, bg-body, bg-white, bg-transparent'
		) );
	}
	add_action( 'cmb2_admin_init', 'skill_left_custom_field' );

	function skill_right_custom_field(){
		$skill_group_right = new_cmb2_box( [
			'id'			=> 'skill_group_right_box',
			'title'			=> 'Skills Right',
			'object_types'	=> 'skill',
		] );
		$skill_group_right_id = $skill_group_right->add_field( [
			'id'			=> 'skill_group_right_id',
			'type'			=> 'group',
			'options'		=> [
				'group_title'	=> __( 'Skills Right {#}', 'portfolio' ),
				'add_button'	=> __( 'Add Another Skill', 'portfolio' ),
				'remove_button'	=> __( 'Remove Skill', 'portfolio' ),
			],
			'sortable'		=> true,
		] );

		$skill_group_right->add_group_field( $skill_group_right_id, array(
			'id'		=> 'skill_group_name_right',
			'name'		=> 'Skill Name',
			'type'		=> 'text',
		) );
		$skill_group_right->add_group_field( $skill_group_right_id, array(
			'id'		=> 'skill_group_percent_right',
			'name'		=> 'Skill Percent',
			'type'		=> 'text',
		) );
		$skill_group_right->add_group_field( $skill_group_right_id, array(
			'id'		=> 'skill_group_color_right',
			'name'		=> 'Skill Color',
			'type'		=> 'text',
			'desc'		=> 'Bootstrap bg color class: bg-primary, bg-secondary, bg-success, bg-danger, bg-warning, bg-info, bg-light, bg-dark, bg-body, bg-white, bg-transparent'
		) );
	}
	add_action( 'cmb2_admin_init', 'skill_right_custom_field' );

	function service_custom_fields(){
		$service = new_cmb2_box( [
			'id'			=> 'service_custom_box',
			'title'			=> 'Services',
			'object_types'	=> 'services'
		] );


		$service->add_field( array(
			'id'		=> 'service_read_more',
			'name'		=> 'Read More Button Name',
			'type'		=> 'text'
		) );

		$service->add_field( array(
			'id'		=> 'service_fontawesome_class',
			'name'		=> 'Font Awesome Icon Class',
			'type'		=> 'text'
		) );
	}
	add_action( 'cmb2_admin_init', 'service_custom_fields' );

	function testimonial_custom_field(){
		$testimonial = new_cmb2_box( [
			'id'			=> 'testimonial_custom_field',
			'title'			=> 'Testimonial',
			'object_types'	=> 'testimonial'
		] );
		$testimonial->add_field( [
			'id'		=> 'designation',
			'name'		=> 'Designation',
			'type'		=> 'text',
		] );
	}
	add_action( 'cmb2_admin_init', 'testimonial_custom_field' );

	function post_custom_field(){
		$post_field =  new_cmb2_box( [
			'id'			=> 'post_field',
			'title'			=> 'Post Features',
			'object_types'	=> 'post',
		] );
		$post_field->add_field( [
			'id'		=> 'post_day',
			'name'		=> 'Day',
			'type'		=> 'text',
		] );
		$post_field->add_field( [
			'id'		=> 'post_month',
			'name'		=> 'Month',
			'type'		=> 'text',
		] );
		$post_field->add_field( [
			'id'		=> 'post_button',
			'name'		=> 'Button Label',
			'type'		=> 'text',
		] );
	}
	add_action( 'cmb2_admin_init', 'post_custom_field' );




	