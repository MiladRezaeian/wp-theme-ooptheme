<?php
include 'constants.php';
include 'app/autoloader.php';


add_action('after_setup_theme', 'Initializer::setup');
add_action('init', 'PostTypes::make_product_post_type');