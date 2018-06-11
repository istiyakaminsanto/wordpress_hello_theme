<?php 

function consult_intrigatewithvc(){

	vc_map(array(
		"name"=>__('First Section','text-domain'),
		"description"=>"this is my first addon",
		"base"=>"section_1_base",
		"category"=>"Consult",
		"icon"=>get_template_directory_uri()."/images/favicon.ico",
		"params"=>array(

			array(
				'param_name'=>'title_section_1',
				'type'=>'textfield',
				'heading'=>'Section one title',
				'value'=>'eta value',
			),

			array(
				'param_name'=>'title_section_desc_1',
				'type'=>'textarea',
				'heading'=>'Section one Description',
				'value'=>'description value is here',
			),

			array(
				'param_name'=>'title_section_desc_1_color',
				'type'=>'colorpicker',
				'heading'=>'Section one Description color',
			),

			array(
				'param_name'=>'title_section_1_img',
				'type'=>'attach_images',
				'heading'=>'Section one Description images',
			),

		),

	));

}
add_action('vc_before_init', 'consult_intrigatewithvc');



 ?> 