<?php
/* Plugin Name: Marvel
Plugin URI: http://marvel.com/
Description: Marvel Widget.
Version: 1.0
Author: Marvel
Author URI: http://marvel.com/
License: GPL2
*/
 
// creating a widget
class marvel extends WP_Widget { 
function marvel() {
        $widget_ops = array(
        'classname' => 'marvel',
        'description' => 'Marvel Widget'
);
$this->WP_Widget(
        'marvel',
        'Marvel Widget',
        $widget_ops
);
}
function widget($args, $instance) { // widget sidebar output
 
function wpb_tabber() {

wp_register_style('marvel-tabber-style', plugins_url('marvel-style.css', __FILE__));
wp_register_script('marvel-tabber-jquery-js', plugins_url('jquery.min.js', __FILE__), array('jquery'));
wp_register_script('marvel-tabber-api-js', plugins_url('marvel-api.js', __FILE__), array('jquery'));
wp_enqueue_script('modernizr', esc_url_raw('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'), array(), null );
wp_enqueue_style('twentytwelve-googlefonts', esc_url_raw( 'https://fonts.googleapis.com/css?family=Roboto'), array(), null );
wp_enqueue_style('normalize', esc_url_raw('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'), array(), null );
wp_enqueue_style('marvel-tabber-style');
wp_enqueue_script('marvel-tabber-jquery-js');
wp_enqueue_script('marvel-tabber-api-js');
?>
 
<h1>Marvel API</h1>
<div id="results">
</div>
<?php 
}
 
extract($args, EXTR_SKIP);
// pre-widget code from theme
echo $before_widget; 
$tabs = wpb_tabber(); 
// output tabs HTML
echo $tabs; 
// post-widget code from theme
echo $after_widget; 
}
}
 
// registering and loading widget
add_action(
'widgets_init',
create_function('','return register_widget("marvel");')
);
?>
