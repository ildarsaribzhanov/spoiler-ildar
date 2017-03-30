<?php
/**
 * @package Saribzhanov Ildar #sawtech
 * @version 1.0.1
 */
/*
Plugin Name: Spoiler ildar plugin
Plugin URI: http://sawtech.ru/blog
Description: Плагин для создания спойлеров, чтобы можно было что-то скрывать
Armstrong: Spoiler ildar plugin.
Author: Ildar Saribzhanov
Version: 1.0
Author URI: http://sawtech.ru/blog
License: GPLv2 or letter
*/


// Создаем сам обработчик shortcode
function hyper_spoiler($atts, $content)
{
	if ( ! isset($atts[name])) {
		$sp_name = 'Спойлер';
	} else {
		$sp_name = $atts[name];
	}
	
	return '
		<div class="spoiler_wrap">
		<div class="spoiler_head">' . $sp_name . '</div>
		<div class="spoiler_body">' . $content . '</div>
		</div>
	';
}

add_shortcode('spoiler', 'hyper_spoiler');


// Подключаем скрипты и стили, зависит от JQuery
add_action('wp_enqueue_scripts', 'enqueue_spoiler_css_js');
function enqueue_spoiler_css_js()
{
	wp_enqueue_style('ildar-spoiler', plugin_dir_url(__FILE__) . 'style.css');
	wp_enqueue_script('ildar-spoiler', plugin_dir_url(__FILE__) . 'ildar-spoiler.js', array('jquery'));
}

;
?>