<?php 

// =======CUSTOM FIELDS FOR HOME PAGE ===========
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home-page-featured-items-banner',
		'title' => 'Home Page | Featured Items | Banner',
		'fields' => array (
			array (
				'key' => 'field_58a726d2576e8',
				'label' => 'home page hero image',
				'name' => 'home_page_hero_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_58a7271a576e9',
				'label' => 'home page banner small text',
				'name' => 'home_page_banner_small_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58a7490ae67e9',
				'label' => 'home page banner large text',
				'name' => 'home_page_banner_large_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58a721995f3f3',
				'label' => 'home page fp image1',
				'name' => 'home_page_fp_image1',
				'type' => 'image',
				'instructions' => 'The first featured item on the HP under the banner. ',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58a752c57e54c',
				'label' => 'home page fp header1',
				'name' => 'home_page_fp_header1',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58a722c34f604',
				'label' => 'home page fp content1',
				'name' => 'home_page_fp_content1',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_58a75259d4db1',
				'label' => 'home page fp link1',
				'name' => 'home_page_fp_link1',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_58a721dd5ad1c',
				'label' => 'home page fp image2',
				'name' => 'home_page_fp_image2',
				'type' => 'image',
				'instructions' => 'The second featured item on the HP under the banner. ',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58a752d37e54d',
				'label' => 'home page fp header2',
				'name' => 'home_page_fp_header2',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58a7246db7175',
				'label' => 'home page fp content2',
				'name' => 'home_page_fp_content2',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_58a7528ad4db2',
				'label' => 'home page fp link2',
				'name' => 'home_page_fp_link2',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_58a7220d5ad1d',
				'label' => 'home page fp image3',
				'name' => 'home_page_fp_image3',
				'type' => 'image',
				'instructions' => 'The third featured item on the HP under the banner. ',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_58a752db7e54e',
				'label' => 'home page fp header3',
				'name' => 'home_page_fp_header3',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_58a7247eb7176',
				'label' => 'home page fp content3',
				'name' => 'home_page_fp_content3',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_58a7529cd4db3',
				'label' => 'home page fp link3',
				'name' => 'home_page_fp_link3',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_type',
					'operator' => '==',
					'value' => 'front_page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
// =======END CUSTOM FIELDS FOR HOME PAGE ===========

// =============CUSTOM FIELDS FOR HOW TO HELP=================

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_general-pages-how-to-help',
		'title' => 'General Pages - How to Help',
		'fields' => array (
			array (
				'key' => 'field_58b05f5693821',
				'label' => 'Info Box2',
				'name' => 'info_box2',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-how-to-help.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

// =============END CUSTOM FIELDS FOR HOW TO HELP=================

// =============CUSTOM FIELDS FOR SPONSORS=================


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_general-pages-sponsors',
		'title' => 'General Pages - Sponsors',
		'fields' => array (
			array (
				'key' => 'field_58b08af1452a7',
				'label' => 'Sponsor1 Img',
				'name' => 'sponsor1_img',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_58b08b0d452a8',
				'label' => 'Sponsor1 Text',
				'name' => 'sponsor1_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_58b08b1f452a9',
				'label' => 'Sponsor2 Img',
				'name' => 'sponsor2_img',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_58b08b5a452aa',
				'label' => 'Sponsor2 Text',
				'name' => 'sponsor2_text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-sponsors.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
// =============END CUSTOM FIELDS FOR SPONSORS=================




?>