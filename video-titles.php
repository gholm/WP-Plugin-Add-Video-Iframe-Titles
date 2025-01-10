<?php
/**
 * Plugin Name: Video Title Enhancer
 * Plugin URI: https://example.com/video-title-enhancer
 * Description: Automatically adds titles to YouTube, Vimeo, and SlideShare iframes.
 * Version: 1.6
 * Author: Serge
 * Author URI: https://example.com
 * License: GPL2
 */


// Enqueue the JavaScript for dynamically adding titles
add_action('wp_enqueue_scripts', 'enqueue_video_title_script');

function enqueue_video_title_script() {
    wp_enqueue_script(
        'video-title-enhancer',
        plugins_url('video-title-enhancer.js', __FILE__),
        [],
        '1.2',
        true
    );
}
