<?php

class Initializer
{
    public static function setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
		new Options_panel();
		self::register_menus();
    }

	public static function start_session(  ) {
		$session_id = session_id();
		if(empty($session_id)){
			session_start();
		}
	}

	public static function register_menus() {
		register_nav_menu( 'top-bar', 'top bar location' );
	}
}