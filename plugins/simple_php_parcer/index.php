<?php
	require_once( dirname(__FILE__) . '/wp-load.php');
	require_once( dirname(__FILE__) . '/wp-admin/includes/admin.php');

	$url = file_get_contents('#url');

	upload($url);

	function upload($cat) {
		
		$reg = '#<div class="td-module-thumb"><a href="(.*)" rel="bookmark"#';
		preg_match_all($reg, $cat, $res, PREG_SET_ORDER, 0);
		
		foreach ($res as $key => $value) {
			$pub = file_get_contents($value[1]);	
			
			preg_match('#<h1 class="entry-title">.*</h1>#', $pub, $title);
			preg_match('#<div class="td-post-content td-pb-padding-side">.*?<footer>#s', $pub, $content);
			
			$post_data = array(
				'post_title'	=> $title[0],
				'post_content'	=> $content[0],
				'post_status'	=> 'publish',
				'post_author'	=> 1,
				'post_category'	=> array(1)
			);

		$post_id = wp_insert_post($post_data, true);
	
		}

	}
?>
