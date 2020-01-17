<?php
// Styles
wp_register_style("kaizen", get_template_directory_uri() . "/css/kaizen.css", '', '1.0.0');

wp_enqueue_style('kaizen');

// Scripot
wp_enqueue_script( 'kaizen', get_template_directory_uri() . '/js/kaizen.js', array(), '1.0.0', true );

