<?php
function load_css_front_page(){
	if(is_page('page-01')){
	wp_register_style('stylesheet_1',get_template_directory_uri() . '/code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
	array(),false,'all');
	wp_enqueue_style('stylesheet_1');
	}
	wp_register_style('stylesheet_2',get_template_directory_uri() .
	 '/cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css',
	array(),false,'all');
	wp_enqueue_style('stylesheet_2');

	wp_register_style('stylesheet_4',
	 'http://fonts.googleapis.com/css?family=Kaushan%20Script:100italic,200,300italic,400italic,600italic,700italic,800italic,900italic,100,300,600,700,800,900,400&amp;subset=cyrillic-ext,greek-ext,latin,latin-ext,cyrillic,greek,vietnamese',
	array(),false,'all');
	wp_enqueue_style('stylesheet_4');

	wp_register_style('stylesheet_5',
	 'http://fonts.googleapis.com/css?family=Lora:100italic,300italic,400italic,600italic,700italic,800italic,900italic,100,200,300,600,700,800,900,400&amp;subset=cyrillic-ext,greek-ext,latin,latin-ext,cyrillic,greek,vietnamese',
	array(),false,'all');
	wp_enqueue_style('stylesheet_5');

	wp_register_style('stylesheet_6',
	 'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i',
	array(),false,'all');
	wp_enqueue_style('stylesheet_6');

	wp_register_style('stylesheet_7','https://ceremonycoffee.com/wp-includes/css/dist/block-library/style.min.css?ver=5.9.2',
	array(),false,'all');
	wp_enqueue_style('stylesheet_7');

	wp_register_style('stylesheet_8','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
	array(),false,'all');
	wp_enqueue_style('stylesheet_8');

	wp_register_style('stylesheet_9',get_template_directory_uri() . 
		'/assets/css/header-style.css',
	array(),rand(111,9999),'all');
	wp_enqueue_style('stylesheet_9');

	wp_register_style('stylesheet_20', get_template_directory_uri() .
	 '/assets/css/test-giaodien.css',
	 array(),rand(111,9999),'all');
	wp_enqueue_style('stylesheet_20');

	// <link rel="stylesheet" href="./assets/css/test-giaodien.css
	// wp_register_style('stylesheet_20',
	//  '/cdn.shopify.com/s/files/1/0137/0207/0330/t/3/compiled_assets/styles67f7.css?445',
	// array(),false,'all');
	// wp_enqueue_style('stylesheet_20');
	
	
}
add_action('wp_enqueue_scripts','load_css_front_page');
add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));

function get_link_by_slug($slug, $type = 'page'){
  $post = get_page_by_path($slug, OBJECT, $type);
  return get_permalink($post->ID);
}

function load_js(){
	wp_enqueue_script('js_1',get_template_directory_uri(). 
		'/ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
	

	// wp_register_script('js_2',get_template_directory_uri(). 
	// 	'/assets/js/script1-front.js',
	// 	'',1,true);
	// wp_enqueue_script('js_2');

	// wp_register_script('js_3',get_template_directory_uri(). 
	// 	'/cdn.shopify.com/s/files/1/0137/0207/0330/t/3/assets/theme1e3d.js?v=13350827956545284162',
	// 	'',1,true);
	// wp_enqueue_script('js_3');

	// wp_register_script('js_4',get_template_directory_uri(). 
	// 	'/assets/js/script3-front.js',
	// 	'',1,true);
	// wp_enqueue_script('js_4');

	// wp_register_script('js_5',get_template_directory_uri(). 
	// 	'/assets/js/base.min.js',
	// 	'',1,true);
	// wp_enqueue_script('js_5');

	// wp_register_script('js_6',get_template_directory_uri(). 
	// 	'/assets/js/libs.min.js',
	// 	'',1,true);
	// wp_enqueue_script('js_6');

}
add_action('wp_enqueue_scripts','load_js');

/*

	*/
	/*

	<script src="../cd	.shopify.com/s/files/1/0137/0207/0330/t/3/assets/jquery-cookie.minbdb8.js?v=7236575574540404818" type="text/javascript"></script>
	<script src="../cdn.shopify.com/s/files/1/0137/0207/0330/t/3/assets/wow.min6e5e.js?v=11511907896353494743" type="text/javascript"></script>
	<script src="../cdn.shopify.com/s/files/1/0137/0207/0330/t/3/assets/gmap3.min4d6a.js?v=11437602946420800559" type="text/javascript"></script>
	<script src="../cdn.shopify.com/s/files/1/0137/0207/0330/t/3/assets/plugincf51.js?v=288407155003940534" type="text/javascript"></script>
	<script src="../cdn.shopify.com/s/files/1/0137/0207/0330/t/3/assets/sticky-sidebar.mind344.js?v=11392197265807597887" type="text/javascript"></script>
	<script src="../cdn.shopify.com/s/files/1/0137/0207/0330/t/3/assets/ResizeSensor928f.js?v=5219781583204757409" type="text/javascript"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQDEK_bp8E3TJz1Sg1VMqF7jn8J3Z7Haw&amp;region=GB" type="text/javascript"></script>
	<script src="../cdn.shopify.com/s/files/1/0137/0207/0330/t/3/assets/frontend088f.js?v=5900705575747514916" type="text/javascript"></script>
*/